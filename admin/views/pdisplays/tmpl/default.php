<?php
defined('_JEXEC') or die('Restricted access');

$pagination = &$this->pagination;
$rows = &$this->pdisplays;

?>
<form action="<?=JRoute::_('index.php?option=com_pvpapers');?>" method="post" name="adminForm" id="adminForm">
    <div id="editcell">
        <table class="adminlist">
            <thead>
                <tr>
                    <th width="1px">
                        <?=JText::_('ID');?>
                    </th>
                    <th width="1px">
                        <input type="checkbox" name="toggle" value="" onclick="checkAll(<?=count($rows);?>);" />
                    </th>
                    <th width="1px">
                        <?=JText::_('P');?>
                    </th>
                    <th width="12%">
                        <?=JText::_('OFFICE');?>
                    </th>
                    <th width="5%">
                        <?=JText::_('ELECTION TYPE');?>
                    </th>
                    <th width="5%">
                        <?=JText::_('ELECTION DATE');?>
                    </th>
                    <th width="5%">
                        <?=JText::_('DESCRIPTION');?>
                    </th>
                    <th width="5%">
                        <?=JText::_('SIGNING START');?>
                    </th>
                    <th width="5%">
                        <?=JText::_('SIGNING STOP');?>
                    </th>
                    <th width="5%">
                        <?=JText::_('DISPLAY START');?>
                    </th>
                    <th width="5%">
                        <?=JText::_('DISPLAY STOP');?>
                    </th>
                    <th width="10%">
                        <?=JText::_('FORM');?>
                    </th>
                    <th width="10%">
                        <?=JText::_('TPL');?>
                    </th>
                    <th width="10%">
                        <?=JText::_('CSS');?>
                    </th>
                    <th width="10%">
                        <?=JText::_('CREATED');?>
                    </th>
                    <th width="10%\">
                        <?=JText::_('UPDATED');?>
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php
$k = 0;
for ($i = 0, $n = count($rows); $i < $n; $i++) {
    $row     = &$rows[$i];
    $checked = JHTML::_('grid.id', $i, $row->id);
    $published = JHTML::_('grid.published', $row, $i);
    $link = JRoute::_('index.php?option=com_pvpapers&controller=pdisplay&task=edit&cid[]='.$row->id);
    ?>
                <tr class="<?="row$k";?>">
                    <td>
                        <?=$row->id;?>
                    </td>
                    <td>
                        <?=$checked;?>
                    </td>
                    <td>
                        <?=$published;?>
                    </td>
                    <td>
                        <a href="<?=$link?>"><?=$row->office_name;?></a>
                    </td>
                    <td>
                        <?=$row->election_type;?>
                    </td>
                    <td>
                        <?=$row->election_date;?>
                    </td>
                    <td>
                        <?=$row->description;?>
                    </td>
                    <td>
                        <?=$row->signing_start;?>
                    </td>
                    <td>
                        <?=$row->signing_stop;?>
                    </td>
                    <td>
                        <?=$row->display_start;?>
                    </td>
                    <td>
                        <?=$row->display_stop;?>
                    </td>
                    <td>
                        <?=$row->p_template_form;?>
                    </td>
                    <td>
                        <?=$row->p_template_html;?>
                    </td>
                    <td>
                        <?=$row->p_template_css;?>
                    </td>
                    <td>
                        <?=$row->created;?>
                    </td>
                    <td>
                        <?=$row->updated;?>
                    </td>
                </tr>
            <?php
$k = 1 - $k;
}
?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="16"><?php echo $pagination->getListFooter(); ?></td>
                </tr>
            </tfoot>
        </table>
    </div>
    <?=JHTML::_('form.token');?>
    <input type="hidden" name="task" value="" />
    <input type="hidden" name="boxchecked" value="0" />
    <input type="hidden" name="controller" value="pdisplays" />
    <?=JHTML::_('form.token');?>
</form>