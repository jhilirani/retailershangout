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
            <div class="col-xs-12 col-sm-12 col-md-3 sidebar filters">
                <span class="cross visible-xs visible-sm">&times;</span>
                <div class="side-menu animateDropdown">
                    <?php //echo $main_category_menu; ?>
                    <div class="sidebar-module-container">
                        <div class="sidebar-filter">
                            <div class="sidebar-widget">
                                <h3 class="section-title">Price Range</h3>
                                <div class="sidebar-widget-body m-t-20">
                                    <div class="price-range-holder">
                                        <span class="min-max">
                                            <span class="pull-left"><i class="fa fa-inr"></i> <?=$range[0]?></span>
                                            <span class="pull-right"><i class="fa fa-inr"></i> <?=$range[1]?></span>
                                        </span>
                                        <input type="text" id="amount" style="border:0; color:#666666; font-weight:bold;text-align:center;">
                                        <div class="slider slider-horizontal" id=""><div class="slider-track"><div class="slider-track-low" style="left: 0px; width: 0%;"></div><div class="slider-selection" style="left: 0%; width: 100%;"></div><div class="slider-track-high" style="right: 0px; width: 0%;"></div></div><div class="tooltip tooltip-main top" role="presentation" style="left: 50%; margin-left: -47.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner"><?=$range[0]?> : <?=$range[1]?></div></div><div class="tooltip tooltip-min top" role="presentation" style="left: 0%; margin-left: -25.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner"><?=$range[0]?></div></div><div class="tooltip tooltip-max top" role="presentation" style="left: 100%; margin-left: -25.5px;"><div class="tooltip-arrow"></div><div class="tooltip-inner"><?=$range[0]?></div></div><div class="slider-handle min-slider-handle" role="slider" aria-valuemin="<?=$range[0]?>" aria-valuemax="<?=$range[1]?>" aria-valuenow="<?=$range[0]?>" style="left: 0%;" tabindex="0"></div><div class="slider-handle max-slider-handle" role="slider" aria-valuemin="<?=$range[0]?>" aria-valuemax="<?=$range[1]?>" aria-valuenow="<?=$range[0]?>" style="left: 100%;" tabindex="0"></div></div><input type="text" class="price-slider" value="<?=$range[0]?>,<?=$range[1]?>" style="display: none;" data-value="<?=$range[0]?>,<?=$range[1]?>">
                                    </div>
                                    <!-- /.price-range-holder -->
                                </div>
                                <!-- /.sidebar-widget-body -->
                            </div>
                            <?php if(isset($products['brands']) && $products['brands']):?>
                            <div class="sidebar-widget">
                                <h3 class="section-title">Brands</h3>
                                <div class="sidebar-widget-body m-t-10">
                                    <ul class="list-inline">
                                        <?php foreach($products['brands'] as $bkey => $brnd):?>
                                        <li><div class="checkbox"><label><input type="checkbox" class="brandsort" name="" id="" value="<?=$brnd?>" <?php if(in_array($brnd, $brand)):?>checked="checked" <?php endif;?>><?=$brnd?></label></div></li>
                                        <?php endforeach;?>
                                    </ul>
                                </div>
                                <!-- /.sidebar-widget-body -->
                            </div>
                            <?php unset($products['brands']);endif; ?>
                            <?php if(isset($options) && $options): //print_r($options); 
                                foreach($options as $opkey => $opval):?>
                                <div class="sidebar-widget">
                                    <h3 class="section-title"><?=$opval['name']?></h3>
                                    <div class="sidebar-widget-body m-t-10">
                                        <ul class="list-inline">
                                            <?php
                                            foreach($opval['value'] as $ovkey => $oval):
                                                $listval = $oval;
                                                if($opval['name'] == "Color"):
                                                    $colors = explode("||", $oval);
                                                    $listval = $colors[0];
                                                endif;
                                                $checked = "";
                                                $qc = $opval['id'].'@'.trim($listval);
                                                if(in_array($qc, $query)):
                                                    $checked = " checked";
                                                endif;
                                            ?>
                                            <li><div class="checkbox"><label><input type="checkbox" name="<?=$opval['type']?>" class="optionsort" data-name="<?=$opkey?>" value="<?=$opval['id']?>@<?=trim($listval)?>" <?=$checked?>><?=$listval?></label></div></li>
                                            <?php endforeach;?>
                                        </ul>
                                        <!--<a href="#" class="lnk btn btn-primary">Show Now</a>-->
                                    </div>
                                    <!-- /.sidebar-widget-body -->
                                </div>
                            <?php endforeach;
                            endif;?>        
                        </div>
                    </div>
                </div>
            </div> <!-- /.sidebar -->
            <div class="col-xs-12 col-sm-12 col-md-9">
                <div id="category" class="category-carousel hidden-xs">
                    <div class="item">
                        <div class="image">
                            <img src="<?php SiteImagesURL;?>banners/cat-banner-1.jpg" alt="" class="img-responsive">
                        </div>
                    </div>
                </div>
                <div class="clearfix filters-container m-t-10">
                    <div class="row">
                        <div class="col col-sm-12 col-md-8 col-xs-">
                            <div class="col col-sm-6 col-md-3 hidden-xs">
                                <div class="filter-tabs">
                                    <ul id="filter-tabs" class="nav nav-tabs nav-tab-box nav-tab-fa-icon">
                                        <li class="active"><a data-toggle="tab" href="#grid-container"><i class="icon fa fa-th-large"></i>Grid</a> </li>
                                        <li><a data-toggle="tab" href="#list-container"><i class="icon fa fa-th-list"></i>List</a></li>
                                    </ul>
                                </div> <!-- /.filter-tabs --> 
                            </div>
                            <div class="col col-sm-6 col-md-6 no-padding">
                                <div class="lbl-cnt">
                                    <span class="lbl">Sort by</span>
                                    <div class="fld inline">
                                        <div class="dropdown dropdown-small dropdown-med dropdown-white inline">
                                            <button data-toggle="dropdown" type="button" class="btn dropdown-toggle">
                                            Position <span class="caret"></span>
                                            </button>
                                            <ul role="menu" class="dropdown-menu">
                                                <li role="presentation"><a href="javascript//" data-content="popular" <?php if($sort == "popular"):?>class="active" <?php endif;?>>Popularity</a></li>
                                                <li role="presentation"><a href="javascript//" data-content="lowestPrice" <?php if($sort == "lowestPrice"):?>class="active" <?php endif;?>>Price</a></li>
                                                <li role="presentation"><a href="javascript//" data-content="isNew" <?php if($sort == "isNew"):?>class="active" <?php endif;?>>Price:HIghest</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!-- /.fld -->
                                </div>
                                <!-- /.lbl-cnt -->
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.col -->
                        <div class="col col-sm-3 col-md-4 col-xs-6 text-right hidden-xs">
                            <div class="pagination-container">
                                <ul class="list-inline list-unstyled">
                                    <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                                <!-- /.list-inline -->
                            </div>
                            <!-- /.pagination-container --> 
                        </div>
                        <!-- /.col -->
                    </div> <!-- /.row -->
                </div>
                <div class="search-result-container">
                    <div class="tab-content">
                        <div class="tab-pane active" id="grid-container">
                            <div class="category-product">
                                <div class="row">
                                    <?php if(isset($products['products']) && $products['products']):?>
                                    <?php foreach($products['products'] as $pkey => $pro):?>
                                    <div class="col-sm-3 col-md-4 col-xs-6">
                                        <div class="products">
                                            <div class="product">
                                                <div class="product-image">
                                                    <div class="image">
                                                        <?php if($pro->qty < $pro->minQty):?>
                                                        <a href="javascript://">
                                                        <?php else: ?>
                                                            <a href="<?=BASE_URL.'product/details/'.base64_encode($pro->productId);?>">
                                                        <?php endif;?>        
                                                            <img src="<?=HOME_LISTING.$pro->pImage;?>" data-echo="<?=HOME_LISTING.$pro->pImage;?>" alt="<?=$pro->title;?>" class="img-responsive"></a>
                                                    </div>
                                                    <!-- /.image -->
                                                    <div class="tag new"><span>new</span></div>
                                                </div>
                                                <!-- /.product-image -->
                                                <div class="product-info text-left">
                                                    <h3 class="name">
                                                        <?php if($pro->qty < $pro->minQty):?>
                                                        <a href="javascript://">
                                                        <?php else :?>
                                                        <a href="<?=BASE_URL.'product/details/'.base64_encode($pro->productId);?>"><?=$pro->title;?></a>
                                                        <?php endif;?>
                                                    </h3>
                                                    <?php if($pro->qty < $pro->minQty):?>
                                                    <div class="description">Out of Stock</div>
                                                    <?php endif;?>
                                                    <div class="product-price">
                                                        <span class="price"><?php echo $currencySymbol.' '.$pro->lowestPrice.' - '.$currencySymbol.' '.$pro->heighestPrice;?></span>
                                                    </div>
                                                    <!-- /.product-price -->
                                                </div>
                                                <!-- /.product-info -->
                                                <?php if($pro->qty < $pro->minQty):?>
                                                <!--Out of Stock -->
                                                <?php else:?>
                                                <div class="cart clearfix animate-effect">
                                                    <div class="action">
                                                        <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon goProductDetails" data-toggle="dropdown" type="button" data-producturl="<?=BASE_URL.'product/details/'.base64_encode($pro->productId);?>">
                                                                <i class="fa fa-truck"></i>
                                                                </button>
                                                                <a class="btn btn-primary goProductDetails" href="javascript:void(0);" title="Wishlist" data-producturl="<?=BASE_URL.'product/details/'.base64_encode($pro->productId);?>">Add to Truck</a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <!-- /.action -->
                                                </div>
                                                <!-- /.cart -->
                                                <?php endif;?>
                                            </div>
                                            <!-- /.product -->
                                        </div>
                                        <!-- /.products -->
                                    </div>
                                    <!-- /.item -->
                                    <?php endforeach;?>
                                    <?php else:?>
                                    <div class="alert alert-danger" role="alert"><h3><i class="fa fa-exclamation-triangle"></i> &nbsp; &nbsp; Oops! No products found as per your wish!</h3></div>
                                    <?php endif;?>
                                </div>
                                <!-- /.row -->
                            </div> <!-- /.category-product -->
                        </div>
                        <div class="tab-pane" id="list-container">
                            <div class="category-product">
                                <?php if(isset($products['products']) && $products['products']):?>
                                <?php foreach($products['products'] as $pkey => $pro):?>
                                <div class="category-product-inner" style="visibility: visible; animation-name: fadeInUp;">
                                    <div class="products">
                                        <div class="product-list product">
                                            <div class="row product-list-row">
                                                <div class="col col-sm-4 col-lg-3">
                                                    <div class="product-image">
                                                        <div class="image"> <img src="<?=HOME_LISTING.$pro->pImage;?>" class="img-responsive" alt="<?php echo $pro->title;?>"> </div>
                                                    </div>
                                                    <!-- /.product-image --> 
                                                </div>
                                                <!-- /.col -->
                                                <div class="col col-sm-8 col-lg-9">
                                                    <div class="product-info">
                                                        <h3 class="name">
                                                            <?php if($pro->qty < $pro->minQty):?>
                                                        <a href="javascript://">
                                                        <?php else: ?>
                                                            <a href="<?=BASE_URL.'product/details/'.base64_encode($pro->productId);?>">
                                                        <?php endif;?>        
                                                                <?=$pro->title;?></a></h3>
                                                        <div class="product-price"> <span class="price"><?php echo $currencySymbol.' '.$pro->lowestPrice.' - '.$currencySymbol.' '.$pro->heighestPrice;?></span> </div>
                                                        <!-- /.product-price -->
                                                        <div class="description m-t-10"><?php echo $pro->shortDescription;?>
                                                        <div class="cart clearfix animate-effect">
                                                            <div class="action">
                                                                <ul class="list-unstyled">
                                                            <li class="add-cart-button btn-group">
                                                                <button class="btn btn-primary icon goProductDetails" data-toggle="dropdown" type="button" data-producturl="<?=BASE_URL.'product/details/'.base64_encode($pro->productId);?>">
                                                                <i class="fa fa-truck"></i>
                                                                </button>
                                                                <a class="btn btn-primary goProductDetails" href="javascript:void(0);" title="Wishlist" data-producturl="<?=BASE_URL.'product/details/'.base64_encode($pro->productId);?>">Add to Truck</a>
                                                            </li>
                                                        </ul>
                                                            </div>
                                                            <!-- /.action --> 
                                                        </div>
                                                        <!-- /.cart --> 
                                                    </div>
                                                    <!-- /.product-info --> 
                                                </div>
                                                <!-- /.col --> 
                                            </div>
                                            <!-- /.product-list-row -->
                                            <div class="tag new"><span>new</span></div>
                                        </div>
                                        <!-- /.product-list --> 
                                    </div>
                                    <!-- /.products --> 
                                </div>
                                <!-- /.category-product-inner -->
                                <?php endforeach;?>
                                <?php else:?>
                                <div class="alert alert-danger" role="alert"><h3><i class="fa fa-exclamation-triangle"></i> &nbsp; &nbsp; Oops! No products found as per your wish!</h3></div>
                                <?php endif;?>
                            </div>
                            <!-- /.category-product --> 
                        </div>
                    </div>
                    <div class="clearfix filters-container">
                        <div class="text-right">
                            <div class="pagination-container">
                                <ul class="list-inline list-unstyled">
                                    <li class="prev"><a href="#"><i class="fa fa-angle-left"></i></a></li>
                                    <li><a href="#">1</a></li>
                                    <li class="active"><a href="#">2</a></li>
                                    <li><a href="#">3</a></li>
                                    <li><a href="#">4</a></li>
                                    <li class="next"><a href="#"><i class="fa fa-angle-right"></i></a></li>
                                </ul>
                                <!-- /.list-inline -->
                            </div>
                            <!-- /.pagination-container --> 
                        </div>
                        <!-- /.text-right -->
                    </div>
                    <!-- /.filters-container -->
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <?php /*<div id="brands-carousel" class="logo-slider">
            <h3 class="section-title">Our Brands</h3>
            <div class="logo-slider-inner">
                <div id="brand-slider" class="owl-carousel brand-slider custom-carousel owl-theme">
                    <div class="item m-t-15">
                        <a href="#" class="image">
                        <img src="_/images/brands/brand1.png" alt="">
                        </a>
                    </div>
                    <!--/.item-->
                    <div class="item m-t-10">
                        <a href="#" class="image">
                        <img src="_/images/brands/brand2.png" alt="">
                        </a>
                    </div>
                    <!--/.item-->
                    <div class="item">
                        <a href="#" class="image">
                        <img src="_/images/brands/brand3.png" alt="">
                        </a>
                    </div>
                    <!--/.item-->
                    <div class="item">
                        <a href="#" class="image">
                        <img src="_/images/brands/brand4.png" alt="">
                        </a>
                    </div>
                    <!--/.item-->
                    <div class="item">
                        <a href="#" class="image">
                        <img src="_/images/brands/brand5.png" alt="">
                        </a>
                    </div>
                    <!--/.item-->
                    <div class="item">
                        <a href="#" class="image">
                        <img src="_/images/brands/brand6.png" alt="">
                        </a>
                    </div>
                    <!--/.item-->
                    <div class="item">
                        <a href="#" class="image">
                        <img src="_/images/brands/brand2.png" alt="">
                        </a>
                    </div>
                    <!--/.item-->
                    <div class="item">
                        <a href="#" class="image">
                        <img src="_/images/brands/brand4.png" alt="">
                        </a>
                    </div>
                    <!--/.item-->
                    <div class="item">
                        <a href="#" class="image">
                        <img src="_/images/brands/brand1.png" alt="">
                        </a>
                    </div>
                    <!--/.item-->
                    <div class="item">
                        <a href="#" class="image">
                        <img src="_/images/brands/brand5.png" alt="">
                        </a>
                    </div>
                    <!--/.item-->
                </div>
                <!-- /.owl-carousel #logo-slider -->
            </div>
            <!-- /.logo-slider-inner -->
        </div>*/?>
    </div>
</div>
<?php echo$footer; ?>
<script type="text/javascript">
$(document).ready(function(){
    $('.goProductDetails').on('click',function(){
        location.href=$(this).data('producturl');
    });
});
</script>