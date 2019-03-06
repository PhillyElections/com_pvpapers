<?php

// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Nomination Table for Pvpapers Component.
 *
 * @package    Philadelphia.Votes
 * @subpackage Components
 *
 * @license    GNU/GPL
 */
class TablePaper extends JTable
{
    public $id;
    public $hash;
    public $display_id;
    public $p_template_form;
    public $p_template_html;
    public $p_template_css;
    public $p_template_affidavit;
    public $p_template_instructions;
    public $p_template_statement;
    public $candidate_name;
    public $candidate_address;
    public $candidate_address2;
    public $candidate_occupation;
    public $candidate_party;
    public $candidate_district;
    public $candidate_ward;
    public $candidate_division;
    public $candidate_phone;
    public $candidate_zip;
    public $sigform_first_middle;
    public $sigform_last;
    public $sigform_address;
    public $candidate_self_circulating;
    public $candidate_ballot_name_approved;
    public $candidate_double_side_acknowledged;
    public $candidate_resign_to_run_acknowledged;
    public $confirm;
    public $extra_data;
    public $user_ip;
    public $published;
    public $checked_out;
    public $checked_out_time;
    public $created;
    public $updated;

    /**
     * Define our table, index.
     *
     * @param [type] &$_db [description]
     */
    public function __construct(&$_db)
    {
        parent::__construct('#__pv_papers', 'id', $_db);
    }

    /**
     * Validate before saving.
     *
     * @return boolean
     */
    public function check()
    {
        $error = 0;

        // we need a display_id
        if (! $this->display_id) {
            $this->setError(JText::_('VALIDATION OFFICE REQUIRED'));
            $error++;
        }

        // we need a candidate name
        if (! $this->candidate_name) {
            $this->setError(JText::_('VALIDATION CANDIDATE NAME REQUIRED'));
            $error++;
        }

        // we need a candidate address
        if (! $this->candidate_address ) {
            $this->setError(JText::_('VALIDATION CANDIDATE ADDRESS REQUIRED'));
            $error++;
        }

        // we need a candidate occupation
        if (! $this->candidate_occupation) {
            $this->setError(JText::_('VALIDATION CANDIDATE OCCUPATION REQUIRED'));
            $error++;
        }

        // we need a candidate party
        if (! $this->candidate_party) {
            $this->setError(JText::_('VALIDATION CANDIDATE PARTY REQUIRED'));
            $error++;
        }

        if ($error) {
            return false;
        }

        return true;
    }
}
