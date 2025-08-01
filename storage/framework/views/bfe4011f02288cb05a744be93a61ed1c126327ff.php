<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title><?php echo e($generalsetting->name); ?></title>
        <link rel="shortcut icon" href="<?php echo e(asset($generalsetting->favicon)); ?>" type="image/x-icon" />
        <!-- fot awesome -->
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/campaign/css')); ?>/all.css" />
        <!-- core css -->
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/campaign/css')); ?>/bootstrap.min.css" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/campaign/css')); ?>/animate.css" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/campaign/css')); ?>/owl.theme.default.css" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/campaign/css')); ?>/owl.carousel.min.css" />
        <!-- owl carousel -->
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/campaign/css')); ?>/select2.min.css" />
        <!-- common css -->
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/campaign/css')); ?>/style.css" />
        <link rel="stylesheet" href="<?php echo e(asset('public/frontEnd/campaign/css')); ?>/responsive.css" />
        <?php $__currentLoopData = $pixels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pixel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Facebook Pixel Code -->
        <script>
          !function(f,b,e,v,n,t,s)
          {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
          n.callMethod.apply(n,arguments):n.queue.push(arguments)};
          if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
          n.queue=[];t=b.createElement(e);t.async=!0;
          t.src=v;s=b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t,s)}(window, document,'script',
          'https://connect.facebook.net/en_US/fbevents.js');
          fbq('init', '<?php echo e($pixel->code); ?>');
          fbq('track', 'PageView');
        </script>
        <noscript>
          <img height="1" width="1" style="display:none" 
               src="https://www.facebook.com/tr?id=<?php echo e($pixel->code); ?>&ev=PageView&noscript=1"/>
        </noscript>
        <!-- End Facebook Pixel Code -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        <meta name="app-url" content="<?php echo e(route('campaign',$campaign_data->slug)); ?>" />
        <meta name="robots" content="index, follow" />
        <meta name="description" content="<?php echo e($campaign_data->description); ?>" />
        <meta name="keywords" content="<?php echo e($campaign_data->slug); ?>" />
        
        <!-- Twitter Card data -->
        <meta name="twitter:card" content="product" />
        <meta name="twitter:site" content="<?php echo e($campaign_data->name); ?>" />
        <meta name="twitter:title" content="<?php echo e($campaign_data->name); ?>" />
        <meta name="twitter:description" content="<?php echo e($campaign_data->description); ?>" />
        <meta name="twitter:creator" content="hellodinajpur.com" />
        <meta property="og:url" content="<?php echo e(route('campaign',$campaign_data->slug)); ?>" />
        <meta name="twitter:image" content="<?php echo e(asset($campaign_data->image_one)); ?>" />
        
        <!-- Open Graph data -->
        <meta property="og:title" content="<?php echo e($campaign_data->name); ?>" />
        <meta property="og:type" content="product" />
        <meta property="og:url" content="<?php echo e(route('campaign',$campaign_data->slug)); ?>" />
        <meta property="og:image" content="<?php echo e(asset($campaign_data->image_one)); ?>" />
        <meta property="og:description" content="<?php echo e($campaign_data->description); ?>" />
        <meta property="og:site_name" content="<?php echo e($campaign_data->name); ?>" />
        <?php $__currentLoopData = $pixels; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pixel): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Facebook Pixel Code -->
        <script>
            !(function (f, b, e, v, n, t, s) {
                if (f.fbq) return;
                n = f.fbq = function () {
                    n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
                };
                if (!f._fbq) f._fbq = n;
                n.push = n;
                n.loaded = !0;
                n.version = "2.0";
                n.queue = [];
                t = b.createElement(e);
                t.async = !0;
                t.src = v;
                s = b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t, s);
            })(window, document, "script", "https://connect.facebook.net/en_US/fbevents.js");
            fbq("init", "<?php echo e($pixel->code); ?>");
            fbq("track", "PageView");
        </script>
        <noscript>
            <img height="1" width="1" style="display: none;" src="https://www.facebook.com/tr?id=<?php echo e($pixel->code); ?>&ev=PageView&noscript=1" />
        </noscript>
        <!-- End Facebook Pixel Code -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
        <?php $__currentLoopData = $gtm_code; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $gtm): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <!-- Google tag (gtag.js) -->
        <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
        new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
        j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
        'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-<?php echo e($gtm->code); ?>');</script>
        <!-- End Google Tag Manager -->
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <style>
            /* Style for selected product card */
            .selected {
                border: 2px solid green; /* Change border color to green */
            }
            .countdown-container {
                text-align: center;
            }
            .counter-card {
                border: 2px dotted white; /* Dotted border */
                border-radius: 15px; /* Rounded corners */
                padding: 5px; /* Padding for the card */
                background-color: transparent; /* Slightly transparent white background */
                box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Subtle shadow for depth */
                text-align: center; /* Center the text within each card */
               
            }
            .counter-card div{
                font-size: 1.2em;
                font-weight:bolder;
                color:white;
            }
            
            
            .counter-card span {
                display: block; /* Make the span block-level for better spacing */
                font-size: 0.8em; /* Font size for labels */
                color:orange;
            }
            @keyframes colorAnimation {
                0% {
                    color: pink; /* Start with pink */
                }
                33% {
                    color: green; /* Transition to green */
                }
                66% {
                    color: red; /* Transition to red */
                }
                100% {
                    color: pink; /* Return to pink */
                }
            }
            
            .animated-heading {
                font-size: 2em; /* Adjust font size as needed */
                font-weight: bold; /* Make the heading bold */
                animation: colorAnimation 3s linear infinite; /* Apply the animation */
                
               
            }
            .form_inn{
                padding:10px;
            }
            @media (max-width: 992px) {
                .campro_inn,.cont_inner,.cont_num ,.discount_inn{
                    padding: 10px!important; /* Add 10px padding for tablet and smaller devices */
                    width: 100%;
                }
                .discount_inn{
                    margin:10px 0 0 0;
                }
                .campro_inn h2{
                    font-size:20px;
                }
            }

        </style>
        <style>
            .button-3d {
                position: relative;
                overflow: hidden;
                transition: transform 0.3s ease, box-shadow 0.3s ease;
            }
        
           
            
        
            .button-3d:hover {
                transform: scale(1.05);
                box-shadow: 0 10px 30px rgba(0, 0, 0, 0.3);
            }
        
           
        
        </style>
        <style>
            .button-animated-border {
                position: relative;
                overflow: hidden;
                border: 3px solid white; /* Initial border */
                border-radius: 10px; /* Optional: for rounded corners */
                transition: color 0.3s ease; /* Transition for text color */
                animation: border-animation 3s linear infinite; /* Animation */
            }
        
            
        
            @keyframes border-animation {
                0% {
                    border-color: white; /* Transparent at start */
                    transform: scale(0.95); /* Initial scale */
                }
                25% {
                    border-color: yellow; /* Fill with white */
                    transform: scale(1); /* Slightly grow */
                }
                50% {
                    border-color: white; /* Transparent in middle */
                    transform: scale(0.95); /* Back to original scale */
                }
                75% {
                    border-color: yellow; /* Fill with white again */
                    transform: scale(1); /* Slightly grow again */
                }
                100% {
                    border-color: white; /* Transparent at end */
                    transform: scale(0.95); /* Back to original scale */
                }
            }
        
            .button-animated-border:hover {
                color: #fff; /* Change text color on hover */
            }
        </style>

<?php echo $generalsetting->header_code; ?>

    </head>

    <body>
         <?php
            $subtotal = Cart::instance('shopping')->subtotal();
            $subtotal=str_replace(',','',$subtotal);
            $subtotal=str_replace('.00', '',$subtotal);
            $shipping = Session::get('shipping')?Session::get('shipping'):0;
        ?>
        <section style="background-image: radial-gradient(at center center, #139525 28%, #0E320F 79%)">
            <div class="container py-2 py-md-4">
                <div class="row gy-2">
                    <div class="col-md-7">
                        <h4 class="text-light text-center py-2 py-md-4 fw-bolder"><?php echo $campaign_data->top_title_1; ?> <span class="text-warning"> <?php echo $campaign_data->top_title_2; ?></span> </h4>
                    </div>
                     <div class="col-md-5">
                        <div class="countdown-container">
                            <div class="countdown" id="countdown">
                                <div class="row g-1">
                                    <div class="col-3">
                                       <div class="counter-card">
                                            <div id="days"></div>
                                            <span>Days</span>
                                        </div> 
                                    </div>
                                    <div class="col-3">
                                        <div class="counter-card">
                                            <div id="hours"></div>
                                            <span>Hours</span>
                                        </div>                                        
                                    </div>
                                    <div class="col-3">
                                        <div class="counter-card">
                                            <div id="minutes"></div>
                                            <span>Minutes</span>
                                        </div>                                    
                                    </div>
                                    <div class="col-3">
                                        <div class="counter-card">
                                            <div id="seconds"></div>
                                            <span>Seconds</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container py-2 py-md-4">
                <div class="py-2 py-md-4  rounded" style="border:2px dashed green">
                    <h2 class="animated-heading text-center"><?php echo $campaign_data->heading_1; ?></h2>
                </div>
            </div>
        </section>
        <section>
            <div class="container py-2 py-md-4">
                <div class="row gy-2">
                    <?php if($campaign_data->image_one): ?>
                    <div class="col-sm-6">
                        <img class="img-fluid shadow" src="<?php echo e(asset($campaign_data->image_one)); ?>" >
                    </div>
                    <?php endif; ?>
                    <?php if($campaign_data->image_two): ?>
                    <div class="col-sm-6">
                        <img class="img-fluid shadow" src="<?php echo e(asset($campaign_data->image_two)); ?>" >
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section>
            <div class="container py-2 py-md-4">
                <div class="row gy-2">
                    <?php if($campaign_data->feature_1): ?>
                    <div class="col-sm-6">
                       <div class="py-2 py-md-4  rounded" style="border:1px dashed green">
                            <h2 class="text-center"><?php echo $campaign_data->feature_1; ?></h2>
                        </div>
                    </div>
                    <?php endif; ?>
                    <?php if($campaign_data->feature_1): ?>
                    <div class="col-sm-6">
                       <div class="py-2 py-md-4  rounded" style="border:1px dashed green">
                            <h2 class="text-center"><?php echo $campaign_data->feature_2; ?></h2>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
        </section>
        <section>
            <div class="container py-2">
                <div class="py-2 py-md-4  rounded" style="border:2px dashed green">
                    <h2 class="animated-heading text-center"><?php echo $campaign_data->heading_2; ?></h2>
                </div>
            </div>
        </section>
        <section>
            <div class="container py-2 ">
                <div class="py-2 py-md-4  rounded" style="border:2px dashed green">
                    <h2 class="animated-heading text-center"><?php echo $campaign_data->heading_3; ?></h2>
                </div>
            </div>
        </section>
        
        <?php if($campaign_data->video!=null): ?>
        <section class="camp_video_sec">
            <div class="container">
            
                <div class="row justify-content-center gy-2 gy-md-4">
                    <div class="col-md-8">
                        <h2 class="p-2 py-md-3 rounded text-center" style="background-color:black;border:green 2px solid;color:white;font-weight:bolder">প্রডাক্টের "ভিডিও দেখুন"</h2>
                    </div>
                    <div class="col-md-8 col-sm-12">
                        <div class="camp_vid rounded" style="border:5px solid red">
                            <iframe width="100%" height="480" 
                            src="https://www.youtube.com/embed/<?php echo e($campaign_data->video); ?>" 
                            title="<?php echo e($campaign_data->banner_title); ?>" Recipe"" frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen=""></iframe>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="ord_btn">
                            <a href="#order_form" class="cam_order_now" id="cam_order_now"> অর্ডার করতে ক্লিক করুন <i class="fa-solid fa-hand-point-right"></i> </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
        
        <section class="py-2 py-md-4" style="background: linear-gradient(to bottom, #FAF4B3, #ECC7CF);">
            <div class="container my-2 my-md-4">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <h2 class="text-center p-2 p-md-4 rounded" style="background-color:#FBEFF7;border:2px dashed #F1ACE7">আমাদের থেকে বিস্তারিত জানতে এই নাম্বারে কল করুন <?php echo e($contact->phone); ?></h2>
                        <div class="row justify-content-center my-2 my-md-4 gy-2">
                            <div class="col-md-6 custom_btn">
                                <div class="shadow-lg">
                                    <a href="tel:<?php echo e($contact->phone); ?>" 
                                    class="btn btn-danger btn-lg d-block py-md-3 fs-2 fw-bolder button-3d button-animated-border" >
                                        <i class="fa-solid fa-phone"></i> আমাদের কল করুন </a>
                                </div>
                                
                            </div>
                            <div class="col-md-6">
                            <div class="shadow-lg">
                                <a href="https://wa.me/<?php echo e($contact->whatsapp); ?>" 
                                class="btn btn-success btn-lg d-block py-md-3 fs-2 text-light fw-bolder button-3d button-animated-border">
                                    <i class="fa-brands fa-whatsapp"></i> হোয়াটসঅ্যাপ  
                                    </a>
                             </div>
                                
                            </div>
                        </div>
                        
                        <h2 class="text-center p-2 p-md-4 rounded" style="background-color:#FBEFF7;border:2px dashed #F1ACE7"><?php echo $campaign_data->heading_4; ?></h2>
                    
                    </div>
                </div>
            </div>
        </section>

        <?php if(optional($campaign_data)->short_description && strlen($campaign_data->short_description) > 15 || 
    optional($campaign_data)->description && strlen($campaign_data->description) > 15): ?>
        <section class="rules_sec">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <h2>বিস্তারিত</h2>
                                <?php echo $campaign_data->short_description; ?>

                                <br>
                                <br>
                                <?php echo $campaign_data->description; ?> 
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="campro_inn">
                            <div class="campro_head">
                                <h2><?php echo e($campaign_data->name); ?></h2>
                            </div>

                            <div class="campro_img_slider owl-carousel">
                                <?php if($campaign_data->image_one): ?>
                               <div class="campro_img_item">
                                   <img src="<?php echo e(asset($campaign_data->image_one)); ?>" alt="">
                               </div> 
                               <?php endif; ?>
                                <?php if($campaign_data->image_two): ?>
                               <div class="campro_img_item">
                                   <img src="<?php echo e(asset($campaign_data->image_two)); ?>" alt="">
                               </div> 
                               <?php endif; ?>
                                <?php if($campaign_data->image_three): ?>
                               <div class="campro_img_item">
                                   <img src="<?php echo e(asset($campaign_data->image_three)); ?>" alt="">
                               </div>
                               <?php endif; ?>
                            </div>
                            <div class="col-sm-12">
                                <div class="ord_btn">
                                    <a href="#order_form" class="cam_order_now" id="cam_order_now"> অর্ডার করতে ক্লিক করুন <i class="fa-solid fa-hand-point-right"></i> </a>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>


        <section>
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="rev_inn">
                            
                            <h2 class="campaign_offer"><?php echo e($campaign_data->review); ?></h2>
                            
                            <div class="review_slider owl-carousel">
                            <?php $__currentLoopData = $campaign_data->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="review_item">
                                <img src="<?php echo e(asset($value->image)); ?>" alt="">
                            </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           </div>
                            <div class="col-sm-12">
                                <div class="ord_btn">
                                    <a href="#order_form" class="cam_order_now" id="cam_order_now"> অর্ডার করতে ক্লিক করুন <i class="fa-solid fa-hand-point-right"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    <section class="form_sec">
        <div class="container">
           <div class="row">
             <div class="col-sm-12">
                <div class="form_inn">
                    <div class="col-sm-12">
                        <div class="row">
                <div class="col-sm-12">
                    <h2 class="campaign_offer">অফারটি সীমিত সময়ের জন্য, তাই অফার শেষ হওয়ার আগেই অর্ডার করুন</h2>
                    <?php if($campaign_data->note): ?>
                    <p class="my-1 text-center">
                        <?php echo $campaign_data->note; ?>

                    </p>
                    <?php endif; ?>
                </div>
                
            </div>
            <div class="row order_by">
                <div class="col-lg-7 cust-order-1">
                    <div class="cart_details">
                        <?php if($products->count()>1): ?>
                        <div class="card mb-2 ">
                          <div class="card-header">
                                <h5 class="potro_font">একটি পণ্য সিলেক্ট করুনণ </h5>
                            </div>  
                             <div class="card-body">
                                <div class="row g-2">
                                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div class="col-md-3 col-6"> <!-- Adjusted column width for smaller cards -->
                                            <div class="border shadow"> <!-- Wrap the card with form-check for better usability -->
                                                <input type="radio" class="form-check-input" name="product" id="product_<?php echo e($product->id); ?>" value="<?php echo e($product->id); ?>" <?php echo e($loop->first ? 'checked' : ''); ?> style="display: none;" onchange="updateCart('<?php echo e($product->id); ?>')">
                                                <label for="product_<?php echo e($product->id); ?>" class="card shadow-sm product-card <?php echo e($loop->first ? 'selected' : ''); ?>" style="cursor: pointer;"> <!-- Add class for styling -->
                                                    <img src="<?php echo e(asset($product->image->image)); ?>" class="card-img-top" alt="<?php echo e($product->name); ?>" style="height: 100px; object-fit: cover;"> <!-- Fixed height and object-fit -->
                                                    <div class="card-body p-1 text-center"> <!-- Centered text for a better layout -->
                                                        <div class="card-title"><?php echo e(Str::limit($product->name, 20)); ?></div>
                                                        <div class="card-text mb-1">৳<?php echo e($product->new_price); ?> <del>৳<?php echo e($product->old_price); ?></del></div>
                                                    </div>
                                                </label>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                             </div>
                        </div>
                        <?php endif; ?>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="potro_font">পণ্যের বিবরণ </h5>
                            </div>
                            <div class="card-body cartlist  table-responsive">
                                <table class="cart_table table table-bordered table-striped text-center mb-0">
                                    <thead>
                                       <tr>
                                          
                                          <th style="width: 40%;">প্রোডাক্ট</th>
                                          <th style="width: 20%;">পরিমাণ</th>
                                          <th style="width: 20%;">মূল্য</th>
                                         </tr>
                                    </thead>
    
                                    <tbody>
                                        <?php $__currentLoopData = Cart::instance('shopping')->content(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <tr>
                                          
                                            <td class="text-left">
                                                 <a style="font-size: 14px;" href="<?php echo e(route('product',$value->options->slug)); ?>"><img src="<?php echo e(asset($value->options->image)); ?>" height="30" width="30"> <?php echo e(Str::limit($value->name,20)); ?></a>
                                                <?php
                                                    $product = App\Models\Product::find($value->id);
                                                ?>
                                             
                                               <?php if($product && ($product->sizes->isNotEmpty() || $product->colors->isNotEmpty())): ?>
                                                <div class="row g-1 mt-2">
                                                    <!-- Size Selector -->
                                                    <?php if($product->sizes->isNotEmpty()): ?>
                                                    <div class="col-6">
                                                        
                                                        <select id="size-selector-<?php echo e($value->rowId); ?>" class="form-select form-select-sm cart-size-selector" data-id="<?php echo e($value->rowId); ?>">
                                                            <option>Select an option</option>
                                                            <?php $__currentLoopData = $product->sizes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $size): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($size->sizeName); ?>" <?php echo e($size->sizeName == $value->options->product_size ? 'selected' : ''); ?>>
                                                                <?php echo e($size->sizeName); ?>

                                                            </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                        <label for="size-selector-<?php echo e($value->rowId); ?>" class="form-label text-muted text-start" style="font-size: 0.875rem;">Size:
                                                        <?php if($value->options->product_size): ?>
                                                          <?php echo e($value->options->product_size); ?>

                                                        <?php endif; ?>
                                                        </label>
                                                    </div>
                                                    <?php endif; ?>
                                                
                                                    <!-- Color Selector -->
                                                    <?php if($product->colors->isNotEmpty()): ?>
                                                    <div class="col-6">
                                                        <select id="color-selector-<?php echo e($value->rowId); ?>" class="form-select form-select-sm cart-color-selector" data-id="<?php echo e($value->rowId); ?>">
                                                            <option>Select an option</option>
                                                            <?php $__currentLoopData = $product->colors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $color): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <option value="<?php echo e($color->colorName); ?>" <?php echo e($color->colorName == $value->options->product_color ? 'selected' : ''); ?>>
                                                                <?php echo e($color->colorName); ?>

                                                            </option>
                                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                        </select>
                                                        <label for="color-selector-<?php echo e($value->rowId); ?>" class="form-label text-muted text-start" style="font-size: 0.875rem;">Color:
                                                        <?php if($value->options->product_color): ?>
                                                           <?php echo e($value->options->product_color); ?>

                                                        <?php endif; ?>
                                                        </label>
                                                    </div>
                                                    <?php endif; ?>
                                                </div>
                                                <?php endif; ?>
                                            </td>
                                            <td width="15%" class="cart_qty">
                                                <div class="qty-cart vcart-qty">
                                                    <div class="quantity">
                                                        <button class="minus cart_decrement"  data-id="<?php echo e($value->rowId); ?>">-</button>
                                                        <input type="text" value="<?php echo e($value->qty); ?>" readonly />
                                                        <button class="plus  cart_increment" data-id="<?php echo e($value->rowId); ?>">+</button>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>৳<?php echo e($value->price*$value->qty); ?></td>
                                        </tr>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </tbody>
                                    <tfoot>
                                         <tr>
                                          <th colspan="2" class="text-end px-4">মোট</th>
                                          <td>
                                           <span id="net_total"><span class="alinur">৳ </span><strong><?php echo e($subtotal); ?></strong></span>
                                          </td>
                                         </tr>
                                         <tr>
                                          <th colspan="2" class="text-end px-4">ডেলিভারি চার্জ</th>
                                          <td>
                                           <span id="cart_shipping_cost"><span class="alinur">৳ </span><strong><?php echo e($shipping); ?></strong></span>
                                          </td>
                                         </tr>
                                         <tr>
                                          <th colspan="2" class="text-end px-4">সর্বমোট</th>
                                          <td>
                                           <span id="grand_total"><span class="alinur">৳ </span><strong><?php echo e($subtotal+$shipping); ?></strong></span>
                                          </td>
                                         </tr>
                                        </tfoot>
                                </table>
    
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 cus-order-2">
                    <div class="checkout-shipping" id="order_form">
                        <form action="<?php echo e(route('customer.ordersave')); ?>" method="POST" data-parsley-validate="">
                        <?php echo csrf_field(); ?>
                        <div class="card">
                            <div class="card-header">
                                <h5 class="potro_font">আপনার ইনফরমেশন দিন  </h5>
                            </div>
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="form-group mb-3">
                                            <label for="name">আপনার নাম লিখুন * </label>
                                            <input type="text" id="name" class="form-control <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="name" value="<?php echo e(old('name')); ?>" placeholder="নাম" required>
                                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <!-- col-end -->
                                    <div class="col-sm-12">
                                        <div class="form-group mb-3">
                                            <label for="phone">আপনার মোবাইল লিখুন *</label>
                                            <input type="number" minlength="11" id="number" maxlength="11" pattern="0[0-9]+" title="please enter number only and 0 must first character" title="Please enter an 11-digit number." id="phone" class="form-control <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="phone" value="<?php echo e(old('phone')); ?>" placeholder="+৮৮ বাদে ১১ সংখ্যা "  required>
                                            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <!-- col-end -->
                                    <div class="col-sm-12">
                                        <div class="form-group mb-3">
                                            <label for="address">আপনার ঠিকানা লিখুন   *</label>
                                            <input type="address" id="address" class="form-control <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" placeholder="জেলা, থানা, গ্রাম " name="address" value="<?php echo e(old('address')); ?>"  required>
                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group mb-3">
                                            <label for="area">আপনার এরিয়া সিলেক্ট করুন  *</label>
                                            <select type="area" id="area" class="form-control <?php $__errorArgs = ['area'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> is-invalid <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>" name="area"   required>
                                                <?php $__currentLoopData = $shippingcharge; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$value): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <option value="<?php echo e($value->id); ?>"><?php echo e($value->name); ?></option>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </select>
                                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <span class="invalid-feedback" role="alert">
                                                    <strong><?php echo e($message); ?></strong>
                                                </span>
                                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                        </div>
                                    </div>
                                    <!-- col-end -->
                                    <div class="col-sm-12">
                                        <div class="form-group">
                                            <button class="order_place" type="submit">অর্ডার কন্ফার্ম করুন </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- card end -->
                    </form>
                    </div>
                    <?php if($campaign_data->billing_details): ?>
                    <p class="my-1 text-center">
                        <?php echo $campaign_data->billing_details; ?>

                    </p>
                    <?php endif; ?>
                </div>
                <!-- col end -->
                
            <!-- col end -->
            </div>
                    </div>
                </div>

             </div>
            </div>
        </div>
    </section>

        <script src="<?php echo e(asset('public/frontEnd/campaign/js')); ?>/jquery-2.1.4.min.js"></script>
        <script src="<?php echo e(asset('public/frontEnd/campaign/js')); ?>/all.js"></script>
        <script src="<?php echo e(asset('public/frontEnd/campaign/js')); ?>/bootstrap.min.js"></script>
        <script src="<?php echo e(asset('public/frontEnd/campaign/js')); ?>/owl.carousel.min.js"></script>
        <script src="<?php echo e(asset('public/frontEnd/campaign/js')); ?>/select2.min.js"></script>
        <script src="<?php echo e(asset('public/frontEnd/campaign/js')); ?>/script.js"></script>
        <!-- bootstrap js -->
        <script>
            $(document).ready(function () {
                $(".owl-carousel").owlCarousel({
                    margin: 15,
                    loop: true,
                    dots: false,
                    autoplay: true,
                    autoplayTimeout: 6000,
                    autoplayHoverPause: true,
                    items: 1,
                    });
                $('.owl-nav').remove();
            });
        </script>
        <script>
            $(document).ready(function() {
                $('.select2').select2();
            });
        </script>
        <script>
             $("#area").on("change", function () {
                var id = $(this).val();
                $.ajax({
                    type: "GET",
                    data: { id: id },
                    url: "<?php echo e(route('shipping.charge')); ?>",
                    dataType: "html",
                    success: function(response){
                        $('.cartlist').html(response);
                    }
                });
            });
        </script>
           <script>
            $(".cart_remove").on("click", function () {
                var id = $(this).data("id");
                $("#loading").show();
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "<?php echo e(route('cart.remove')); ?>",
                        success: function (data) {
                            if (data) {
                                $(".cartlist").html(data);
                                $("#loading").hide();
                                return cart_count() + mobile_cart() + cart_summary();
                            }
                        },
                    });
                }
            });
            $(".cart_increment").on("click", function () {
                var id = $(this).data("id");
                $("#loading").show();
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "<?php echo e(route('cart.increment')); ?>",
                        success: function (data) {
                            if (data) {
                                $(".cartlist").html(data);
                                $("#loading").hide();
                                return cart_count() + mobile_cart();
                            }
                        },
                    });
                }
            });

            $(".cart_decrement").on("click", function () {
                var id = $(this).data("id");
                $("#loading").show();
                if (id) {
                    $.ajax({
                        type: "GET",
                        data: { id: id },
                        url: "<?php echo e(route('cart.decrement')); ?>",
                        success: function (data) {
                            if (data) {
                                $(".cartlist").html(data);
                                $("#loading").hide();
                                return cart_count() + mobile_cart();
                            }
                        },
                    });
                }
            });

        </script>
        <script>
            $('.review_slider').owlCarousel({   
                dots: false,
                arrow: false,
                autoplay: true,
                loop: true,
                margin: 10,
                smartSpeed: 1000,
                mouseDrag: true,
                touchDrag: true,
                items: 6,
                responsiveClass: true,
                responsive: {
                    300: {
                        items: 1,
                    },
                    480: {
                        items: 2,
                    },
                    768: {
                        items: 5,
                    },
                    1170: {
                        items: 5,
                    },
                }
            });
        </script>

        <script>
            $('.campro_img_slider').owlCarousel({   
                dots: false,
                arrow: false,
                autoplay: true,
                loop: true,
                margin: 10,
                smartSpeed: 1000,
                mouseDrag: true,
                touchDrag: true,
                items: 3,
                responsiveClass: true,
                responsive: {
                    300: {
                        items: 1,
                    },
                    480: {
                        items: 2,
                    },
                    768: {
                        items: 3,
                    },
                    1170: {
                        items: 3,
                    },
                }
            });
        </script>
        <script>
            // Update the cart and highlight the selected card
            function updateCart(productId) {
                // Remove 'selected' class from all product cards
                const productCards = document.querySelectorAll('.product-card');
                productCards.forEach(card => card.classList.remove('selected'));
        
                // Add 'selected' class to the currently selected card
                const selectedCard = document.getElementById(`product_${productId}`).nextElementSibling; // Get the label associated with the radio input
                selectedCard.classList.add('selected');
                
                $("#loading").show();
                if (productId) {
                    $.ajax({
                        type: "GET",
                        data: { id: productId },
                        url: "<?php echo e(route('cart.changeProduct')); ?>",
                        success: function (data) {
                            if (data) {
                                
                                $(".cartlist").html(data);
                                $("#loading").hide();
                                
                            }
                        },
                    });
                }
        
                // Make an API call to update the cart with the selected product
 
            }
        
            // Automatically highlight the first card on page load
            document.addEventListener('DOMContentLoaded', function() {
                const firstCard = document.querySelector('.product-card');
                firstCard.classList.add('selected');
            });
        </script>
        <script>
            // Set the deadline from the campaign data
            const deadline = new Date("<?php echo e($campaign_data->deadline); ?>").getTime();
        
            // Update the countdown every 1 second
            const x = setInterval(function() {
                // Get current date and time
                const now = new Date().getTime();
        
                // Calculate the distance between now and the deadline
                const distance = deadline - now;
        
                // Time calculations for days, hours, minutes and seconds
                const days = Math.floor(distance / (1000 * 60 * 60 * 24));
                const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                const seconds = Math.floor((distance % (1000 * 60)) / 1000);
        
                // Display the result in the respective elements
                document.getElementById("days").innerHTML = days;
                document.getElementById("hours").innerHTML = hours;
                document.getElementById("minutes").innerHTML = minutes;
                document.getElementById("seconds").innerHTML = seconds;
        
                // If the countdown is over, write some text
                if (distance < 0) {
                    clearInterval(x);
                    document.getElementById("countdown").innerHTML = "EXPIRED";
                }
            }, 1000);
               // Event listener for size selector change
            $('.cart-size-selector').on('change', function() {
                var rowId = $(this).data('id'); // Get the row ID
                var selectedSize = $(this).val(); // Get the selected size
            
                if (rowId) {
                    $.ajax({
                        type: "GET", // Change to GET if your route accepts GET requests
                        data: {
                            'id': rowId,
                            'product_size': selectedSize // New size to update
                        },
                        url: "<?php echo e(route('cart.update')); ?>", // Use the same route for updating size
                        success: function(data) {
                            if (data) {
                                $(".cartlist").html(data); // Update the cart list UI with new data
                                return cart_count(); // Update the cart count
                            }
                        },
                        error: function() {
                            alert('An error occurred while updating the size. Please try again.');
                        }
                    });
                }
            });
            
            
            // Event listener for color selector change
            $('.cart-color-selector').on('change', function() {
                var rowId = $(this).data('id'); // Get the row ID
                var selectedColor = $(this).val(); // Get the selected color
            
                if (rowId) {
                    $.ajax({
                        type: "GET", // Change to GET if your route accepts GET requests
                        data: {
                            'id': rowId,
                            'product_color': selectedColor // New size to update
                        },
                        url: "<?php echo e(route('cart.update')); ?>", // Use the same route for updating size
                        success: function(data) {
                            if (data) {
                                $(".cartlist").html(data); // Update the cart list UI with new data
                                return cart_count(); // Update the cart count
                            }
                        },
                        error: function() {
                            alert('An error occurred while updating the size. Please try again.');
                        }
                    });
                }
            });
        </script>
        <script>
            window.dataLayer = window.dataLayer || [];
            dataLayer.push({
                'event': 'landingPageView',
                'url': '<?php echo e(request()->fullUrl()); ?>'  // Full product URL
            });
        </script>
    </body>
</html>
<?php /**PATH /home/softitbd/fcom4/resources/views/frontEnd/layouts/pages/campaign/campaign.blade.php ENDPATH**/ ?>