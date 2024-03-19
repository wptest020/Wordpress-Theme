<?php 
//Template Name:FAQ
$pageId = get_the_ID();
get_header();?>
<style>
    .wpcf7{padding: 20px;}
    .classmate{
        margin-bottom: 32px;
        margin-top: 50px;
    }
p.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    text-align: left;
    border: none;
    outline: none;
    transition: 0.4s;
    margin-bottom:10px;
}

/* Add a background color to the accordion if it is clicked on (add the .active class with JS), and when you move the mouse over it (hover) */
p.accordion.active, p.accordion:hover {
    background-color: #ddd;
}

/* Unicode character for "plus" sign (+) */
p.accordion:after {
    content: '\2795'; 
    font-size: 13px;
    color: #777;
    float: right;
    margin-left: 5px;
}

/* Unicode character for "minus" sign (-) */
p.accordion.active:after {
    content: "\2796"; 
}

/* Style the element that is used for the panel class */

div.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: 0.4s ease-in-out;
    opacity: 0;
    margin-bottom:10px;
}

div.panel.show {
    opacity: 1;
    max-height: 500px; /* Whatever you like, as long as its more than the height of the content (on all screen sizes) */
}
</style>
<section class="bg-vh-about" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/new1.jpg');">
    <div class="container">
       <div class="row justify-content-center text-center">
          <div class="col-md-10">
             <div class="about-main">
                <h2>Faqs</h2>
             </div>
          </div>
       </div>
    </div>
 </section>
      
<section class="about-vh-inner">
   <div class="container">
      <div class="row">
          <div class="col-md-7">
            <h2 style="margin-bottom:32px;"><?php echo get_post_meta($pageId,'r_review_title',true);?></h2>
             <div class="faq-container">
                <?php
                        if( have_rows('faq__sec')):
                            while( have_rows('faq__sec')) : the_row();
                                    if(get_sub_field('set_as_active')=='YES'):
                                        echo '<div class="faq active">';
                                    endif;
                                    ?>
                                    <div class="faq">
                                        <h3 class="faq-title f">
                                            <?php echo get_sub_field('faq__title');?>
                                        </h3>
                                        <?php echo get_sub_field('answer');?>
                                        <button class="faq-toggle">
                                               <i class="fas fa-angle-down"></i>
                                        </button>
                                    </div>
                                    <?php
                                     if(get_sub_field('set_as_active')=='YES'):
                                        echo '</div>';
                                    endif;
                                    echo "\n";
                            endwhile;
                        else :
                        endif;                    
                ?>
</div>
          </div>
          <div class="col-md-5">
            <div class="main-conttact">
               
   
            <div class="contact-heading">
               <h2><?php echo get_post_meta($pageId,'contact_form_title',true);?></h2>
            </div>
             <div class="vh-section-title-wrapper">
                     <!-- /.section-title-spacer -->
                    <?php  echo do_shortcode('[contact-form-7 id="161" title="Form1"]');?>
                  </div>
          </div>
      </div>
               </div>

   </div>
   </div>
</section>

<!--NEW DATA-->
<section class="about-vh-inner">
    <div class="container">
      <div class="row">
            <div class="col-md-7">
                <h2 class="classmate"><?php echo get_post_meta($pageId,'g_review_title',true);?></h2>
                     <div class="faq-container">
                        <?php   $itaters=0;
                                if( have_rows('g_review_loop')):
                                    while( have_rows('g_review_loop')) : the_row();$itaters++;
                                            if(get_sub_field('set_as_active')=='YES'):
                                                echo '<div class="faq active">';
                                            endif;
                                            ?>
                                            <div class="gfaq">
                                                
                                                <a data-toggle="collapse" href="#collapseExample<?php echo $itaters;?>" role="button" aria-expanded="false" aria-controls="collapseExample<?php echo $itaters;?>" class="collapsed" style="color:#cf9151!important">
                                                    <h3 class="gfaq-title gf accordion ">
                                                        <?php echo get_sub_field('quetions');?>
                                                    </h3>
                                                    <button class="faq-toggle"> 
                                                        <i class="fa fa-angle-down"></i> 
                                                    </button>
                                                </a>
                                                <div class"panel"> 
                                                    <div id="collapseExample<?php echo $itaters;?>" class="collapse">
                                                            <?php echo get_sub_field('answer');?>
                                                    </div>
                                                </div>

                                                <!--<button class="faq-toggle">-->
                                                <!--       <i class="fas fa-angle-down"></i>-->
                                                <!--</button>-->
                                            </div>
                                            <?php                                  
                                             if(get_sub_field('set_as_active')=='YES'):
                                                echo '</div>';
                                            endif;
                                            echo "\n";
                                    endwhile;
                                else :
                                endif;                    
                        ?>
                    </div>
            </div>
            <div class="col-md-5"></div>
        </div>
    </div>
</section>
<!--END NEW DATA-->
<section class="gallery">
         <div class="container-fluid p-0">
            <div class="vh-section-title-wrapper text-center">
               <h2 class="vh-section-title"> Featured Rental Properties </h2>
            </div>
            <div class="gallery-slider owl-carousel owl-theme">
               <div class="item">
                  <div class="transition product-layout">
                     <div class="product-item-container ">
                        <div class="item-block so-quickview">
                           <div class="image"><a href="#" target="_self"><img src="https://static.wixstatic.com/media/a4ed56_1ba218a50c2744edb01c587103ecab53~mv2.jpg/v1/fill/w_400,h_400,al_c,lg_1,q_80,enc_auto/family%20vacation%20rental%20florida%20palazzo%20palms%20cape%20coral%20.jpg"></a></div>
                           <div
                              class="item-content">
                              <h3><a href="#">Vacation Cape Coral</a></h3>
                              <div class="reviews-content"></div>
                              <ul>
                                 <li><i class="fa fa-bed" aria-hidden="true"></i> Bedrooms (4)</li>
                                 <li><i class="fa fa-bath" aria-hidden="true"></i> Bathrooms (3)</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="transition product-layout">
                     <div class="product-item-container ">
                        <div class="item-block so-quickview">
                           <div class="image"><a href="#" target="_self"><img src="https://loansolutionsnow.com/wp-content/uploads/genesis-extender/plugin/images/getting-around-in-Cape-Coral-FL.jpg"></a></div>
                           <div class="item-content">
                              <h3><a href="#">Dog Friendly Cape Coral</a></h3>
                              <div class="reviews-content"></div>
                              <ul>
                                 <li><i class="fa fa-bed" aria-hidden="true"></i> Bedrooms (4)</li>
                                 <li><i class="fa fa-bath" aria-hidden="true"></i> Bathrooms (3)</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="transition product-layout">
                     <div class="product-item-container ">
                        <div class="item-block so-quickview">
                           <div class="image"><a href="#" target="_self"><img src="https://d3au0sjxgpdyfv.cloudfront.net/s-1998931-q8zxlz3invafwwfl-t.jpeg"></a></div>
                           <div class="item-content">
                              <h3><a href="#">Dog Friendly Cape Coral</a></h3>
                              <div class="reviews-content"></div>
                              <ul>
                                 <li><i class="fa fa-bed" aria-hidden="true"></i> Bedrooms (4)</li>
                                 <li><i class="fa fa-bath" aria-hidden="true"></i> Bathrooms (3)</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="item">
                  <div class="transition product-layout">
                     <div class="product-item-container ">
                        <div class="item-block so-quickview">
                           <div class="image"><a href="#" target="_self"><img src="https://target.scene7.com/is/image/Target/GUEST_f76c3419-6a95-4c29-a862-c479efc04eb7"></a></div>
                           <div class="item-content">
                              <h3><a href="#">House Tuscany</a></h3>
                              <div class="reviews-content"></div>
                              <ul>
                                 <li><i class="fa fa-bed" aria-hidden="true"></i> Bedrooms (4)</li>
                                 <li><i class="fa fa-bath" aria-hidden="true"></i> Bathrooms (3)</li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </section>
<?php get_footer();?>