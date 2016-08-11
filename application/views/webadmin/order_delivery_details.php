<?php $orderinfo = unserialize(base64_decode($order->orderInfo));?>
<!-- Modal -->
<div class="modal fade" id="myModalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Delivery Details of Order Id :<?php echo $orderId;?></h4>
      </div>
        <form action="#" method="post" name="add_groups" class="form-horizontal" id="add_groups"> 
            <div class="modal-body">
                <div class="table-responsive">
                            <div class="panel panel-default">
                            <table class="table table-striped" id='js-print-container'>
                                <thead>
                                <tr class="active">
                                    <th>
                                        <a href="javascript://">Order #TIDIIT-OD-<?=$order->orderId?></a>
                                        <?php if($order->status == 5):?><a class="btn btn-info btn-xs pull-right no-print" data-oid="<?=base64_encode($order->orderId*226201);?>"><i class="fa fa-file-text-o"></i> View Invoice </a><?php endif;?>
                                        <?php if($order->status == 5):?><a class="btn btn-info btn-xs pull-right no-print changeOrderStateDelivered" data-orderid="<?=$order->orderId?>" style="margin-right:10px;"><i class="fa fa-file-text-o"></i> Set As Delivered</a><?php endif;?>
                                    </th>
                                  </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>
                                        <p><i class="fa fa-sort-desc"></i> Delivery Details</p>
                                     <table class="table">
                                        <tr><td style="width: 23%;font-size: 12px;">Logistics Company Name</td><td style="width: 26%;"><?php echo $orderDeliveryDetails->title; ?></td><td style="width: 2%;font-weight:bold;">:</td><td style="width: 23%;font-size: 12px;">Logistics Registration Number</td><td style="width: 26%"><?php echo $orderDeliveryDetails->registrationNo; ?></td></tr>
                                        <tr><td style="width: 23%;font-size: 12px;">Logistics Support Number</td><td style="width: 26%;"><?php echo $orderDeliveryDetails->supportNo; ?></td><td style="width: 2%;font-weight:bold;">:</td><td style="width: 23%;font-size: 12px;">Delivery Staff Name</td><td style="width: 26%"><?php echo $orderDeliveryDetails->deliveryStaffName; ?></td></tr>
                                        <tr><td style="width: 23%;font-size: 12px;">Delivery Staff Contact Number</td><td style="width: 26%;"><?php echo $orderDeliveryDetails->deliveryStaffContactNo; ?></td><td style="width: 2%;font-weight:bold;">:</td><td style="width: 23%;font-size: 12px;">Delivery Staff Email</td><td style="width: 26%"><?php echo $orderDeliveryDetails->deliveryStaffEmail; ?></td></tr>
                                        <tr><td style="width: 23%;font-size: 12px;">Receive Date Time</td><td style="width: 26%;"><?php echo date('d-m-Y H:i:s',strtotime($orderDeliveryDetails->receiveDateTime)); ?></td><td style="width: 2%;font-weight:bold;">:</td><td style="width: 23%;font-size: 12px;">Delivery Update Date and time</td><td style="width: 26%"><?php echo date('d-m-Y H:i:s',strtotime($orderDeliveryDetails->addedDate)); ?></td></tr>
                                        <tr><td style="width: 23%;font-size: 12px;">Delivery Photo1</td><td style="width: 26%;"><img src="<?php echo SiteResourcesURL.'order_delivery/75X75/'.$orderDeliveryDetails->photo1; ?>" border=""></td><td style="width: 2%;font-weight:bold;">:</td><td style="width: 23%;font-size: 12px;">Delivery Photo2</td><td style="width: 6%"><img src="<?php echo SiteResourcesURL.'order_delivery/75X75/'.$orderDeliveryDetails->photo2; ?>" border=""></td></tr>
                                    </table>    
                                     <p><i class="fa fa-sort-desc"></i> Order Details</p>   
                                     <table class="table table-bordered table-hover">
                                        <thead>
                                        <tr class="info">
                                            <th>Order ID</th>
                                            <th>Member</th>
                                            <th>Order Total</th>
                                            <th>Payment</th>
                                            <th>Paid?</th>
                                            <th>Order Status</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tr>
                                            <td>Order #TIDIIT-OD-<?=$order->orderId?></td>
                                            <td><?=$order->orderType=='GROUP'?'Buyer Club':'Self'?></td>
                                            <td><i class="fa fa-rupee"></i><?=$order->subTotalAmount?></td>
                                            <td><?php echo ($order->paymentType=='settlementOnDelivery')?'Settlement On Delivery':'Paid';?></td>
                                            <td><?php echo ($order->paymentType=='settlementOnDelivery')?'<span style="color: #009900;">No</span>':'<span style="color: #009900;">Yes</span>';?></td>
                                            <td><span class="label label-info"><?php if($order->status == 5){?>Physically Delivered But wait for Support Update<?php }else{ echo $status[$order->status];}?></span> (<?=$order->orderDate;?>)</td>
                                        </tr>
                                    </table>

                                    
                                     <table class="table table-bordered table-hover">
                                        <thead>
                                        <tr class="success">
                                            <?php /*<th>Billing Name</th>
                                            <th style="width: 35%;"><?=isset($orderinfo['shipping']->firstName)?$orderinfo['shipping']->firstName:''?> <?=isset($orderinfo['shipping']->lastName)?$orderinfo['shipping']->lastName:''?></th>*/?>
                                            <th>Shipping Name</th>
                                            <th style="width: 70%;"><?=isset($orderinfo['shipping']->firstName)?$orderinfo['shipping']->firstName:''?> <?=isset($orderinfo['shipping']->lastName)?$orderinfo['shipping']->lastName:''?></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tr>
                                            <?php /*<td>Billing Address</td>
                                            <td><?=isset($orderinfo['shipping']->address)?$orderinfo['shipping']->address:''?><br>
                                                <?=isset($orderinfo['shipping']->locality)?$orderinfo['shipping']->locality:''?><br>
                                            City: <?=isset($orderinfo['shipping']->city)?$orderinfo['shipping']->city:''?><br>
                                            State :<?=isset($orderinfo['shipping']->stateName)?$orderinfo['shipping']->stateName:''?><br>
                                            PIN :<?=isset($orderinfo['shipping']->zip)?$orderinfo['shipping']->zip:''?><br>
                                            Country :<?=isset($orderinfo['shipping']->countryName)?$orderinfo['shipping']->countryName:''?> 
                                            </td>*/?>
                                            <td>Shipping Address</td>
                                            <td><?=isset($orderinfo['shipping']->address)?$orderinfo['shipping']->address:''?><br>
                                                <?=isset($orderinfo['shipping']->locality)?$orderinfo['shipping']->locality:''?><br>
                                            City: <?=isset($orderinfo['shipping']->city)?$orderinfo['shipping']->city:''?><br>
                                            State :<?=isset($orderinfo['shipping']->stateName)?$orderinfo['shipping']->stateName:''?><br>
                                            PIN :<?=isset($orderinfo['shipping']->zip)?$orderinfo['shipping']->zip:''?><br>
                                            Country :<?=isset($orderinfo['shipping']->countryName)?$orderinfo['shipping']->countryName:''?><br>
                                            <b>Landmark</b> :<?=isset($orderinfo['shipping']->landmark)?$orderinfo['shipping']->landmark:''?></td>
                                        </tr>
                                        <tr>
                                            <?php /*<td>Billing Phone</td>
                                            <td><?=isset($orderinfo['billing']->contactNo)?$orderinfo['billing']->contactNo:''?></td>*/?>
                                            <td>Shipping Phone</td>
                                            <td><?=isset($orderinfo['shipping']->contactNo)?$orderinfo['shipping']->contactNo:''?></td>
                                        </tr>
                                        <tr>
                                            <?php /*<td>E-Mail</td>
                                            <td><?=isset($orderinfo['billing']->email)?$orderinfo['billing']->email:''?></td> */?>
                                            <td>E-Mail</td>
                                            <td><?=isset($orderinfo['billing']->email)?$orderinfo['billing']->email:''?></td>
                                        </tr>
                                    </table> 

                                        <p><i class="fa fa-sort-desc"></i> Items</p>
                                        <table class="table table-bordered table-hover">
                                            <thead>
                                            <tr class="danger">
                                                <th>#</th>
                                                <th>Product</th>
                                                <th>Model</th>
                                                <th>Brand</th>
                                                <th>Price</th>
                                                <th>Quantity</th>
                                                <th>Total</th>
                                              </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                            <tr>
                                                <td><?=isset($orderinfo['pdetail']->productId)?$orderinfo['pdetail']->productId:''?></td>
                                                <td>
                                                    <?php if(isset($orderinfo['pimage']->image)):?>
                                                    <a href="<?php echo $MainSiteBaseURL.'product/details/'.base64_encode($order->productId);?>" class="" target="_blank"><img src="<?=SiteResourcesURL.'product/100X100/'.$orderinfo['pimage']->image?>" alt="..." class="img-thumbnail img-responsive"/></a>
                                                <?php endif;?>
                                                    <a href="<?php echo $MainSiteBaseURL.'product/details/'.base64_encode($order->productId);?>" class="" target="_blank"><?=isset($orderinfo['pdetail']->title)?$orderinfo['pdetail']->title:''?></a></td>
                                                <td><?=isset($orderinfo['pdetail']->model)?$orderinfo['pdetail']->model:''?></td>
                                                <td><?=isset($orderinfo['pdetail']->brandTitle)?$orderinfo['pdetail']->brandTitle:''?></td>
                                                <td><i class="fa fa-rupee"></i><?=isset($order->orderAmount)?$order->orderAmount/$order->productQty:'0.00'?></td>
                                                <td><?=isset($order->productQty)?$order->productQty:'0'?></td>
                                                <td><i class="fa fa-rupee"></i><?=isset($order->subTotalAmount)?$order->subTotalAmount:''?></td>
                                            </tr>
                                            <tr> 
                                                <td colspan="5"></td>
                                                <td>Order Sub Total</td>
                                                <td><i class="fa fa-rupee"></i><?=isset($order->subTotalAmount)?$order->subTotalAmount:''?></td>
                                            </tr>
                                            <tr> 
                                                <td colspan="5"></td>
                                                <td>Order Discount</td>
                                                <td><i class="fa fa-rupee"></i><?=isset($order->discountAmount)?$order->discountAmount:''?></td>
                                            </tr>
                                            <tr> 
                                                <td colspan="5"></td>
                                                <td>Shipping ()</td>
                                                <td><i class="fa fa-rupee"></i><?=isset($order->shippingamount)?$order->shippingamount:''?></td>
                                            </tr>
                                            <tr> 
                                                <td colspan="5"></td>
                                                <td>Tax</td>
                                                <td><i class="fa fa-rupee"></i><?=isset($order->taxAmount)?$order->taxAmount:''?></td>
                                            </tr>
                                            <tr> 
                                                <td colspan="5"></td>
                                                <td>Order Total</td>
                                                <td><i class="fa fa-rupee"></i><?=isset($order->orderAmount)?$order->orderAmount:''?></td>
                                            </tr>
                                            <tr> 
                                                <td colspan="5"></td>
                                                <td>Paid</td>
                                                <td><i class="fa fa-rupee"></i><?=isset($order->subTotalAmount)?$order->subTotalAmount:''?></td>
                                            </tr>
                                        </table>  

                                    <?php /*<table class="table no-print">
                                        <thead>
                                        <tr class="info">
                                            <th>Manage Order</th>
                                            <th></th>
                                            <th></th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                        </tbody>
                                        <tr>
                                            <td align='middle'>
                                                <span id='btnPrint' style='cursor: pointer;' data-text="Tidiit.com - Order Information - TIDIIT-OD-<?=$order->orderId;?>"><i class="fa fa-print"></i><br>
                                                    PRINT ORDER</span>
                                            </td>
                                            <td align='middle'><?php if($order->status == 5):?><a data-oid="<?=base64_encode($order->orderId*226201);?>"><i class="fa fa-envelope"></i><br>EMAIL INVOICE</a><?php endif;?></td>
                                            <td align='middle'><span><a href="<?=BASE_URL?>contact-us"><i class="fa fa-phone-square"></i><br>
                                                        CONTACT US</a></span></td>
                                        </tr>
                                    </table>*/?>

                                    </td>
                                </tr>
                                </tbody>
                            </table>  
                            </div>
                        </div> 
                        <?php /*<a href="<?=BASE_URL?>my-orders"><button class="btn btn-warning"><i class="fa fa-arrow-left"></i> Back</button> </a>
                        <?php if($order->status == 5):?><a class="btn btn-info btn-xs pull-right" data-oid="<?=base64_encode($order->orderId*226201);?>"><i class="fa fa-file-text-o"></i> View Invoice</a><?php endif; */?>
            </div>
        <div class="modal-footer">&nbsp;</div>
      </form>    
    </div>
  </div>
</div>
<!-- /.modal -->
<div id="dialog-confirm" title="Alert" style="display: none;">
    <p><span id="dialog-confirm-message-text"></span></p>
</div>
<script type="text/javascript">
    jQuery(document).ready(function(){
        jQuery('#myModalLogin').modal('show');
        jQuery('body').on("click",'.changeOrderStateDelivered',function(){
           if(confirm('Are you sure to update the selected order as delivered ?')){
                myJsMain.commonFunction.showWebAdminPleaseWait();
                var orderid = jQuery(this).data('orderid'); 
                jqout=jQuery(this);
                jQuery.post( myJsMain.baseURL+'ajax/update_order_delivered/', {
                     orderId: orderid
                 },
                 function(data){
                     myJsMain.commonFunction.hideWebAdminPleaseWait();
                     if(data.result=='good'){
                         jqout.html("");
                         myJsMain.commonFunction.tidiitAlert('Tidiit Order Update System','Select order update as delivered successfully.',200);
                         location.href=myJsMain.baseURL+'order/viewlist';
                     }
                 }, 'json' );
           }
           return false;
        });
    });
</script>