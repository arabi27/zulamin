
<?php $__env->startSection('title','Product Price Manage'); ?>
<?php $__env->startSection('content'); ?>
<div class="container-fluid">
    
    <!-- start page title -->
    <div class="row">
        <div class="col-12">
            <div class="page-title-box">
                <div class="page-title-right">
                    <a href="<?php echo e(route('products.create')); ?>" class="btn btn-danger rounded-pill"><i class="fe-shopping-cart"></i> Add Product</a>
                </div>
                <h4 class="page-title">Product Price Manage</h4>
            </div>
        </div>
    </div>       
    <!-- end page title --> 
   <div class="row">
    <div class="col-12">
        <div class="card">
            <form action="<?php echo e(route('products.price_update')); ?>" method="POST">
                <?php echo csrf_field(); ?>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table nowrap w-100">
                    <thead>
                        <tr>
                            <th style="width:5%">SL</th>
                                    </div></th>
                            <th style="width:50%">Name</th>
                            <th style="width:15%">Old Price</th>
                            <th style="width:15%">New Price</th>
                            <th style="width:15%">Stock</th></th>
                        </tr>
                    </thead>               
                
                    <tbody>
                        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($loop->iteration); ?></td>
                            <input type="hidden" value="<?php echo e($value->id); ?>" name="ids[]">
                            <td><?php echo e($value->name); ?></td>
                            <td><input value="<?php echo e($value->old_price); ?>" name="old_price[]"></td>
                            <td><input value="<?php echo e($value->new_price); ?>" name="new_price[]"></td>
                            <td><input value="<?php echo e($value->stock); ?>" name="stock[]"></td>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                     </tbody>
                     <tfoot>
                         <tr>
                             <td colspan="4"></td>
                             <td>
                                 <button class="btn btn-success">Update Price</button>
                             </td>
                         </tr>
                     </tfoot>
                    </table>
                </div>
            </div> <!-- end card body-->
            </form>
        </div> <!-- end card -->
    </div><!-- end col-->
   </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
$(document).ready(function(){
    $(".checkall").on('change',function(){
      $(".checkbox").prop('checked',$(this).is(":checked"));
    });
    
    $(document).on('click', '.hotdeal_update', function(e){
        e.preventDefault();
        var url = $(this).attr('href');
        console.log('url',url);
        var product = $('input.checkbox:checked').map(function(){
          return $(this).val();
        });
        var product_ids=product.get();
        if(product_ids.length ==0){
            toastr.error('Please Select A Product First !');
            return ;
        }
        $.ajax({
           type:'GET',
           url:url,
           data:{product_ids},
           success:function(res){
               if(res.status=='success'){
                toastr.success(res.message);
                window.location.reload();
            }else{
                toastr.error('Failed something wrong');
            }
           }
        });
    });
    $(document).on('click', '.update_status', function(e){
        e.preventDefault();
        var url = $(this).attr('href');
        var product = $('input.checkbox:checked').map(function(){
          return $(this).val();
        });
        var product_ids=product.get();
        if(product_ids.length ==0){
            toastr.error('Please Select A Product First !');
            return ;
        }
        $.ajax({
           type:'GET',
           url:url,
           data:{product_ids},
           success:function(res){
               if(res.status=='success'){
                toastr.success(res.message);
                window.location.reload();
            }else{
                toastr.error('Failed something wrong');
            }
           }
        });
    });
    $(document).on('click', '.update_status', function(e){
        e.preventDefault();
        var url = $(this).attr('href');
        var product = $('input.checkbox:checked').map(function(){
          return $(this).val();
        });
        var product_ids=product.get();
        if(product_ids.length ==0){
            toastr.error('Please Select A Product First !');
            return ;
        }
        $.ajax({
           type:'GET',
           url:url,
           data:{product_ids},
           success:function(res){
               if(res.status=='success'){
                toastr.success(res.message);
                window.location.reload();
            }else{
                toastr.error('Failed something wrong');
            }
           }
        });
    });
    
    
})
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('backEnd.layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/creativedesignbd/ecommerce1.creativedesign.com.bd/resources/views/backEnd/product/price_edit.blade.php ENDPATH**/ ?>