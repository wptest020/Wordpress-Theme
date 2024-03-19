<?php 
//Template Name: About us
get_header();?>
<section class="bg-vh-about" style="background-image: url('<?php the_field('image_1');?>');">
    <div class="container">
       <div class="row justify-content-center text-center">
          <div class="col-md-10">
             <div class="about-main">
                <h2><?php the_title();?></h2>
             </div>
          </div>
       </div>
    </div>
 </section>
      
<section class="about-vh-inner">
   <div class="container">
      <div class="row justify-content-center text-center">
          <div class="col-md-10">
            <!--  <h2 class="dos"><?php //the_title();?></h2> -->
             <div class="about-vh-inner1">
                <?php the_field('d1');?>
             </div>
          </div>
      </div>
   </div>
</section>

<!--<section class="to-do-area" data-scrollax-parent="true">
         <div class="vh-shape-emenetns-1" style="background-image: url(<?php //the_field('b1');?>)" data-scrollax="properties:{translateY: '340px'}"></div>
<!--         <div class="container">-->
<!--            <div class="vh-section-title-wrapper text-center">-->
<!--               <h2 class="vh-section-title">Our web pages</h2>-->
<!--            </div>-->
<!--            <div class="row justify-content-center">-->
<!--               <div class="col-xl-12 col-lg-12">-->
                 <?php //the_field('editroes1');?>
<!--               </div>-->
<!--            </div>-->
<!--         </div>-->
<!--</section>-->
      <section>
         <div class="container">
            <div class="row justify-content-center text-center">
               <div class="col-md-10">
                   <?php the_field('para_contents');?>
               </div>
            </div>
         </div>
      </section>

      <section class="bg-about">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
               <div class="team-head">
                  <h2>Your Vacationhit Team</h2>
               </div>
            </div>
         </div>
         <div class="row">
                <?php
                        if( have_rows('team') ):
                            while( have_rows('team') ) : the_row();
                                    echo    '<div class="col-md-4">
                                                <div class="team-inner">
                                                    <img src="'.get_sub_field('image').'" class="img-fluid">'
                                                    .get_sub_field('contents').
                                                '</div>
                                            </div>';
                                    echo "\n";
                            endwhile;
                        else :
                        endif;                     
                ?>
            </div>
         </div>
      </section>

      <section class="bg-partner">
         <div class="container">
            <div class="row justify-content-center text-center">
               <div class="partner-head">
                  <h2><?php the_field('p1');?></h2>
               </div>
            </div>
            <div class="row align-items-center">
             <?php
                        if( have_rows('last_options') ):
                            while( have_rows('last_options') ) : the_row();
                                    echo    '<div class="col-md-6">
                                                <div class="partner">
                                                    <img src="'.get_sub_field('logos').'" class="img-fluid">
                                                </div>
                                            </div>';
                                    //echo "\n";
                            endwhile;
                        else :
                        endif;                     
                ?>
            </div>
         </div>
      </section>
<?php get_footer();?>