<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Print</title>
    <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/bootstrap.min.css')); ?>" />
    <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/css/all.min.css')); ?>" />
</head>
<body>
    <style>
        .customer-invoice {
            page-break-before: always;
        }
        body{
            background:#F1F2F5
        }
    .customer-invoice {
        margin: 25px 0;
    }
    .invoice_btn{
        margin-bottom: 15px;
    }
    p{
        margin:0;
    }
    td{
        font-size: 16px;
    }
   @page { 
    margin:0px;
    }
   @media print {
    .invoice-innter{
        margin-left: -120px !important;
    }
    .invoice_btn{
        margin-bottom: 0 !important;
    }
    td{
        font-size: 18px;
    }
    p{
        margin:0;
    }
    header,footer,.no-print,.left-side-menu,.navbar-custom {
      display: none !important;
    }
  }
</style>
<div class="container">
    <div class="row">
        <div class="col-sm-12 mt-3 text-center">
            <button onclick="printFunction()"class="no-print btn btn-xs btn-success waves-effect waves-light"><i class="fa fa-print"></i></button>
        </div>
    </div>
</div>
<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
<section class="customer-invoice ">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 mt-3">
                <div class="invoice-innter" style="width:760px;margin: 0 auto;background: #fff;overflow: hidden;padding: 30px;padding-top: 0;">
                    <table style="width:100%">
                        <tr>
                            <td style="width: 40%; float: left; padding-top: 15px;">
                                <img src="<?php echo e(asset($generalsetting->white_logo)); ?>" width="190px" style="margin-top:25px !important" alt="">
                                <p style="font-size: 14px; color: #222; margin: 20px 0;"><strong>Payment Method:</strong> <span style="text-transform: uppercase;"><?php echo e($order->payment?$order->payment->payment_method:''); ?></span></p>
                                <div class="invoice_form">
                                    <p style="font-size:16px;line-height:1.8;color:#222"><strong>Invoice From:</strong></p>
                                    <p style="font-size:16px;line-height:1.8;color:#222"><?php echo e($generalsetting->name); ?></p>
                                    <p style="font-size:16px;line-height:1.8;color:#222"><?php echo e($contact->phone); ?></p>
                                    <p style="font-size:16px;line-height:1.8;color:#222"><?php echo e($contact->email); ?></p>
                                    <p style="font-size:16px;line-height:1.8;color:#222"><?php echo e($contact->address); ?></p>
                                </div>
                            </td>
                            <td  style="width:60%;float: left;">
                                <div class="invoice-bar" style=" background: #4DBC60; transform: skew(38deg); width: 100%; margin-left: 65px; padding: 20px 60px; ">
                                    <p style="font-size: 30px; color: #fff; transform: skew(-38deg); text-transform: uppercase; text-align: right; font-weight: bold;">Invoice</p>
                                </div>
                                <div class="invoice-bar" style="background: #fff; transform: skew(36deg); width: 72%; margin-left: 182px; padding: 12px 32px; margin-top: 6px;">
                                    <p style="font-size: 15px; color: #222;font-weight:bold; transform: skew(-36deg); text-align: right; padding-right: 18px">Invoice ID : <strong>#<?php echo e($order->invoice_id); ?></strong></p>
                                    <p style="font-size: 15px; color: #222;font-weight:bold; transform: skew(-36deg); text-align: right; padding-right: 32px">Invoice Date: <strong><?php echo e($order->created_at->format('d-m-y')); ?></strong></span></p>
                                </div>
                                <div class="invoice_to" style="padding-top: 20px;">
                                    <p style="font-size:16px;line-height:1.8;color:#222;text-align: right;"><strong>Invoice To:</strong></p>
                                    <p style="font-size:16px;line-height:1.8;color:#222;text-align: right;"><?php echo e($order->shipping?$order->shipping->name:''); ?></p>
                                    <p style="font-size:16px;line-height:1.8;color:#222;text-align: right;"><?php echo e($order->shipping?$order->shipping->phone:''); ?></p>
                                    <p style="font-size:16px;line-height:1.8;color:#222;text-align: right;"><?php echo e($order->shipping?$order->shipping->address:''); ?></p>
                                    <p style="font-size:16px;line-height:1.8;color:#222;text-align: right;"><?php echo e($order->shipping?$order->shipping->area:''); ?></p>
                                </div>
                            </td>
                        </tr>
                    </table>
                    <table class="table" style="margin-top: 30px;margin-bottom: 0;">
                        <thead style="background: #4DBC60; color: #fff;">
                            <tr>
                                <th>SL</th>
                                <th>Product </th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $order->orderdetails; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($loop->iteration); ?></td>
                                <td><?php echo e($value->product_name); ?> <br> <?php if($value->product_size): ?> <small>Size: <?php echo e($value->product_size); ?></small> <?php endif; ?>   <?php if($value->product_color): ?> <small>Color: <?php echo e($value->product_color); ?></small> <?php endif; ?></td>
                                <td>৳<?php echo e($value->sale_price); ?></td>
                                <td><?php echo e($value->qty); ?></td>
                                <td>৳<?php echo e($value->sale_price*$value->qty); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                    <div class="invoice-bottom">
                        
                        <table class="table" style="width: 300px; float: right;    margin-bottom: 30px;">
                            <tbody style="background:#f1f9f8">
                                <tr>
                                    <td><strong>SubTotal</strong></td>
                                    <td><strong>৳<?php echo e($order->orderdetails->sum('sale_price')); ?></strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Shipping(+)</strong></td>
                                    <td><strong>৳<?php echo e($order->shipping_charge); ?></strong></td>
                                </tr>
                                <tr>
                                    <td><strong>Discount(-)</strong></td>
                                    <td><strong>৳<?php echo e($order->discount); ?></strong></td>
                                </tr>
                                <tr style="background:#4DBC60;color:#fff">
                                    <td><strong>Final Total</strong></td>
                                    <td><strong>৳<?php echo e($order->amount); ?></strong></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="terms-condition" style="overflow: hidden; width: 100%; text-align: center; padding: 20px 0; border-top: 1px solid #ddd;">
                            <h5 style="font-style: italic;"><a href="<?php echo e(route('page',['slug'=>'terms-condition'])); ?>">Terms & Conditions</a></h5>
                            <p style="text-align: center; font-style: italic; font-size: 15px; margin-top: 10px;">* This is a computer generated invoice, does not require any signature.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<script>
    function printFunction() {
        window.print();
    }
</script>
</body>
</html>
<?php /**PATH /home/neevroco/ecom8.neevro.com/resources/views/backEnd/order/print.blade.php ENDPATH**/ ?>