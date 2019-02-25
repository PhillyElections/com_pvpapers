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
class PvpapersViewNdatum extends JView
{
    /**
     * display method of Nomination view
     * @return void
     **/
    public function display($tpl = null)
    {

        $pdatum = &$this->get('Data');
        $isNew  = ($pdatum->id < 1);

        $model = $this->getModel('Offices');
        $offices = $model->getData();

        $text = $isNew ? JText::_('New') : JText::_('Edit');
        JToolBarHelper::title(JText::_('Nomination Datum') . ': <small><small>[ ' . $text . ' ]</small></small>');
        if ($isNew) {
            JToolBarHelper::save('save', 'Register');
            JToolBarHelper::cancel('cancel', 'Close');
        } else {
            // for existing nominations the button is renamed `close`
            JToolBarHelper::save('save', 'Update');
            JToolBarHelper::cancel('cancel', 'Close');
        }

        JToolBarHelper::preferences( 'com_pvpapers' );

        $this->assignRef('pdatum', $pdatum);
        $this->assignRef('offices', $offices);
        $this->assignRef('isNew', $isNew);

        parent::display($tpl);
    }
}
