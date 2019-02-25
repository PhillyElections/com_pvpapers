<?php

// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Input Model for Pvpapers Component.
 *
 * @package    Philadelphia.Votes
 * @subpackage Components
 *html
 * @license    GNU/GPL
 */
class PvpapersModelInput extends JModel
{
    /**
     * Nominations data array.
     *
     * @var array
     */
    public $_data;

    /**
     * Build and return the query.
     *
     * @return string SQL Query
     */
    public function _buildQuery()
    {
        $query = ' SELECT `nd`.*
                    , `o`.`name` AS `office_name`
                   FROM `#__pv_paper_displays` AS `nd`
                      , `#__pv_paper_data` AS `na`
                      , `#__pv_offices` AS `o` ';
        $where = ' WHERE ';
        $where .= ' `nd`.`published`=1 ';
        $where .= ' AND `na`.`published`=1 ';
        $where .= ' AND `nd`.`data_id`=`na`.`id` ';
        $where .= ' AND `na`.`office_id`=`o`.`id` ';
        $where .= ' AND CAST(now() AS DATETIME) BETWEEN CONCAT(`nd`.`display_start`, \' 08:50:00\') AND CONCAT(`nd`.`display_stop`, \' 17:00:00\') '; // we're currently in the eastern time zone but the server is central

        return $query . $where;
    }

    /**
     * Retrieve, store, and returns Nominations data.
     *
     * @return array Nominations Data
     */
    public function getData()
    {
        // if data hasn't already been obtained, load it
        if (empty($this->_data)) {
            $query       = $this->_buildQuery();
            $this->_data = $this->_getList($query);
        }

        return $this->_data;
    }

    /**
     * Method to store a record.
     *
     * @access    public
     *
     * @param mixed $data
     *
     * @return    boolean    True on success
     */
    public function store($data)
    {

        $pdisplay = $this->getTable('pdisplay');
        $pdisplay->load($data['display_id']);
        $data['published'] = 1;
        $data['p_template_html'] = $pdisplay->p_template_html;
        $data['p_template_css'] = $pdisplay->p_template_css;
        $data['p_template_affidavit'] = $pdisplay->p_template_affidavit;
        $data['p_template_instructions'] = $pdisplay->p_template_instructions;
        $data['p_template_statement'] = $pdisplay->p_template_statement;

        // just in case...
        foreach ($data as $key => $value) {
            $data[$key] = JString::trim($value);
        }

        //capture hash
        if ($data[JUtility::getToken()] == 1) {
            $data['hash'] = JUtility::getToken();
        } else {
            // weird, the hash didn't match. find it and capture it.
            foreach ($data as $datum => $value) {
                if (! in_array($datum, array('display_id', 'candidate_name', 'candidate_party', 'candidate_occupation', 'candidate_address', 'ItemId', 'task', 'view')) && $value == '1') {
                    $data['hash'] = $datum;
                }
            }
        }

        $row = &$this->getTable('Paperhash');

        $row->load($data['hash']);

        // If it matches (on all but party for now), return the old one
        if ($row->id &&
            $row->display_id == $data['display_id'] &&
            $row->candidate_name == $data['candidate_name'] &&
            $row->candidate_party == $data['candidate_party'] &&
            $row->candidate_address == $data['candidate_address'] &&
            $row->candidate_occupation == $data['candidate_occupation'] &&
            $row->candidate_zip == $data['candidate_zip'] &&
            $row->candidate_ward == $data['candidate_ward'] &&
            $row->candidate_division == $data['candidate_division'] &&
            $row->candidate_phone == $data['candidate_phone']
        ) {
            // all done.
            return array('id'=>$row->id, 'hash'=>$row->hash);
        } elseif ($row->id) {
            // if we match on hash (if we have an id)
            // and not enough of the other values, this is really new,
            // so force a new hash
            $data['hash']=JUtility::getToken(1);
        }

        // we didn't match on enough points, so let's start writing a new road
        $row = &$this->getTable('Nomination');

        $data['candidate_phone']    = $data['candidate_phone'] ? preg_replace('/^1|\D/', '', $data['candidate_phone']) : '';
        $temp = json_encode($data);
        $data['extra_data'] = $temp;
        $dateNow = &JFactory::getDate();

        $dateIndex = 'created';

        //        $data['extra_data'] = implode();

        $data[$dateIndex] = $dateNow->toMySQL();

        // Bind the form fields to the Item table
        if (! $row->bind($data)) {
            $this->setError($this->_db->getErrorMsg());
            dd($data, $this->_db->getErrorMsg());

            return false;
        }

        // Make sure the Item record is valid
        if (! $row->check()) {
            //$this->setError($this->_db->getErrorMsg());
            foreach ($row->getErrors() as $msg) {
                $this->setError($msg);
            }

            return false;
        }

        // Store the web link table to the database
        if (! $row->store()) {
            $this->setError($this->_db->getErrorMsg());

            return false;
        }

        return array('id'=>$row->_db->insertId(), 'hash'=>$data['hash']);
    }

    /**
     * unpublish data.
     *
     * @return void
     */
    public function unpublish()
    {
        $cid = JRequest::getVar('cid');
        $hash = JRequest::getVar('hash');

        foreach ($cid as $id) {
            $rows = $this->_getList(' SELECT * FROM `#__pv_papers` WHERE `id`=' . $this->_db->quote($id) . ' AND `hash`=' . $this->_db->quote($hash));
            if (count($rows)) {
                $row = JTable::getInstance('Nomination', 'Table');
                $row->load($id);
                $row->publish($id, 0);
            }
        }
    }
}
