
<?php  
//Template Name: Activate 
get_header();
$imageurl  = get_the_post_thumbnail_url(get_the_ID());
?>
<style type="text/css">
	form{
    	padding-left: 30px;
	}
	
	
</style>
<section class="bg-vh-about" style="background-image: url('<?php print $imageurl;?>');">
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

<section class="cape-coral-main cape-subpages-main">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <div class="publications" id="repeater-container">
    <?php
     $count = 0;
    if (have_rows('looping')) :
        while (have_rows('looping')) : the_row();
            $image = get_sub_field('images');
            $title = get_sub_field('title');
            $website = get_sub_field('link');
            $excerpt = get_sub_field('contents');
    ?>
            <div class="cape-subpages-main-inner repeater-item" data-index="<?= $count; ?>">
                <div class="cape-sideimg">
                    <a href="#" data-toggle="modal" data-target="#imageModal<?= get_row_index(); ?>">
                        <img src="<?= $image; ?>" class="img-fluid">
                    </a>
                </div>
                <div class="cape-side-content">
                    <h3><?= $title; ?></h3>
                    <a href="<?= $website; ?>" target="_blank">Visit website</a>
                    <p><?= $excerpt; ?></p>
                </div>
            </div>

           
    <?php
    $count++;
        endwhile;
    endif;
    ?>
</div>

                 <div class="btn-cape">
        <a id="load-more" href="javascript:void(0);" data-count="<?= $count; ?>">Load More</a>
    </div>
            </div>
            
            <div class="col-md-4">
                  <div class="view-rentals-block">
                    <a href="#" class="view-rentals-block-item">
                        <div class="view-rentals-img">
                            <img src="<?= get_field('image1');?>" alt="" class="img-fluid">
                        </div>
                        <div class="view-rentals-txt">
                            <?= get_field('content');?>
                        </div>
                    </a>
                </div>
                <div class="contact-side">
                   <h3>Contact Us</h3>
                   <?php  echo do_shortcode('[contact-form-7 id="161" title="Form1"]');?>
                </div>
            </div>
            
        </div>
    </div>
</section>



         
<?php get_footer();?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script>var ajaxurl= '<?php echo admin_url( 'admin-ajax.php' ) ?>'</script>
<script>
             document.addEventListener("DOMContentLoaded", function () {
        var container = document.getElementById('repeater-container');
        var loadMoreButton = document.getElementById('load-more');
        var count = parseInt(loadMoreButton.getAttribute('data-count'));

        // Initial display of only 4 items
        for (var i = 4; i < count; i++) {
            container.children[i].style.display = 'none';
        }

        // Load more functionality
        loadMoreButton.addEventListener('click', function () {
            var hiddenItems = Array.from(container.children).filter(function (item) {
                return item.style.display === 'none';
            });

            if (hiddenItems.length > 0) {
                hiddenItems[0].style.display = 'inline-flex';
            } else {
                loadMoreButton.style.display = 'none'; // Hide the button when all items are displayed
            }
        });
    });
</script>
// <script type="text/javascript">
//   let currentPage = 1;
//         jQuery('#load-more').on('click', function($) {
//           currentPage++; 
//           jQuery.ajax({
//             type: 'POST',
//             url: ajaxurl,
//             dataType: 'html',
//             data: {
//               action: 'vacationhit_load_more',
//               paged: currentPage,
//             },
//             success: function (res) {
//               jQuery('.publications').append(res);
//             }
//           });
//         });
// </script>
