<?php
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Output Model for Pvpapers Component
 *
 * @package    Philadelphia.Votes
 * @subpackage Components
 * @license    GNU/GPL
 */
class PvpapersControllerOutput extends PvpapersController
{

    /**
     * Display the edit form
     * @return void
     */
    public function display()
    {
        JRequest::setVar('view', 'output');

        parent::display();
    }

}
