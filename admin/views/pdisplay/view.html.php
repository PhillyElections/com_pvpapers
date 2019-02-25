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
class PvpapersViewPdisplay extends JView 
{
    /**
     * display method of Nomination view
     * @return void
     **/
    public function display($tpl = null)
    {

        $pdisplay = &$this->get('Data');
        $isNew    = ($pdisplay->id < 1);

        $model = $this->getModel('Pdata');
        $pdata = $model->getPublished();

        $text = $isNew ? JText::_('New') : JText::_('Edit');
        JToolBarHelper::title(JText::_('Nomination Paper Display') . ': <small><small>[ ' . $text . ' ]</small></small>');
        if ($isNew) {
            JToolBarHelper::save('save', 'Register');
            JToolBarHelper::cancel('cancel', 'Close');
        } else {
            // for existing nominations the button is renamed `close`
            JToolBarHelper::save('save', 'Update');
            JToolBarHelper::cancel('cancel', 'Close');
        }

        JToolBarHelper::preferences( 'com_pvpapers' );

        $this->assignRef('pdisplay', $pdisplay);
        $this->assignRef('pdata', $pdata);
        $this->assignRef('isNew', $isNew);

        parent::display($tpl);
    }
}
