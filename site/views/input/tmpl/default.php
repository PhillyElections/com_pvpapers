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
                <label id="office_msg" for="display_id"><?=JText::_('CANDIDATE OFFICE'); ?>:&nbsp;&nbsp;</label> 
            </td>
            <td>
                <table>
                    <tr>
                        <td width="200">
                        <?=
                        JHTML::_(
                            'select.genericlist',
                            $candidate_offices,
                            'display_id',
                            'required',
                            'idx',
                            'value',
                            ($row->display_id ? $row->display_id : ''),
                            'display_id'
                        ); ?>
                        </td>
                        <td width="250">
                            <label id="party_msg" for="candidate_party"><?=JText::_('CANDIDATE PARTY'); ?>:&nbsp;</label>
                            <input type="text" autocomplete="off" id="candidate_party" name="candidate_party" size="25%" value="<?=$row->candidate_party; ?>" class="inputbox required" maxlength="60" placeholder="<?=JText::_('CANDIDATE PARTY PLACEHOLDER'); ?>" />
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr id="candidate_name_tr">
            <td height="40" class="right">
                <label id="candidate_name_msg" for="candidate_name"><?=JText::_('CANDIDATE NAME'); ?>:&nbsp;&nbsp;</label>
            </td>
            <td>
                <input type="text" autocomplete="off" id="candidate_name" name="candidate_name" size="60%" value="<?=$row->candidate_name; ?>" class="inputbox required" maxlength="60" placeholder="<?=JText::_('CANDIDATE NAME PLACEHOLDER'); ?>" />
            </td>
        </tr>
        <tr id="candidate_occupation_tr">
            <td height="40" class="right">
                <label id="candidate_occupation_msg" for="candidate_occupation"><?=JText::_('CANDIDATE OCCUPATION'); ?>:&nbsp;&nbsp;</label>
            </td>
            <td>
                <input type="text" autocomplete="off" id="candidate_occupation" name="candidate_occupation" size="60%" value="<?=$row->candidate_occupation; ?>" class="inputbox required" maxlength="60" placeholder="<?=JText::_('CANDIDATE OCCUPATION PLACEHOLDER'); ?>" />
            </td>
        </tr>
        <tr id="candidate_address_tr">
            <td height="40" class="right">
                <label id="candidate_address_msg" for="candidate_address"><?=JText::_('CANDIDATE ADDRESS'); ?>:&nbsp;&nbsp;</label>
            </td>
            <td>
                <input type="text" autocomplete="off" id="candidate_address" name="candidate_address" size="60%" value="<?=$row->candidate_address; ?>" class="inputbox required" maxlength="60" placeholder="<?=JText::_('CANDIDATE ADDRESS PLACEHOLDER'); ?>" />
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
        <tr id="candidate_district_tr">
            <td height="40" class="right">
                <label id="candidate_district_msg" for="candidate_district"><?=JText::_('DISTRICT'); ?>:&nbsp;&nbsp;</label>
            </td>
            <td>
                <table>
                    <tr>
                        <td width="200">
                        <?=
                        JHTML::_(
                            'select.genericlist',
                            $candidate_districts,
                            'candidate_district',
                            'required',
                            'idx',
                            'value',
                            ($row->district ? $row->district : ''),
                            'candidate_district'
                        ); ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr id="candidate_precinct_tr">
            <td height="40" class="right">
                <label id="candidate_ward_msg" for="candidate_ward"><?=JText::_('WARD'); ?>:&nbsp;&nbsp;</label>
            </td>
            <td>
                <table>
                    <tr>
                        <td width="200">
                            <input type="text" autocomplete="off" id="candidate_ward" name="candidate_ward" size="5%" value="<?=$row->candidate_ward; ?>" maxlength="2" placeholder="<?=JText::_('CANDIDATE WARD PLACEHOLDER'); ?>" class="inputbox required validate-ward"/> (2 max)
                        </td>
                        <td width="200">
                            <label id="candidate_division_msg" for="candidate_division"><?=JText::_('DIVISION'); ?>:&nbsp;</label>
                            <input type="text" autocomplete="off" id="candidate_division" name="candidate_division" size="5%" value="<?=$row->candidate_division; ?>" maxlength="2" placeholder="<?=JText::_('CANDIDATE DIVISION PLACEHOLDER'); ?>" class="inputbox required validate-division" /> (2 max)
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
        <tr id="candidate_sigform_tr">
            <td height="40" class="right">
                &nbsp;
            </td>
            <td border=1>
                <table class="sigform">
                    <tr>
                        <td colspan=2>
                            <?=JText::_('SIGFORM REVIEW MESSAGE'); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" autocomplete="off" id="sigform_first_middle" name="sigform_first_middle" size="25%" value="<?=$row->sigform_first_middle; ?>" maxlength="15" placeholder="<?=JText::_('SIGFORM FIRST MIDDLE PLACEHOLDER'); ?>" /> (<span id="fm_current_length">0</span>)</td>
                        <td><input type="text" autocomplete="off" id="sigform_last" name="sigform_last" size="25%" value="<?=$row->sigform_last; ?>" maxlength="19" placeholder="<?=JText::_('SIGFORM LAST PLACEHOLDER'); ?>" /> (<span id="l_current_length">0</span>)</td>
                    </tr>
                    <tr>
                        <td><?=JText::_('SIGFORM FIRST MIDDLE LABEL'); ?></td><td><?=JText::_('SIGFORM LAST LABEL'); ?></td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <?=
                            JHTML::_(
                                'select.checkbox',
                                'candidate_ballot_name_approved',
                                'yes',
                                'required',
                                false,
                                'candidate_ballot_name_approved'
                            ); ?>
                            <label id="candidate_ballot_name_approved_msg" for="candidate_ballot_name_approved"><?=JText::_('CANDIDATE BALLOT NAME APPROVED MSG'); ?></label>
                        </td>
                    </tr>
                    <tr id="sigform_address_row" class="hidden">
                        <td colspan="2"><input type="text" autocomplete="off" id="sigform_address" name="sigform_address" size="40%" value="<?=$row->sigform_address; ?>" maxlength="35" placeholder="<?=JText::_('SIGFORM ADDRESS PLACEHOLDER'); ?>" class="inputbox invalid" /> (
                            <span id="sa_current_length">0</span>)</td>
                    </tr>
                    <tr id="sigform_address_label_row" class="hidden">
                        <td colspan="2"><label id="sigform_address_msg1" for="sigform_address" class="invalid"><?=JText::_('SIGFORM ADDRESS MSG1'); ?></label><label id="sigform_address_msg2" class="hidden"><?=JText::_('SIGFORM ADDRESS MSG2'); ?></label></td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr id="candidate_circulation_tr">
            <td height="40" class="right">
                &nbsp;
            </td>
            <td>
                <input type="radio" name="candidate_self_circulating" id="candidate_self_circulating_no" value="no" class="required">
                <label for="candidate_self_circulating_no" id="candidate_self_circulating_no_msg"><?=JText::_('CANDIDATE SELF CIRCULATING NO MSG'); ?></label>
                <input type="radio" name="candidate_self_circulating" id="candidate_self_circulating_yes" value="yes" class="required">
                <label for="candidate_self_circulating_yes" id="candidate_self_circulating_yes_msg"><?=JText::_('CANDIDATE SELF CIRCULATING YES MSG'); ?></label>
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
