<?php
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Ndatum Controller for Pvpapers Component
 *
 * @package    Philadelphia.Votes
 * @subpackage Components
 * @license    GNU/GPL
 */
class PvpapersControllerPdatum extends PvpapersController
{
    /**
     * Bind tasks to methods
     * @return void
     */
    public function __construct()
    {
        parent::__construct();

        // Register Extra tasks
        $this->registerTask('add', 'edit');
        $this->registerTask('update', 'save');
    }

    /**
     * Ndisplay the edit form
     * @return void
     */
    public function edit()
    {
        $view = $this->getView('pdatum', JRequest::getWord('format', 'html'));
        $view->setModel($this->getModel('Ndatum'), true);
        $view->setModel($this->getModel('Offices'), false);

        $view->display();
    }

    /**
     * Save a record (and redirect to main page)
     *
     * @return void
     */
    public function save()
    {

        JRequest::checkToken() or jexit('Invalid Token');

        $model = $this->getModel('Ndatum');
        $post  = JRequest::get('post');

        if ($model->store($post)) {
            $msg = JText::_('Saved!');
        } else {
            // let's grab all those errors and make them available to the view
            JRequest::setVar('msg', $model->getErrors());

            return $this->edit();
        }

        // Let's go back to the list view
        $link = 'index.php?option=com_pvpapers&controller=pdata';

        $this->setRedirect($link, $msg);
    }

    /**
     * Remove record(s)
     * @return void
     */
    public function remove()
    {
        JRequest::checkToken() or jexit('Invalid Token');

        $model = $this->getModel('pdatum');
        if (!$model->delete()) {
            $msg = JText::_('Error: One or More Nominations Could not be Deleted');
        } else {
            $msg = JText::_('Nominations(s) Deleted');
        }

        $this->setRedirect('index.php?option=com_pvpapers', $msg);
    }

    /**
     * Cancel editing a record
     * @return void
     */
    public function cancel()
    {
        $msg = JText::_('Operation Cancelled');

        $this->setRedirect('index.php?option=com_pvpapers', $msg);
    }
}
