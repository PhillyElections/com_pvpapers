<?php
/**
 * Pvpapers View for Pvpapers Component
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 * @link http://docs.joomla.org/Developing_a_Model-View-Controller_Component_-_Part_4
 * @license        GNU/GPL
 */

// No direct access
defined('_JEXEC') or die('Restricted access'); 

/**
 * Pvpapers View
 *
 * @package    Joomla.Tutorials
 * @subpackage Components
 */
class PvpapersViewPapers extends JView
{
    /**
     * Pvpapers view display method
     * @return void
     **/
    public function display($tpl = 'export')
    {

        // Get data from the model

        $items = &$this->get('Data');

        if (!count($items)) {
            $mainframe = JFactory::getApplication();
            $mainframe->redirect('index.php?option=com_pvpapers', 'You cannot export an empty result set.');
        }

        $this->assignRef('items', $items);

        parent::display($tpl);
    }
}
