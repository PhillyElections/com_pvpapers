<?php
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Input Controller for Pvpapers Component
 *
 * @package    Philadelphia.Votes
 * @subpackage Components
 * @license    GNU/GPL
 */
class PvpapersControllerInstructions extends PvpapersController
{

    /**
     * Display the edit form
     * @return void
     */
    public function display()
    {
        JRequest::setVar('view', 'instructions');

        parent::display();
    }
}
