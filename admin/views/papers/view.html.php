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
class PvpapersViewNominations extends JView
{
    /**
     * Pvpapers view display method
     * @return void
     **/
    public function display($tpl = null)
    {
        JToolBarHelper::title(JText::_('Nomination papers Manager'), 'generic.png');
        JToolBarHelper::editListX();
        //JToolBarHelper::deleteListX();
        JToolBarHelper::publishList();
        JToolBarHelper::unpublishList();
        JToolBarHelper::preferences( 'com_pvpapers' );

        $t = &JToolbar::getInstance('toolbar');
        $t->appendButton('Link', 'default', 'Export Filter', 'index.php?option=com_pvpapers&controller=papers&format=raw');

        $papers = &$this->get('Data');
        $pagination  = &$this->get('Pagination');

        $this->assignRef('papers', $papers);
        $this->assignRef('pagination', $pagination);

        parent::display($tpl);
    }
}
