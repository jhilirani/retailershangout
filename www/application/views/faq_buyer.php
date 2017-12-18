<?php echo $html_heading; echo $header; $currencySymbol='<i class="fa fa-rupee"></i>';  //($this->session->userdata('FE_SESSION_USER_LOCATION_VAR')=="IN") ? '<i class="fa fa-rupee"></i>' :'KSh';?>
<div class="breadcrumb">
    <div class="container">
        <ul class="filters visible-xs visible-sm pull-left">
            <li class="filterBtn"><span><i class="fa fa-filter"></i> <span class="smallest">Click <span class="hidden-xxs">here</span> to</span> Filter</span></li>
        </ul>
        <!--<div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="#">Home</a></li>
                <li class='active'>Smart Phone</li>
            </ul>
        </div><!-- /.breadcrumb-inner -->
    </div><!-- /.container -->
</div><!-- /.breadcrumb -->

<div class="bodyContent" id="faq">
    <div class='container'>
        <h3 class="pageTitle">Buyer FAQ</h3><hr class="hr hr-primary">
        <div class="checkout-box faq-page inner-bottom-sm">
            <div class='row'>
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <div class="panel-group checkout-steps" id="accordion">
                        <?php $sl=1;foreach($faqDataArr AS $k){?>
                        <div class="panel panel-default checkout-step-01">
                            <div class="panel-heading"><h4 class="checkout-title"><a data-toggle="collapse" class="collapsed" data-parent="#accordion" href="#collapseOne"><span><?php echo $sl++;?></span><?php echo $k->question;?></a></h4></div>
                            <div id="collapseOne" class="panel-collapse collapse" style="height: 0px;">
                                <div class="panel-body"><?php echo $k->answer;?></div>
                            </div><!-- row -->
                        </div>
                        <?php }?>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>
<?php echo$footer; ?>