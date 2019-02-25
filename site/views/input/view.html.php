<?php
// No direct access
defined('_JEXEC') or die('Restricted access');

/**
 * Item View for Pvpapers Component
 *
 * @package    Philadelphia.Votes
 * @subpackage Components
 * @license    GNU/GPL
 */
class PvpapersViewInput extends JView
{
    /**
     * display method of Item view
     * @return void
     **/
    public function display($tpl = null)
    {
        $model = $this->getModel();
        $pdisplays = $this->get('Data');
        $this->assignRef('pdisplays', $pdisplays);

        parent::display($tpl);
    }
}
