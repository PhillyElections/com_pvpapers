<?php
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Nomination View for Pvpapers Component
 *
 * @package    Philadelphia.Votes
 * @subpackage Components
 * @license    GNU/GPL
 */
class PvpapersViewNomination extends JView
{
    /**
     * display method of Nomination view
     * @return void
     **/
    public function display($tpl = null)
    {

        $nomination = &$this->get('Data');
        $isNew      = ($nomination->id < 1);

        $text = $isNew ? JText::_('New') : JText::_('Edit');
        JToolBarHelper::title(JText::_('Nomination') . ': <small><small>[ ' . $text . ' ]</small></small>');

        JToolBarHelper::cancel('cancel', 'Close');

        JToolBarHelper::preferences( 'com_pvpapers' );

        $this->assignRef('paper', $nomination);
        $this->assignRef('isNew', $isNew);

        parent::display($tpl);
    }
}
