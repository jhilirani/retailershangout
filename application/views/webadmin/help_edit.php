<?php echo $AdminHomeLeftPanel;

//print_r($UserDataArr);die;?>
<table cellspacing=5 cellpadding=5 width=90% border=0 >
  
  <tr id="PageHeading">
    <td class="PageHeading" >Update Help</td>
  </tr>

  
  <tr>
    <td style="padding-left:50px;">&nbsp;</td>
  </tr>
  <tr>
    <td style="padding-left:50px;"><div id="MessaeBox" style="font-family:Verdana, Arial, Helvetica, sans-serif; font-size:12px; color:#009900; text-decoration:blink; text-align:center;"><?php echo $this->session->flashdata('Message');?></div></td>
  </tr>
  <tr>
    <td style="padding-left:10px;"></td>
  </tr>
  <tr>
  <td valign="top"> 
  
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
      <td>&nbsp;</td>
  </tr>
 
  <tr>
    <td><form name="AdminEdit" id="AdminEdit" method="post" action="<?=base_url()?>webadmin/help/edit/">
<table width="70%" border="0" align="center" cellpadding="0" cellspacing="0" id="EditBox">
  <tr>
    <th colspan="4"><span class="PageHeading">Help Edit Form</span></th>
  </tr>
  <tr>
    <td align="left" valign="top" height="40px;">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top" class="ListHeadingLable">Faq topics </td>
    <td align="left" valign="top"><label><strong>:</strong></label></td>
            <td align="left" valign="top"><span id="helpTopicsIdSpan">
        <select name="EdithelpTopicsId" id="EdithelpTopicsId" class="required">
            <option value="">Select</option>
            <?php foreach($topicsDataArr As $k){ ?>
            <option value="<?php echo $k->helpTopicsId;?>" <?php if($DataArr[0]->helpTopicsId==$k->helpTopicsId){?>selected<?php }?>><?php echo $k->helpTopics;?></option>
            <?php }?>
        </select>
        </span>
        </td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top" class="ListHeadingLable"> question </td>
    <td align="left" valign="top"><label><strong>:</strong></label></td>
    <td align="left" valign="top"><input name="Editquestion" type="text" id="Editquestion"  class="required" value="<?php echo $DataArr[0]->question;?>" /></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top" class="ListHeadingLable">answer</td>
    <td align="left" valign="top"><label><strong>:</strong></label></td>
    <td align="left" valign="top"><textarea name="Editanswer" id="Editanswer" class="required"><?php echo $DataArr[0]->answer;?></textarea>
    <?php //echo display_ckeditor($ckeditor);?></td>
  </tr>
  <tr>
    <td align="left" valign="top" height="40px;">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  
  
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top"><label></label></td>
    <td align="left" valign="top"><input type="submit" name="Submit3" value="Submit" class="btn-primary btn-large"/>&nbsp;&nbsp;&nbsp;
      <input type="button" name="Submit22" value="Cancel" onclick="return CancelAdd();" class="btn-primary btn-large"/>
	  <input  type="hidden" name="helpId"  id="helpId" value="<?php echo $DataArr[0]->helpId;?>"/></td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
    <td align="left" valign="top">&nbsp;</td>
  </tr>
</table>
</form></td>
  </tr>
  <tr>
      <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td></td>
  </tr>
</table></td>
  </tr>

</table>
<?php echo $AdminHomeRest;?>
<script>
$(document).ready(function(){
    $("#AdminEdit").validate();	
    jQuery(document).ready(function(){
        //
    });
});

function CancelAdd(){
    location.href='<?php echo BASE_URL.'webadmin/help/viewlist/'?>';
}
</script>