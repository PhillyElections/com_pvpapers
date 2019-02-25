<?php
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Nominations Controller for Pvpapers Component
 *
 * @package    Philadelphia.Votes
 * @subpackage Components
 * @license    GNU/GPL
 */
class PvpapersControllerPapers extends PvpapersController
{
    /**
     * Ndisplay the Nominations View
     * @return void
     */
    public function display()
    {
        JRequest::setVar('view', 'papers');

        parent::display();
    }

    /**
     * Redirect Edit task to Nomination Controller
     * @return void
     */
    public function edit()
    {
        JRequest::checkToken() or jexit('Invalid Token');

        $mainframe = JFactory::getApplication();
        $cid       = JRequest::getVar('cid');
        $mainframe->redirect('index.php?option=com_pvpapers&controller=paper&task=edit&cid=' . $cid[0]);
    }

    /**
     * Redirect Add task to Nomination Controller
     * @return void
     */
    public function add()
    {
        JRequest::checkToken() or jexit('Invalid Token');

        $mainframe = JFactory::getApplication();
        $cid       = JRequest::getVar('cid');
        $mainframe->redirect('index.php?option=com_pvpapers&controller=paper&task=add&&cid=' . $cid[0]);
    }

    public function publish()
    {
        JRequest::checkToken() or jexit('Invalid Token');

        $model = $this->getModel('papers');
        $model->publish();
        $this->display();
    }

    public function unpublish()
    {
        JRequest::checkToken() or jexit('Invalid Token');

        $model = $this->getModel('papers');
        $model->unpublish();
        $this->display();
    }

    public function remove()
    {
        JRequest::checkToken() or jexit('Invalid Token');

        $model = $this->getModel('papers');
        $model->delete();
        $this->display();
    }
}
