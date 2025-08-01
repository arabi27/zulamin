<?php
    $subtotal = Cart::instance('shopping')->subtotal();
    $subtotal=str_replace(',','',$subtotal);
    $subtotal=str_replace('.00', '',$subtotal);
    $shipping = Session::get('shipping')?Session::get('shipping'):0;
    $discount = Session::get('discount')?Session::get('discount'):0;
?>
<table class="cart_table table table-bordered table-striped text-center mb-0">
        <thead>
         <tr>
          <th style="width: 20%;">ডিলিট</th>
          <th style="width: 40%;">প্রোডাক্ট</th>
          <th style="width: 20%;">পরিমাণ</th>
          <th style="width: 20%;">মূল্য</th>
         </tr>
        </thead>

        <tbody>
         <?php $__currentLoopData = Cart::instance('shopping')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
         <tr>
          <td>
           <a class="cart_remove" data-id="<?php echo e($value->rowId); ?>"><i class="fas fa-trash text-danger"></i></a>
          </td>
          <td class="text-left">
           <a href="<?php echo e(route('product',$value->options->slug)); ?>"> <img src="<?php echo e(asset($value->options->image)); ?>" style="height:30px;width:30px" /> <?php echo e(Str::limit($value->name,20)); ?></a>
           <?php if($value->options->product_size): ?>
            <p>Size: <?php echo e($value->options->product_size); ?></p>
           <?php endif; ?>
           <?php if($value->options->product_color): ?>
           <p>Color: <?php echo e($value->options->product_color); ?></p>
           <?php endif; ?>
          </td>
          <td class="cart_qty">
           <div class="qty-cart vcart-qty">
            <div class="quantity">
             <button class="minus cart_decrement" data-id="<?php echo e($value->rowId); ?>">-</button>
             <input type="text" value="<?php echo e($value->qty); ?>" readonly />
             <button class="plus cart_increment" data-id="<?php echo e($value->rowId); ?>">+</button>
            </div>
           </div>
          </td>
          <td><span class="alinur">৳ </span><strong><?php echo e($value->price); ?></strong></td>
         </tr>
         <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
        <tfoot>
         <tr>
          <th colspan="3" class="text-end px-4">মোট</th>
          <td>
           <span id="net_total"><span class="alinur">৳ </span><strong><?php echo e($subtotal); ?></strong></span>
          </td>
         </tr>
         <tr>
          <th colspan="3" class="text-end px-4">ডেলিভারি চার্জ</th>
          <td>
           <span id="cart_shipping_cost"><span class="alinur">৳ </span><strong><?php echo e($shipping); ?></strong></span>
          </td>
         </tr>
         <?php if(Session::get('discount', 0) > 0): ?>
         <tr>
            <th colspan="3" class="text-end px-4">কুপন ছাড়</th>
            <td>
                <span id="discount"><span class="alinur">৳ </span><strong><?php echo e(Session::get('discount', 0)); ?></strong></span>
            </td>
        </tr>
        <?php endif; ?>
         <tr>
          <th colspan="3" class="text-end px-4">সর্বমোট</th>
          <td>
           <span id="grand_total"><span class="alinur">৳ </span><strong><?php echo e($subtotal+$shipping-Session::get('discount', 0)); ?></strong></span>
          </td>
         </tr>
        </tfoot>
       </table>

<script src="<?php echo e(asset('public/frontEnd/js/jquery-3.6.3.min.js')); ?>"></script>
<!-- cart js start -->
<script>
    $('.cart_store').on('click',function(){
    var id = $(this).data('id'); 
    var qty = $(this).parent().find('input').val();
    if(id){
        $.ajax({
           type:"GET",
           data:{'id':id,'qty':qty?qty:1},
           url:"<?php echo e(route('cart.store')); ?>",
           success:function(data){               
            if(data){
                return cart_count();
            }
           }
        });
     }  
   });

    $('.cart_remove').on('click',function(){
    var id = $(this).data('id');   
    if(id){
        $.ajax({
           type:"GET",
           data:{'id':id},
           url:"<?php echo e(route('cart.remove')); ?>",
           success:function(data){               
            if(data){
                $(".cartlist").html(data);
                return cart_count();
            }
           }
        });
     }  
   });
   

    $('.cart_increment').on('click',function(){
    var id = $(this).data('id');  
    if(id){
        $.ajax({
           type:"GET",
           data:{'id':id},
           url:"<?php echo e(route('cart.increment')); ?>",
           success:function(data){               
            if(data){
                $(".cartlist").html(data);
                return cart_count();
            }
           }
        });
     }  
   });

    $('.cart_decrement').on('click',function(){
    var id = $(this).data('id');  
    if(id){
        $.ajax({
           type:"GET",
           data:{'id':id},
           url:"<?php echo e(route('cart.decrement')); ?>",
           success:function(data){               
            if(data){
                $(".cartlist").html(data);
                return cart_count();
            }
           }
        });
     }  
   });
    
    function cart_count(){
        $.ajax({
           type:"GET",
           url:"<?php echo e(route('cart.count')); ?>",
           success:function(data){               
            if(data){
                $("#cart-qty").html(data);
            }else{
               $("#cart-qty").empty();
            }
           }
        }); 
   };
   
</script>
<!-- cart js end --><?php /**PATH /home/neevroco/ecom8.neevro.com/resources/views/frontEnd/layouts/ajax/cart.blade.php ENDPATH**/ ?>