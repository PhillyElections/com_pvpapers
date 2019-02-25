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
class TablePaperhash extends JTable
{
    public $id;
    public $hash;
    public $display_id;
    public $template_html;
    public $template_css;
    public $template_affidavit;
    public $template_instructions;
    public $template_statement;
    public $candidate_name;
    public $candidate_address;
    public $candidate_occupation;
    public $candidate_party;
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
        parent::__construct('#__pv_papers', 'hash', $_db);
    }
}
