<?php
// no direct access
defined('_JEXEC') or die('Restricted access');

$params = &JComponentHelper::getParams('com_pvpapers');

//force the token to change (so we can't browse in and duplicate hashes)
$reset=JUtility::getToken(true);

$document = &JFactory::getDocument();

$messages = JRequest::getVar('msg', null, 'post');
if (count($messages)) {
    foreach ($messages as $msg) {
        JError::raiseWarning(1, $msg);
    }
}

$pdisplays = $this->pdisplays;
//$request  = JRequest::get('server');
//dd($request['remote_addr']);
//if (! count($pdisplays) || $request['REMOTE_ADDR'] != "173.49.241.24" ) {
if (! count($pdisplays) ) {
    echo '<p>' . JText::_('NOTHING TO SEE HERE') . '</p>';
} else {
    $row = (object) JRequest::get('post');

    jimport('pvcombo.PVCombo');

    $candidate_districts = array(
        (object) array(
            'idx'=>'', 'value'=>JText::_('SELECT A DISTRICT')
        ),
        (object) array(
            'idx'=>'1', 'value'=>'1'
        ),
        (object) array(
            'idx'=>'2', 'value'=>'2'
        ),
        (object) array(
            'idx'=>'3', 'value'=>'3'
        ),
        (object) array(
            'idx'=>'4', 'value'=>'4'
        ),
        (object) array(
            'idx'=>'5', 'value'=>'5'
        ),
        (object) array(
            'idx'=>'6', 'value'=>'6'
        ),
        (object) array(
            'idx'=>'7', 'value'=>'7'
        ),
        (object) array(
            'idx'=>'8', 'value'=>'8'
        ),
        (object) array(
            'idx'=>'9', 'value'=>'9'
        ),
        (object) array(
            'idx'=>'10', 'value'=>'10'
        ),
    );

    $candidate_parties = array(
        (object) array(
            'idx'=>'', 'value'=>JText::_('SELECT A PARTY')
            ),
        (object) array(
            'idx'=>'Democratic', 'value'=>JText::_('DEMOCRATIC')
            ),
        (object) array(
            'idx'=>'Republican', 'value'=>JText::_('REPUBLICAN')
            )
        );
    $candidate_offices = PVCombo::getsFromObject($pdisplays, 'id', 'office_name');

    array_unshift($candidate_offices, (object) array(
        'idx'=>'', 'value'=>JText::_('SELECT AN OFFICE')
        ));
    $document->addStyleSheet('components/com_pvpapers/assets/css/style.css');
    $document->addStyleSheet('https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css');
    //JHtml::_('behavior.formvalidation');
    // content?>
<p><?=JText::_('INTRODUCTORY TEXT'); ?></p>
<form action="<?=JRoute::_('index.php?option=com_pvpapers'); ?>" method="post" id="josForm" name="josForm" class="form-validate" onsubmit="<?php echo $params->get('recaptcha_show') ? "check_if_capcha_is_filled" : "" ;?>">
    <table cellpadding="0" cellspacing="0" border="0" width="100%" class="contentpane">
        <tr>
            <td width="200" height="30" class="right">
                <label id="party_msg" for="candidate_party"><?=JText::_('CANDIDATE PARTY'); ?>:&nbsp;&nbsp;</label> 
            </td>
            <td>
                <input type="text" autocomplete="off" id="candidate_party" name="candidate_party" size="60%" value="<?=$row->candidate_party; ?>" class="inputbox required" maxlength="35" placeholder="<?=JText::_('CANDIDATE PARTY PLACEHOLDER'); ?>" />
            </td>
        </tr>
        <tr id="candidate_name_tr">
            <td height="40" class="right">
                <label id="candidate_name_msg" for="candidate_name"><?=JText::_('CANDIDATE NAME'); ?>:&nbsp;&nbsp;</label>
            </td>
            <td>
                <input type="text" autocomplete="off" id="candidate_name" name="candidate_name" size="60%" value="<?=$row->candidate_name; ?>" class="inputbox required" maxlength="50" placeholder="<?=JText::_('CANDIDATE NAME PLACEHOLDER'); ?>" />
            </td>
        </tr>
        <tr id="candidate_occupation_tr">
            <td height="40" class="right">
                <label id="candidate_occupation_msg" for="candidate_occupation"><?=JText::_('CANDIDATE OCCUPATION'); ?>:&nbsp;&nbsp;</label>
            </td>
            <td>
                <input type="text" autocomplete="off" id="candidate_occupation" name="candidate_occupation" size="60%" value="<?=$row->candidate_occupation; ?>" class="inputbox required" maxlength="33" placeholder="<?=JText::_('CANDIDATE OCCUPATION PLACEHOLDER'); ?>" />
            </td>
        </tr>
        <tr id="candidate_address_tr">
            <td height="35" class="right">
                <label id="candidate_address_msg" for="candidate_address"><?=JText::_('CANDIDATE ADDRESS'); ?>:&nbsp;&nbsp;</label>
            </td>
            <td>
                <input type="text" autocomplete="off" id="candidate_address" name="candidate_address" size="60%" value="<?=$row->candidate_address; ?>" class="inputbox required" maxlength="50" placeholder="<?=JText::_('CANDIDATE ADDRESS PLACEHOLDER'); ?>" />
            </td>
        </tr>
        <tr id="candidate_address2_tr">
            <td height="40" class="right">
                <label id="candidate_address2_msg" for="candidate_unit"><?=JText::_('CANDIDATE ADDRESS2'); ?>:&nbsp;&nbsp;</label>
            </td>
            <td>
                <table>
                    <tr>
                        <td width="200">
                            <input type="text" autocomplete="off" id="candidate_address2" name="candidate_address2" size="20%" value="<?=$row->candidate_address2; ?>" class="inputbox" maxlength="15" placeholder="<?=JText::_('CANDIDATE ADDRESS2 PLACEHOLDER'); ?>" />
                        </td>
                        <td width="280">
                            <label id="candidate_zip_msg" for="candidate_unit"><?=JText::_('CANDIDATE ZIP'); ?>:&nbsp;</label>
                            <input type="text" autocomplete="off" id="candidate_zip" name="candidate_zip" size="20%" value="<?=$row->candidate_zip; ?>" class="inputbox required" maxlength="15" placeholder="<?=JText::_('CANDIDATE ZIP PLACEHOLDER'); ?>" /> <?=JText::_('CANDIDATE ZIP LABEL'); ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr id="candidate_phone_tr">
            <td height="40" class="right">
                <label id="candidate_phone_msg" for="candidate_phone"><?=JText::_('PHONE'); ?>:&nbsp;&nbsp;</label> 
            </td>
            <td>
                <table>
                    <tr>
                        <td><input type="text" autocomplete="off" id="candidate_phone" name="candidate_phone" size="20%" value="<?=$row->candidate_phone; ?>" maxlength="15" placeholder="<?=JText::_('CANDIDATE PHONE PLACEHOLDER'); ?>" class="inputbox validate-phone" /></td>
                    </tr>
                </table>

            </td>
        </tr>
        <tr id="candidate_header">
            <td height="40" class="right">
                Candidates:
            </td>
            <td><button class="button" id="add_candidate" type="button">&nbsp;+ Add a candidate.&nbsp;</button></td>
        </tr>
        <tr id="candidate_row_1">
            <td colspan="2">
                <span class="candidate_remove" id="candidate_remove_1">-</span>
                <?=
                JHTML::_(
                    'select.genericlist',
                    $candidate_offices,
                    'display_id_1',
                    'required',
                    'idx',
                    'value',
                    ($row->display_id_1 ? $row->display_id_1 : ''),
                    'display_id_1'
                ); ?>
                <?=
                JHTML::_(
                    'select.genericlist',
                    $candidate_districts,
                    'candidate_district_1',
                    'required',
                    'idx',
                    'value',
                    ($row->district_1 ? $row->district_1 : ''),
                    'candidate_district_1'
                ); ?>
                <input type="text" autocomplete="off" id="candidate_name_1" name="candidate_name_1" size="15%" value="<?=$row->candidate_name_1; ?>" maxlength="27" placeholder="<?=JText::_('CANDIDATE NAME PLACEHOLDER'); ?>" class="inputbox" />
                <input type="text" autocomplete="off" id="candidate_address_1" name="candidate_address_1" size="15%" value="<?=$row->candidate_address_1; ?>" class="inputbox required" maxlength="35" placeholder="<?=JText::_('CANDIDATE ADDRESS PLACEHOLDER'); ?>" />
                <input type="text" autocomplete="off" id="candidate_occupation_1" name="candidate_occupation_1" size="15%" value="<?=$row->candidate_occupation_1; ?>" class="inputbox required" maxlength="33" placeholder="<?=JText::_('CANDIDATE OCCUPATION PLACEHOLDER'); ?>" />
            </td>
        </tr>
        <tr id="candidate_row_2">
            <td colspan="2">
                <span class="candidate_remove" id="candidate_remove_2">-</span>
                <?=
                JHTML::_(
                    'select.genericlist',
                    $candidate_offices,
                    'display_id_2',
                    'required',
                    'idx',
                    'value',
                    ($row->display_id_2 ? $row->display_id_2 : ''),
                    'display_id_2'
                ); ?>
                <?=
                JHTML::_(
                    'select.genericlist',
                    $candidate_districts,
                    'candidate_district_2',
                    'required',
                    'idx',
                    'value',
                    ($row->district_2 ? $row->district_2 : ''),
                    'candidate_district_2'
                ); ?>
                <input type="text" autocomplete="off" id="candidate_name_2" name="candidate_name_2" size="15%" value="<?=$row->candidate_name_2; ?>" maxlength="27" placeholder="<?=JText::_('CANDIDATE NAME PLACEHOLDER'); ?>" class="inputbox" />
                <input type="text" autocomplete="off" id="candidate_address_2" name="candidate_address_2" size="15%" value="<?=$row->candidate_address_2; ?>" class="inputbox required" maxlength="35" placeholder="<?=JText::_('CANDIDATE ADDRESS PLACEHOLDER'); ?>" />
                <input type="text" autocomplete="off" id="candidate_occupation_2" name="candidate_occupation_2" size="15%" value="<?=$row->candidate_occupation_2; ?>" class="inputbox required" maxlength="33" placeholder="<?=JText::_('CANDIDATE OCCUPATION PLACEHOLDER'); ?>" />
            </td>
        </tr>
        <tr id="candidate_row_3">
            <td colspan="2">
                <span class="candidate_remove" id="candidate_remove_3">-</span>
                <?=
                JHTML::_(
                    'select.genericlist',
                    $candidate_offices,
                    'display_id_3',
                    'required',
                    'idx',
                    'value',
                    ($row->display_id_3 ? $row->display_id_3 : ''),
                    'display_id_3'
                ); ?>
                <?=
                JHTML::_(
                    'select.genericlist',
                    $candidate_districts,
                    'candidate_district_3',
                    'required',
                    'idx',
                    'value',
                    ($row->district_3 ? $row->district_3 : ''),
                    'candidate_district_3'
                ); ?>
                <input type="text" autocomplete="off" id="candidate_name_3" name="candidate_name_3" size="15%" value="<?=$row->candidate_name_3; ?>" maxlength="27" placeholder="<?=JText::_('CANDIDATE NAME PLACEHOLDER'); ?>" class="inputbox" />
                <input type="text" autocomplete="off" id="candidate_address_3" name="candidate_address_3" size="15%" value="<?=$row->candidate_address_3; ?>" class="inputbox required" maxlength="35" placeholder="<?=JText::_('CANDIDATE ADDRESS PLACEHOLDER'); ?>" />
                <input type="text" autocomplete="off" id="candidate_occupation_3" name="candidate_occupation_3" size="15%" value="<?=$row->candidate_occupation_3; ?>" class="inputbox required" maxlength="33" placeholder="<?=JText::_('CANDIDATE OCCUPATION PLACEHOLDER'); ?>" />
            </td>
        </tr>
        <tr id="candidate_row_4">
            <td colspan="2">
                <span class="candidate_remove" id="candidate_remove_4">-</span>
                <?=
                JHTML::_(
                    'select.genericlist',
                    $candidate_offices,
                    'display_id_4',
                    'required',
                    'idx',
                    'value',
                    ($row->display_id_4 ? $row->display_id_4 : ''),
                    'display_id_4'
                ); ?>
                <?=
                JHTML::_(
                    'select.genericlist',
                    $candidate_districts,
                    'candidate_district_4',
                    'required',
                    'idx',
                    'value',
                    ($row->district_4 ? $row->district_4 : ''),
                    'candidate_district_4'
                ); ?>
                <input type="text" autocomplete="off" id="candidate_name_4" name="candidate_name_4" size="15%" value="<?=$row->candidate_name_4; ?>" maxlength="27" placeholder="<?=JText::_('CANDIDATE NAME PLACEHOLDER'); ?>" class="inputbox" />
                <input type="text" autocomplete="off" id="candidate_address_4" name="candidate_address_4" size="15%" value="<?=$row->candidate_address_4; ?>" class="inputbox required" maxlength="35" placeholder="<?=JText::_('CANDIDATE ADDRESS PLACEHOLDER'); ?>" />
                <input type="text" autocomplete="off" id="candidate_occupation_4" name="candidate_occupation_4" size="15%" value="<?=$row->candidate_occupation_4; ?>" class="inputbox required" maxlength="33" placeholder="<?=JText::_('CANDIDATE OCCUPATION PLACEHOLDER'); ?>" />
            </td>
        </tr>
        <tr id="candidate_row_5">
            <td colspan="2">
                <span class="candidate_remove" id="candidate_remove_5">-</span>
                <?=
                JHTML::_(
                    'select.genericlist',
                    $candidate_offices,
                    'display_id_5',
                    'required',
                    'idx',
                    'value',
                    ($row->display_id_5 ? $row->display_id_5 : ''),
                    'display_id_5'
                ); ?>
                <?=
                JHTML::_(
                    'select.genericlist',
                    $candidate_districts,
                    'candidate_district_5',
                    'required',
                    'idx',
                    'value',
                    ($row->district_5 ? $row->district_5 : ''),
                    'candidate_district_5'
                ); ?>
                <input type="text" autocomplete="off" id="candidate_name_5" name="candidate_name_5" size="15%" value="<?=$row->candidate_name_5; ?>" maxlength="27" placeholder="<?=JText::_('CANDIDATE NAME PLACEHOLDER'); ?>" class="inputbox" />
                <input type="text" autocomplete="off" id="candidate_address_5" name="candidate_address_5" size="15%" value="<?=$row->candidate_address_5; ?>" class="inputbox required" maxlength="35" placeholder="<?=JText::_('CANDIDATE ADDRESS PLACEHOLDER'); ?>" />
                <input type="text" autocomplete="off" id="candidate_occupation_5" name="candidate_occupation_5" size="15%" value="<?=$row->candidate_occupation_5; ?>" class="inputbox required" maxlength="33" placeholder="<?=JText::_('CANDIDATE OCCUPATION PLACEHOLDER'); ?>" />
            </td>
        </tr>
        <tr id="candidate_row_6">
            <td colspan="2">
                <span class="candidate_remove" id="candidate_remove_6">-</span>
                <?=
                JHTML::_(
                    'select.genericlist',
                    $candidate_offices,
                    'display_id_6',
                    'required',
                    'idx',
                    'value',
                    ($row->display_id_6 ? $row->display_id_6 : ''),
                    'display_id_6'
                ); ?>
                <?=
                JHTML::_(
                    'select.genericlist',
                    $candidate_districts,
                    'candidate_district_6',
                    'required',
                    'idx',
                    'value',
                    ($row->district_6 ? $row->district_6 : ''),
                    'candidate_district_6'
                ); ?>
                <input type="text" autocomplete="off" id="candidate_name_6" name="candidate_name_6" size="15%" value="<?=$row->candidate_name_6; ?>" maxlength="27" placeholder="<?=JText::_('CANDIDATE NAME PLACEHOLDER'); ?>" class="inputbox" />
                <input type="text" autocomplete="off" id="candidate_address_6" name="candidate_address_6" size="15%" value="<?=$row->candidate_address_6; ?>" class="inputbox required" maxlength="35" placeholder="<?=JText::_('CANDIDATE ADDRESS PLACEHOLDER'); ?>" />
                <input type="text" autocomplete="off" id="candidate_occupation_6" name="candidate_occupation_6" size="15%" value="<?=$row->candidate_occupation_6; ?>" class="inputbox required" maxlength="33" placeholder="<?=JText::_('CANDIDATE OCCUPATION PLACEHOLDER'); ?>" />
            </td>
        </tr>
        <tr id="candidate_row_7">
            <td colspan="2">
                <span class="candidate_remove" id="candidate_remove_7">-</span>
                <?=
                JHTML::_(
                    'select.genericlist',
                    $candidate_offices,
                    'display_id_7',
                    'required',
                    'idx',
                    'value',
                    ($row->display_id_7 ? $row->display_id_7 : ''),
                    'display_id_7'
                ); ?>
                <?=
                JHTML::_(
                    'select.genericlist',
                    $candidate_districts,
                    'candidate_district_7',
                    'required',
                    'idx',
                    'value',
                    ($row->district_7 ? $row->district_7 : ''),
                    'candidate_district_7'
                ); ?>
                <input type="text" autocomplete="off" id="candidate_name_7" name="candidate_name_7" size="15%" value="<?=$row->candidate_name_7; ?>" maxlength="27" placeholder="<?=JText::_('CANDIDATE NAME PLACEHOLDER'); ?>" class="inputbox" />
                <input type="text" autocomplete="off" id="candidate_address_7" name="candidate_address_7" size="15%" value="<?=$row->candidate_address_7; ?>" class="inputbox required" maxlength="35" placeholder="<?=JText::_('CANDIDATE ADDRESS PLACEHOLDER'); ?>" />
                <input type="text" autocomplete="off" id="candidate_occupation_7" name="candidate_occupation_7" size="15%" value="<?=$row->candidate_occupation_7; ?>" class="inputbox required" maxlength="33" placeholder="<?=JText::_('CANDIDATE OCCUPATION PLACEHOLDER'); ?>" />
            </td>
        </tr>
        <tr id="candidate_double_side_tr">
            <td height="40" class="right">
                &nbsp;
            </td>
            <td>
                <?=JHTML::_(
                    'select.checkbox',
                    'candidate_double_side_acknowledged',
                    'yes',
                    'required',
                    false,
                    'candidate_double_side_acknowledged'
                ); ?>
                <label id="candidate_double_side_acknowledged_msg" for="candidate_double_side_acknowledged"><b><?=JText::_('CANDIDATE DOUBLE SIDE ACKNOWLEDGED MSG'); ?></b></label>
            </td>
        </tr>
        <tr id="candidate_resign_to_run_tr">
            <td height="40" class="right">
                &nbsp;
            </td>
            <td>
                <?=JHTML::_(
                    'select.checkbox',
                    'candidate_resign_to_run_acknowledged',
                    'yes',
                    'required',
                    false,
                    'candidate_resign_to_run_acknowledged'
                ); ?>
                <label id="candidate_double_side_acknowledged_msg" for="candidate_resign_to_run_acknowledged"><b><?=JText::_('CANDIDATE RESIGN TO RUN ACKNOWLEDGED MSG'); ?></b></label>
            </td>
        </tr>
        <tr id="candidate_instructions_tr">
            <td height="40" class="right">
                &nbsp;
            </td>
            <td>
                <?=JHTML::_(
                    'select.checkbox',
                    'confirm',
                    'yes',
                    'required',
                    false,
                    'confirm'
                ); ?>
                <label id="confirm_msg" for="confirm"><?=JText::_('CONFIRM MSG'); ?></label>
            </td>
        </tr>
<?php
if ($params->get('recaptcha_show')) {
                    ?>
        <tr id="candidate_recaptcha_tr">
            <td height="40" class="right">&nbsp;
            </td>
            <td>
                <div class="g-recaptcha" data-callback="capcha_filled" data-expired-callback="capcha_expired" data-sitekey="<?=$params->get('recaptcha_client'); ?>"></div>
            </td>
        </tr>
<?php
                } ?>
        <tr id="candidate_submit_tr">
            <td height="40" class="right">&nbsp;</td>
            <td>
                <button class="button validate" type="submit"><?=JText::_('CREATE'); ?></button>
                <input type="hidden" name="task" value="save" />
                <input type="hidden" name="view" value="input" />
                <input type="hidden" name="ItemId" value="<?=JRequest::getVar('ItemId', '', 'int'); ?>" />
                <?=JHTML::_('form.token'); ?>
            </td>
        </tr>
    </table>
</form>
<?php
}
?>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script type="text/javascript" src="components/com_pvpapers/assets/js/main.js"></script>
