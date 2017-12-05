<?php echo $html_heading; echo $header; $currencySymbol='<i class="fa fa-rupee"></i>';//($this->session->userdata('FE_SESSION_USER_LOCATION_VAR')=="IN") ? '<i class="fa fa-rupee"></i>' :'KSh';
?>
<div class="breadcrumb">
    <div class="container">
        <div class="breadcrumb-inner">
            <ul class="list-inline list-unstyled">
                <li><a href="#">Home</a></li>
                <li><a href="#">Woman</a></li>
                <li class='active'>Samsung Galaxy S4 32GB White</li>
            </ul>
        </div>
        <!-- /.breadcrumb-inner -->
    </div>
    <!-- /.container -->
</div>
<div class="bodyContent">
    <div class='container'>
        <div class='row single-product'>
            <div class='col-md-3 col-xs-12 col-sm-12 sidebar'>
                <div class="sidebar-module-container side-menu">
                    <?php echo $main_category_menu; ?>
                    <?php echo $product_details_hot_deal_left_side_bar;?>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-9 singleProduct">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-5 gallery-holder">
                        <div class="product-item-holder size-big single-product-gallery small-gallery">
                            <div id="owl-single-product">
                                <?php $i=1;foreach ($productImageArr As $k){?>
                                <div class="single-product-gallery-item" id="slide<?php echo $i;?>">
                                    <a data-lightbox="image-1" data-title="Gallery" href="<?php echo PRODUCT_ORIGINAL.$productImageArr[0]->image;?>">
                                        <img class="img-responsive" alt="<?php echo $productDetailsArr[0]->title;?>" title="<?php echo $productDetailsArr[0]->title;?>" src="<?php echo PRODUCT_DEAILS_EXTRA_BIG.$productImageArr[0]->image;?>" data-echo="<?php echo PRODUCT_DEAILS_EXTRA_BIG.$productImageArr[0]->image;?>"/>
                                    </a>
                                </div>
                                <!-- /.single-product-gallery-item -->
                                <?php $i++;}?>
                            </div>
                            <!-- /.single-product-slider -->
                            <div class="single-product-gallery-thumbs gallery-thumbs">
                                <div id="owl-single-product-thumbnails">
                                    <?php $i=1;foreach ($productImageArr As $k){?>
                                    <div class="item">
                                        <a class="horizontal-thumb active" data-target="#owl-single-product" data-slide="<?php echo $i;?>" href="#slide<?php echo $i;?>">
                                            <img class="img-responsive" width="85" alt="<?php echo $productDetailsArr[0]->title;?>" title="<?php echo $productDetailsArr[0]->title;?>" src="<?php echo PRODUCT_DEAILS_SMALL.$k->image;?>" data-echo="<?php echo PRODUCT_DEAILS_SMALL.$k->image;?>"/>
                                        </a>
                                    </div>
                                    <?php $i++;}?>
                                </div>
                                <!-- /#owl-single-product-thumbnails -->
                            </div>
                            <!-- /.gallery-thumbs -->
                        </div>
                        <!-- /.single-product-gallery -->
                    </div>
                    <!-- /.gallery-holder -->
                    <div class='col-sm-6 col-md-7 product-info-block'>
                        <div class="product-info">
                            <h1 class="name"><?php echo $productDetailsArr[0]->title;?></h1>
                            <div class="stock-container info-container m-t-10">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="stock-box">
                                            <span class="label">Availability :</span>
                                        </div>
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="stock-box">
                                            <span class="value">In Stock</span>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.row -->
                            </div>
                            <!-- /.stock-container -->
                            <div class="description-container m-t-20">
                                <?php echo $productDetailsArr[0]->shortDescription?>
                            </div>
                            <!-- /.description-container -->
                            <div class="price-container info-container m-t-20">
                                <div class="row">
                                    <div class="col-sm-8">
                                        <div class="price-box">
                                            <?php foreach ($productPriceArr As $k){?>
                                            <div class="checkbox">
                                                <label>
                                                    <input type="radio" name="selectPackege" value="<?php echo $k->productPriceId;?>"> Package of <?php echo $k->qty;?> 
                                                    <span class="price"><i class="fa fa-inr"></i> <?php echo $k->price;?></span>
                                                </label>
                                            </div>
                                            <?php }?>
                                        </div>
                                    </div>
                                </div> <!-- /.row -->
                            </div> <!-- /.price-container -->
                            <div class="product-social-link m-t-20">
                                <a href="javascript:void(0);" class="btn btn-primary btn-lg" id="add-cart-button-id">Add to Truck</a>
                                <div class="text-right pull-right">
                                    <span class="social-label">Share :</span>
                                    <div class="social-icons">
                                        <ul class="list-inline">
                                            <li><a class="fa fa-facebook" href="http://facebook.com/transvelo"></a></li>
                                            <li><a class="fa fa-twitter" href="#"></a></li>
                                            <li><a class="fa fa-linkedin" href="#"></a></li>
                                            <li><a class="fa fa-pinterest" href="#"></a></li>
                                        </ul>
                                        <!-- /.social-icons -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.product-info -->
                    </div>
                    <!-- /.col-sm-7 -->
                </div>
                <div class="product-tabs">
                    <div class="row">
                        <div class="col-md-3 col-sm-12">
                            <ul id="product-tabs" class="nav nav-tabs nav-tab-cell">
                                <li class="active"><a data-toggle="tab" href="#review">Description</a></li>
                                <li><a data-toggle="tab" href="#description">Details</a></li>
                                
                                <!--<li><a data-toggle="tab" href="#tags">Specifications</a></li>-->
                            </ul>
                            <!-- /.nav-tabs #product-tabs -->
                        </div>
                        <div class="col-md-9 col-sm-12">
                            <div class="tab-content">
                                <div id="description" class="tab-pane in active">
                                    <?php if($productDetailsArr[0]->isOptionsAdded):?>
                                        <?php $expand = false;if($options):?>
                                            <div class="product-tab">
                                                <h3 class="h3">Highlights</h3>
                                                <table class="table table-striped table-bordered m-t-15">
                                                    <?php foreach($options as $opkey => $opval): $keytitle = $opval;  ?>
                                                    <tr><td><strong><?=key($keytitle)?></strong></strong></td><td><?=implode(", ", $opval[key($keytitle)])?></td></tr>
                                                    <?php endforeach;?>
                                                </table>
                                            </div>
                                        <?php endif;?>
                                    <?php endif;?>
                                </div>
                                <!-- /.tab-pane -->
                                <div id="review" class="tab-pane">
                                    <?php echo $productDetailsArr[0]->description?>
                                </div>
                                <!-- /.tab-pane 
                                <div id="tags" class="tab-pane">
                                    <h4>Dimensions</h4>
                                    <div class="row">
                                        <div class="clearfix m-t-10"><div class="col-sm-4 col-xs-5"><strong>Height/Width/Length</strong></strong></div><div class="col-sm-8 col-xs-7">Height : 10.00 Width : 10.00 Length : 10.00</div></div>
                                        <div class="clearfix m-t-10"><div class="col-sm-4 col-xs-5"><strong>Weight</strong></strong></div><div class="col-sm-8 col-xs-7">99.999</div></div>
                                    </div>
                                </div>
                                <!-- /.tab-pane -->
                            </div>
                            <!-- /.tab-content -->
                        </div>
                        <!-- /.col -->
                    </div>
                    <!-- /.row -->
                </div>
                <section class="section featured-product">
                    <h3 class="section-title">Similar Products</h3>
                    <div class="owl-carousel home-owl-carousel upsell-product custom-carousel owl-theme outer-top-xs">
                        <?php foreach($hotDealProducts AS $k){ //pre($k);die;?>
                        <div class="item item-carousel">
                            <div class="products">
                                <div class="product">
                                    <div class="product-image">
                                        <div class="image">
                                            <?php if($k->qty<$k->minQty):?>
                                            <a href="javascript:void(0);" title="<?php echo $k->title;?>">
                                            <?php else:?>
                                            <a href="<?php echo BASE_URL.'product/details/'.base64_encode($k->productId);?>"  data-title="<?php echo $k->title;?>">
                                            <?php endif;?>
                                                <img src="_<?php echo HOME_LISTING.$k->image;?>" data-echo="<?php echo HOME_LISTING.$k->image;?>" alt="<?php echo $k->title;?>">
                                            </a>
                                        </div>
                                        <!-- /.image -->
                                        <div class="tag hot"><span>hot</span></div>
                                    </div>
                                    <!-- /.product-image -->
                                    <div class="product-info text-left">
                                        <h3 class="name">
                                            <?php if($k->qty<$k->minQty):?>
                                            <a href="javascript:void(0);" title="<?php echo $k->title;?>">
                                            <?php else:?>
                                            <a href="<?php echo BASE_URL.'product/details/'.base64_encode($k->productId);?>"  data-title="<?php echo $k->title;?>">
                                            <?php endif;?><?php echo $k->title;?></a></h3>
                                        <div class="description"></div>
                                        <div class="product-price">
                                            <span class="price"><i class="fa fa-inr"></i> <?php echo $k->lowestPrice;?> - <i class="fa fa-inr"></i> <?php echo $k->heighestPrice;?> </span>
                                        </div>
                                        <!-- /.product-price -->
                                    </div>
                                    <!-- /.product-info -->
                                    <div class="cart clearfix animate-effect">
                                        <div class="action">
                                            <ul class="list-unstyled">
                                                <li class="add-cart-button btn-group">
                                                    <button class="btn btn-primary icon" data-toggle="dropdown" type="button">
                                                    <i class="fa fa-truck"></i>
                                                    </button>
                                                    <button class="btn btn-primary" type="button">Add to Truck</button>
                                                </li>
                                            </ul>
                                        </div>
                                        <!-- /.action -->
                                    </div>
                                    <!-- /.cart -->
                                </div>
                                <!-- /.product -->
                            </div>
                            <!-- /.products -->
                        </div>
                        <!-- /.item -->
                        <?php }?>
                    </div>
                    <!-- /.home-owl-carousel -->
                </section>
            </div>
        </div>
        <?php echo $our_brand;?>
    </div>
</div>
<div class="modal fade multiselect-modal-sm" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog modal-sm">
    <div class="modal-content orderType-content">
      <div class="modal-body">
      	<div class="orderType">
         
            <div class="input-group form-group order-labl">
              <span class="input-group-addon">
                <input type="radio" name="ordertype" value="group">
              </span>
              <label for="grp">Hangout Order</label>
            </div><!-- /input-group -->
            
            <div class="input-group order-labl form-group">
              <span class="input-group-addon">
                <input type="radio" name="ordertype" value="single" checked>
              </span>
              <label for="sin">Single Order</label>
            </div><!-- /input-group -->
            
            <div class="text-center">
                <button type="button" class="btn btn-default add-to-truck-process-btn">Process</button>
            </div>
            <form name="add_to_truck_process_form" id="add_to_truck_process_form" method="post">
                <input type="hidden" name="productId" id="productId" value="<?php echo $productDetailsArr[0]->productId;?>">
                <input type="hidden" name="productPriceId" id="prorductPriceId" value="">
            </form>
        </div>
                <div class="clearfix"></div>
      </div>
    </div>
  </div>
</div>
<?php echo $footer;?>
<script type="text/javascript">
$(document).ready(function(){
    var is_loged_in = '<?=$is_loged_in?>';
    jQuery('#add-cart-button-id').click(function(){
        var productPriceIdData=jQuery('input:radio[name=selectPackege]:checked').val();
        if(productPriceIdData==undefined){
            myJsMain.commonFunction.retailershangoutAlert('Retailershangout Validate System',"Please select price for the product.");
            $('.multiselect-modal-sm').modal('hide');
        }else{
            if(!is_loged_in){
                myJsMain.commonFunction.retailershangoutAlert('Retailershangout Validate System',"Please sign in or sign up first for buy this product.");
                $('.multiselect-modal-sm').modal('hide');
                $( "a.signIn" ).trigger( "click" );
                return false;
            }
            $('.multiselect-modal-sm').modal('show');
        }
    }); 
    
    jQuery('.add-to-truck-process-btn').click(function(){
        var productPriceIdData=jQuery('input:radio[name=selectPackege]:checked').val();
        jQuery('#prorductPriceId').val(productPriceIdData);
        var order_type=jQuery('input:radio[name=ordertype]:checked').val();
        myJsMain.commonFunction.showPleaseWait();
        jQuery.post( myJsMain.baseURL+'shopping/check_old_order_type/', {
                orderType: order_type
            },
            function(data){ 
                myJsMain.commonFunction.hidePleaseWait();
                if(data.contents=="1"){
                    /// allow to process the product to cart
                    if(order_type=='group'){
                        jQuery('#add_to_truck_process_form').attr('action','<?php echo BASE_URL.'shopping/add-group-order/';?>');
                    }else{
                        jQuery('#add_to_truck_process_form').attr('action','<?php echo  BASE_URL.'shopping/add-order/';?>');
                    }
                    jQuery('#add_to_truck_process_form').submit();
                }
                /*else if(data.contents=="0"){
                    /// show error message
                    if(order_type=='single'){
                        myJsMain.commonFunction.tidiitAlert('Retailershangout Validate System','Your had selected last uncompleted order is "Hangout Order".So you can not process "Single Order" Now.Set the item to your wish list and process teh order latter.',140);
                    }else{
                        myJsMain.commonFunction.tidiitAlert('Retailershangout Validate System','your last "Hangout Order" is yet not completd.So you can not process "Hangout Order" Now.Set the item to your wish list and process teh order latter.',140);
                    }
                }else if(data.contents=="2"){ 
                    /// show error message
                    myJsMain.commonFunction.tidiitAlert('Retailershangout Validate System','Your "Single Order" yet not completed.So you can not process "Hangout Order" Now.Set the item to your wish list and process teh order latter.',140);
                }*/
                else if(data.contents=="-1"){
                    myJsMain.commonFunction.retailershangoutAlert('Retailershangout Validate System',"Please sign in or sign up first for buy this product.");
                    $('.multiselect-modal-sm').modal('hide');
                    $( "a.signIn" ).trigger( "click" );
                    return false;
                }
                
            }, 'json' );
            
        
    });
});
</script>