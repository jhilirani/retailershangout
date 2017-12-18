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

<div class="bodyContent">
    <div class='container'>
        <div class='row'>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <h3 class="pageTitle"><?php echo $contentDetails[0]->title;?></h3><hr class="hr hr-primary">
                <div>
                    <?php echo $contentDetails[0]->body;?>
                </div>
            </div>
        </div>
    </div>
</div>
<?php echo$footer; ?>