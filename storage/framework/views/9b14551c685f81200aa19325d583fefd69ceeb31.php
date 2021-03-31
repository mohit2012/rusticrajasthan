<?php $__env->startSection('content'); ?>
       <!-- End Header Content -->

       <!-- NOTIFICATION CONTENT -->
         <?php echo $__env->make('web.common.notifications', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <!-- END NOTIFICATION CONTENT -->

       <!-- Carousel Content -->
       <?php  echo $final_theme['carousel']; ?>
       <!-- Fixed Carousel Content -->

      <!-- Banners Content -->
      <!-- Products content -->

      <?php

      $product_section_orders = json_decode($final_theme['product_section_order'], true);
      foreach ($product_section_orders as $product_section_order){
          if($product_section_order['status'] == 1)
          {
            //echo $product_section_order['file_name'].'<br>';
            $r =   'web.product-sections.' . $product_section_order['file_name'];
      
      ?>
            <?php echo $__env->make($r, \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      
      <?php

          }
       }
      
      ?>
<?php echo $__env->make('web.common.scripts.addToCompare', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php echo $__env->make('web.common.scripts.Like', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('web.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\xampp\htdocs\rustic rajasthan masale\adminpanel\resources\views/web/index.blade.php ENDPATH**/ ?>