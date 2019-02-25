<?php
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Item View for Pvpapers Component
 *
 * @package    Philadelphia.Votes
 * @subpackage Components
 * @license    GNU/GPL
 */
class PvpapersViewOutput extends JView
{
    /**
     * display method of Item view
     * @return void
     **/
    public function display($tpl = '')
    {
        $this->assignRef('id', JRequest::getVar('id'));
        $this->assignRef('hash', JRequest::getVar('hash'));

        parent::display();
    }
}
