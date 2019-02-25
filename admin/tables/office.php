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
class TableOffice extends JTable
{
    public $id;
    public $p_template_html;
    public $p_template_css;
    public $p_template_affidavit;
    public $p_template_instructions;
    public $p_template_statement;
    public $name;
    public $description;
    public $level;
    public $ordering;
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
        parent::__construct('#__pv_offices', 'id', $_db);
    }

}
