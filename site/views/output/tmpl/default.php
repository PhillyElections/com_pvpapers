<?php

$id=$this->id;
$hash=$this->hash;
$unpublish=($hash) ? "&task=unpublish&cid[]=$id&hash=$hash" : '';

?>
<p>
    <?=JText::_('REJECT MESSAGE START');?>
    <a href="<?=JRoute::_('index.php?option=com_pvpapers&view=input' . $unpublish);?>"><?=JText::_('REJECT MESSAGE here');?></a>.
    <?=JText::_('DOWNLOAD MESSAGE START');?>
    <a href="<?=JRoute::_('index.php?option=com_pvpapers&view=output&format=raw&download=true&id=' . $id);?>" download ><?=JText::_('DOWNLOAD MESSAGE HERE');?></a>.
</p>
<p>
    If you would like to make a new nomination form, please do not use the browser back button.  Instead, click <a href="<?=JRoute::_('index.php?option=com_pvpapers&view=input');?>">here</a>.
</p>
<p><?=JText::_('DOWNLOAD RELATED FILES');?></p>
<iframe width="100%" height="700px" src="<?=JRoute::_('index.php?option=com_pvpapers&view=output&format=raw&id=' . $id);?>"></iframe>
