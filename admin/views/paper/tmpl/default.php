<?php
// no direct access
defined('_JEXEC') or die('Restricted access');

if (count(JRequest::getVar('msg', null, 'post'))) {
    foreach (JRequest::getVar('msg', null, 'post') as $msg) {
        JError::raiseWarning(1, $msg);
    }
}
// try to cast to object next
$row = ! $this->isNew ? $this->paper : (object) JRequest::get('post');

?>
<table width="100%">
  <tr>
    <td>
      <form action="<?=JRoute::_('index.php?option=com_pvpapers');?>" method="post" id="adminForm" name="adminForm">
      <table cellpadding="0" cellspacing="0" border="0" class="adminform" width="20%">
        <tbody>
          <tr>
            <td width="200px" height="30px">
              <label>
                <?=JText::_('ID');?>
              </label>
            </td>
            <td>
              <?=$row->id;?>
            </td>
          </tr>
          <tr>
            <td width="200px" height="30px">
              <label>
                Published
              </label>
            </td>
            <td>
              <?=$row->published ? 'Yes': 'No';?>
            </td>
          </tr>
          <tr>
            <td width="200px" height="30px">
              <label>
                <?=JText::_('CANDIDATE NAME');?>
              </label>
            </td>
            <td>
              <?=$row->candidate_name;?>
            </td>
          </tr>
          <tr>
            <td width="200px" height="30px">
              <label>
                <?=JText::_('CANDIDATE OFFICE');?>
              </label>
            </td>
            <td>
              <?=$row->office_name;?>
            </td>
          </tr>
          <tr>
            <td width="200px" height="30px">
              <label>
                <?=JText::_('CANDIDATE OCCUPATION');?>
              </label>
            </td>
            <td>
              <?=$row->candidate_occupation;?>
            </td>
          </tr>
          <tr>
            <td width="200px" height="30px">
              <label>
                <?=JText::_('CANDIDATE ADDRESS');?>
              </label>
            </td>
            <td>
              <?=$row->candidate_address;?>
            </td>
          </tr>
          <tr>
            <td width="200px" height="30px">
              <label>
                <?=JText::_('CANDIDATE ADDRESS2');?>
              </label>
            </td>
            <td>
              <?=$row->candidate_address2;?>
            </td>
          </tr>
          <tr>
            <td width="200px" height="30px">
              <label>
                <?=JText::_('CANDIDATE ZIP');?>
              </label>
            </td>
            <td>
              <?=$row->candidate_zip;?>
            </td>
          </tr>
          <tr>
            <td width="200px" height="30px">
              <label>
                <?=JText::_('CANDIDATE WARD');?>
              </label>
            </td>
            <td>
              <?=$row->candidate_ward;?>
            </td>
          </tr>
          <tr>
            <td width="200px" height="30px">
              <label>
                <?=JText::_('CANDIDATE DIVISION');?>
              </label>
            </td>
            <td>
              <?=$row->candidate_division;?>
            </td>
          </tr>
          <tr>
            <td width="200px" height="30px">
              <label>
                <?=JText::_('CANDIDATE PARTY');?>
              </label>
            </td>
            <td>
              <?=$row->candidate_party;?>
            </td>
          </tr>
          <tr>
            <td width="200px" height="30px">
              <label>
                <?=JText::_('CANDIDATE PHONE');?>
              </label>
            </td>
            <td>
              <?=$row->candidate_phone;?>
            </td>
          </tr>
          <tr>
            <td width="200px" height="30px">
              <label>
                <?=JText::_('CANDIDATE SELF CIRCULATING');?>
              </label>
            </td>
            <td>
              <?=$row->candidate_self_circulating;?>
            </td>
          </tr>
          <tr>
            <td width="200px" height="30px">
              <label>
                <?=JText::_('CANDIDATE NAME APPROVED');?>
              </label>
            </td>
            <td>
              <?=$row->candidate_ballot_name_approved;?>
            </td>
          </tr>
          <tr>
            <td width="200px" height="30px">
              <label>
                <?=JText::_('CANDIDATE 2SIDED ACKNOWLEDGED');?>
              </label>
            </td>
            <td>
              <?=$row->candidate_double_side_acknowledged;?>
            </td>
          </tr>
          <tr>
            <td width="200px" height="30px">
              <label>
                <?=JText::_('USER_IP');?>
              </label>
            </td>
            <td>
              <?=$row->user_ip;?>
            </td>
          </tr>
          <tr>
            <td width="200px" height="30px">
              <label>
                <?=JText::_('CREATED');?>
              </label>
            </td>
            <td>
              <?=$row->created;?>
            </td>
          </tr>
          <tr>
            <td width="200px" height="250px">
              &nbsp;
            </td>
            <td>
              <input type="hidden" name="task" value="<?=$this->isNew ? 'save' : 'update';?>" />
              <input type="hidden" name="controller" value="paper" />
              <input type="hidden" name="id" value="<?=$row->id;?>" />
              <?=JHTML::_('form.token');?>
            </td>
          </tr>
        </tbody>
      </table>
    </form>
    </td>
    <td width="60%">
      <iframe width="100%" height="850px" src="/index.php?option=com_pvpapers&view=output&format=raw&id=<?=$row->id;?>" />
    </td>
  </tr>
</table>
