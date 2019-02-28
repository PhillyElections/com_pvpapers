<?php
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Nomination Table for Pvpapers Component
 *
 * @package    Philadelphia.Votes
 * @subpackage Components
 * @license    GNU/GPL
 */
class TablePdatum extends JTable
{
    public $id;
    public $office_id;
    public $p_template_form;
    public $p_template_html;
    public $p_template_css;
    public $p_template_affidavit;
    public $p_template_instructions;
    public $p_template_statement;
    public $signatures;
    public $fees;
    public $description;
    public $published;
    public $checked_out;
    public $checked_out_time;
    public $created;
    public $updated;

    /**
     * Define our table, index
     * @param [type] &$_db [description]
     */
    public function __construct(&$_db)
    {
        parent::__construct('#__pv_paper_data', 'id', $_db);
    }

    /**
     * Validate before saving
     * @return boolean
     */
    public function check()
    {
        $error = 0;

        // numeric, non-zero office_id
        if (!is_numeric($this->office_id) || $this->office_id < 1) {
            $this->setError(JText::_('VALIDATION OFFICE SELECTION REQUIRED'));
            $error++;
        }

        // numeric signatures
        if (!is_numeric($this->signatures)) {
            $this->setError(JText::_('VALIDATION SIGNATURES NUMERIC'));
            $error++;
        }

        // numeric fees
        if (!is_numeric($this->fees)) {
            $this->setError(JText::_('VALIDATION FEES NUMERIC'));
            $error++;
        }

        if ($error) {
            return false;
        }
        return true;
    }
}
