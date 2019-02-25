<?php

// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Item View for Pvpapers Component.
 *
 * @package    Philadelphia.Votes
 * @subpackage Components
 *
 * @license    GNU/GPL
 */
class PvpapersViewOutput extends JView
{
    /**
     * display method of Item view.
     *
     * @param mixed $tpl
     *
     * @return void
     **/
    public function display($tpl = 'raw')
    {
        $html = &$this->get('Html');
        $css = &$this->get('Css');
        $data = &$this->get('Data');

        $this->assignRef('html', $html);
        $this->assignRef('css', $css);
        $this->assignRef('data', $data);

        parent::display($tpl);
    }
}
