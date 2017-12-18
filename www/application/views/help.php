<?php
echo $html_heading;
echo $header;
$currencySymbol = '<i class="fa fa-rupee"></i>';  //($this->session->userdata('FE_SESSION_USER_LOCATION_VAR')=="IN") ? '<i class="fa fa-rupee"></i>' :'KSh'; 
?>
<div class="bodyContent">
    <div class='container'>
        <div class='row'>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="cs-tabs">
                    <div class="page-header">
                        <h3>Browse Help topics</h3>
                    </div>

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                        <?php
                        $i = 0;
                        foreach ($helpTopicsArr As $k):
                            $tabTitle = str_replace(" ", "", $k->helpTopics);
                            ?>  
                            <li class="nav-item">
                                <a class="nav-link showHelpTopicContent <?php if ($i == 0) { ?>active<?php } ?> data-toggle="tab" href="#<?php echo $tabTitle; ?>" role="tab" data-topicsid="<?php echo $k->helpTopicsId; ?>"><?php echo $k->helpTopics; ?></a>
                            </li>
                            <?php $i++;
                        endforeach;
                        ?>          
                    </ul>

                    <!-- Tab panes -->
                    <div class="tab-content helpTopicsContainer">
                        <?php
                        $i = 0;
                        foreach ($helpTopicsArr As $k):
                            $tabTitle = str_replace(" ", "", $k->helpTopics);
                            ?>  
                            <div class="tab-pane <?php if ($i == 0) { ?>active<?php } ?>" id="<?php echo $tabTitle; ?>" role="tabpanel">
    <?php if ($i == 0): ?>
                                    <ul class="category-list">
                                        <li><h3 class="a-spacing-small"> <?php echo $k->helpTopics; ?></h3></li>
                                        <li>
                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <?php foreach ($helpDataArr AS $key => $k) { ?>
                                                    <div class="panel panel-default">
                                                        <div class="panel-heading" role="tab" id="headingOne">
                                                            <h4 class="panel-title">
                                                                <a role="button" data-toggle="collapse" style="text-decoration: none;cursor: pointer;" data-parent="#accordion" href="#collapse<?= $key; ?>" aria-expanded="true" aria-controls="collapseOne">
                                                                    <i class="fa fa-info-circle"></i> &nbsp; <?php echo $k->question; ?>
                                                                </a>
                                                            </h4>
                                                        </div>
                                                        <div id="collapse<?= $key; ?>" class="panel-collapse collapse <?php
                                                             if ($key == 0) {
                                                                 echo 'in';
                                                             }
                                                             ?>" role="tabpanel" aria-labelledby="headingOne">
                                                            <div class="panel-body">
                                                    <?php echo $k->answer; ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                    <?php } ?>
                                            </div>
                                        </li>
                                    </ul>
                            <?php endif; ?>
                            </div>
    <?php $i++;
endforeach;
?>          
                    </div>
                    <div class="row">
                        <p> Are you want more help ?</p>
                        <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Submit your query </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <form action="<?php echo BASE_URL.'index/submit_help_query/';?>" name="help-form" class="help-form" id="wtil-cms-form" method="post">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="exampleModalLabel">Want to get more info ?</h4>
            </div>
            <div class="modal-body">

                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Choose your topic:</label>
                        <div class="js-replace">
                        <?php if($questions):?>
                            <select name="help_subject" class="form-control" id="help-subject">
                                <?php foreach($questions as $q):?>
                                <option value="<?=$q?>"><?=$q?></option>
                                <?php endforeach;?>
                            </select>
                        <?php else:?>
                            <input class="form-control" name="help_subject" id="help_subject">
                        <?php endif;?>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Name:</label>
                        <input class="form-control" name="name" id="help_name">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Email:</label>
                        <input class="form-control" name="email" id="help_email">
                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="control-label">Phone Number:</label>
                        <input class="form-control" name="phone" id="help_phone">
                    </div>
                    <div class="form-group">
                        <label for="message-text" class="control-label">Type your query here:</label>
                        <textarea class="form-control" name="help_message" id="message-text"></textarea>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <input type="submit" class="btn btn-primary" name="wtil-post-submit" value="Send us now!">
                <div class="et-ajax-loader-global cms-module-loader pull-left"><span>Processing...</span></div>
                <div class="cms-ajax-feedback"></div>
                <p class="text-info pull-left">Our customer care executive with you for 24X7 . Happy visiting! </p>
            </div>
            </form>
        </div>
    </div>
</div>

<?php echo$footer; ?>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery(".showHelpTopicContent").on("click",function(){
            var topicsid=jQuery(this).data('topicsid');
            myJsMain.commonFunction.showPleaseWait();
            jQuery.ajax({
                type: "POST",
                url: myJsMain.baseURL+'<?php echo 'ajax/show_help_topics_by_id/'?>',
                data:"topicsid="+topicsid,
                dataType:'json',
                success:function(data){
                    jQuery('.helpTopicsContainer').html(data.content);
                    var subject = '<input class="form-control" name="help_subject" id="help_subject">';
                    if(data.qts && data.qts.length > 0){
                        var subject = '<select name="help_subject" class="form-control" id="help-subject">';
                        for (i = 0; i < data.qts.length; i++) {
                            subject += "<option value='"+data.qts[i] + "'>"+data.qts[i] + "</option>";
                        }
                        subject += "</select>";
                    }
                    jQuery('div.js-replace').html(subject);
                    myJsMain.commonFunction.hidePleaseWait();
                }
            });
        });
    });
</script>