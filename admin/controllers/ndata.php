<?php

// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Ndata Controller for Pvpapers Component.
 *
 * @package    Philadelphia.Votes
 * @subpackage Components
 *
 * @license    GNU/GPL
 */
class PvpapersControllerNdata extends PvpapersController
{
    /**
     * the Ndata View.
     *
     * @return void
     */
    public function display()
    {
        JRequest::setVar('view', 'pdata');

        parent::display();
    }

    /**
     * Redirect Edit task to Nomination Controller.
     *
     * @return void
     */
    public function edit()
    {
        JRequest::checkToken() or jexit('Invalid Token');

        $mainframe = JFactory::getApplication();
        $cid       = JRequest::getVar('cid');
        $mainframe->redirect('index.php?option=com_pvpapers&controller=pdatum&task=edit&cid=' . $cid[0]);
    }

    /**
     * Redirect Add task to Nomination Controller.
     *
     * @return void
     */
    public function add()
    {
        JRequest::checkToken() or jexit('Invalid Token');

        $mainframe = JFactory::getApplication();
        $cid       = JRequest::getVar('cid');
        $mainframe->redirect('index.php?option=com_pvpapers&controller=pdatum&task=add&&cid=' . $cid[0]);
    }

    public function publish()
    {
        JRequest::checkToken() or jexit('Invalid Token');

        $model = $this->getModel('pdata');
        $model->publish();
        $this->display();
    }

    public function unpublish()
    {
        JRequest::checkToken() or jexit('Invalid Token');

        $model = $this->getModel('pdata');
        $model->unpublish();
        $this->display();
    }
}
