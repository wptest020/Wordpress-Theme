<?php 
//Template Name:Contact Us
get_header();?>
<style>
    .wpcf7-form{
        background: rgb(255 255 255 / 93%);
        padding: 30px;
        border-radius: 15px; 
    }
</style>
<!-- !=============Banner Area Start===========! -->
 
      <section class="contact-area" style="background: url(<?php echo get_field('footer_image','option');?>);">
         <div class="container">
            <div class="row align-items-center">
               <div class="col-lg-5">
                  <div class="inner-contact-vh1">
                     <div class="vh-inner-conatct">
                        <i class="icofont-email"></i>
                        <div class="vh-inner-contact1">
                           <h2>Email</h2>
                           <p><?php echo get_field('email','option');?></p>
                        </div>
                     </div>
                     <div class="vh-inner-conatct">
                        <i class="icofont-phone"></i>
                        <div class="vh-inner-contact1">
                           <h2>Phone</h2>
                           <p><?php echo get_field('phone_number','option');?></p>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="col-lg-7">
                  <div class="vh-section-title-wrapper">
                     <div class="section-title-spacer"></div>
                     <!-- /.section-title-spacer -->
                        <?php  echo do_shortcode('[contact-form-7 id="161" title="Form1"]');?>

                     <!--<form action="#" class="vh-form vh-line-form">-->
                     <!--   <input type="text" placeholder="Name" class="form-control vh-mb-30">-->
                     <!--   <input type="email" placeholder="Email" class="form-control vh-mb-30">-->
                     <!--   <textarea placeholder="Message" class="form-control vh-mb-30"></textarea>-->
                     <!--   <input type="submit" value="SUBMIT NOW" class="vh-btn vh-gradient2 vh-rounded text-uppercase vh-Bshadow-1">-->
                     <!--</form>-->
                  </div>
               </div>
            </div>
         </div>
         <!-- /.container -->
      </section>
<?php get_footer();?>