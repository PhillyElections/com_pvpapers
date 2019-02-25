<?php
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Nominations View for Pvpapers Component
 *
 * @package    Philadelphia.Votes
 * @subpackage Components
 * @license    GNU/GPL
 */
class PvpapersViewPdata extends JView 
{
    /**
     * Ndata view display method
     * @return void
     **/
    public function display($tpl = null)
    {
        JToolBarHelper::title(JText::_('Nomination Paper Data'), 'generic.png');
        JToolBarHelper::deleteList();
        JToolBarHelper::editListX();
        JToolBarHelper::addNewX();
        JToolBarHelper::publish();
        JToolBarHelper::unpublish();

        JToolBarHelper::preferences( 'com_pvpapers' );

        $pdata      = &$this->get('Data');
        $pagination = &$this->get('Pagination');

        $this->assignRef('pdata', $pdata);
        $this->assignRef('pagination', $pagination);

        parent::display($tpl);
    }
}
