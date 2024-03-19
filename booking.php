<?php
// Template name: All_home
get_header();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <link href="https://www.insightindia.com/mcss/icon-font.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  
  <style>

.carousel-fade .carousel-item {

 opacity: 0;

 transition-duration: .6s;

 transition-property: opacity;

}



.carousel-fade  .carousel-item.active,

.carousel-fade  .carousel-item-next.carousel-item-left,

.carousel-fade  .carousel-item-prev.carousel-item-right {

  opacity: 1;

}



.carousel-fade .active.carousel-item-left,

.carousel-fade  .active.carousel-item-right {

 opacity: 0;

}



.carousel-fade  .carousel-item-next,

.carousel-fade .carousel-item-prev,

.carousel-fade .carousel-item.active,

.carousel-fade .active.carousel-item-left,

.carousel-fade  .active.carousel-item-prev {

 transform: translateX(0);

 transform: translate3d(0, 0, 0);

}

.slider_main_text h3 {

    text-align: center;

    font-size: 24px;

    font-weight: 500;

    padding-top: 15px;

    margin-bottom: 0;

    padding-bottom: 15px;

}

.slider_main_text p {

    font-size: 16px;

    font-weight: 400;

    text-align: center;

    margin-bottom: 0;

    padding-bottom: 18px;

}

.slider_area:hover .line {

    width: 100%;

}

.slider_area {

    margin-top: 90px;

    margin-bottom:90px;

    transition: 0.2s;

    box-shadow: 0 0 15px rgba(0,0,0,.2);

    border-radius: 15px;

    position: relative;

}

.slider_area .carousel-item img {

    border-radius: 15px 15px 0 0;

}

.line {

    position: absolute;

    bottom: 0;

    left: 0;

    width: 0;

    height: 10px;

    background: linear-gradient(90deg, #c8a855 0%, #d09051 100%);

    transition: .5s;

    border-radius: 0 0 15px 15px;

}

.slider_area a.carousel-control-next {

    font-size: 46px;

    font-weight: 600;

    color: #fff;

}

.slider_area a.carousel-control-prev {

    font-size: 46px;

    font-weight: 600;

    color: #fff;

}

.slider_area .carousel-control-next, .carousel-control-prev {

    position: absolute;

    top: 0;

    bottom: 0;

    z-index: 1;

    display: flex;

    align-items: center;

    justify-content: center;

    width: 21%;

    padding: 0;

    color: #fff;

    text-align: center;

    background: 0 0;

    border: 0;

    opacity: 1;

    transition: opacity .15s ease;

}

.slider_area .carousel-indicators {

    opacity: 0 !important;

    position: absolute;

    right: 0;

    bottom: 0;

    left: 0;

    z-index: 2;

    display: flex;

    justify-content: center;

    padding: 0;

    margin-right: 15%;

    margin-bottom: 1rem;

    margin-left: 15%;

    list-style: none;

}

.slider_area .carousel-item {

    border-radius: 15px 15px 0 0;

    width: 100%;

    height: auto;

    overflow: hidden;

}

.slider_area .carousel-item img {

    height: 300px;

    object-fit: cover;

    transition: 0.3s;

        position: relative;

}


.slider_area:hover .carousel-item img {

  transform: scale(1.1);

}


.btn_in {

    position: absolute;

    bottom: 6%;

    z-index: 9999;

    left: 5%;

}

.btn_in a {

    color: #ffffffbf;

    text-decoration: none !important;

    background: #c9a655;

    font-size: 17px;

    font-weight: 600;

    display: inline-block;

    padding: 9px 20px;

    border-radius: 100px;

    text-transform: capitalize;

}

  </style>

  <style>

.slick-slider .slick-prev, .slick-slider .slick-next {

    z-index: 100;

    font-size: 2.5em;

    height: 40px;

    width: 10%;

    margin-top: -20px;

    color: #b7b7b7;

    position: absolute;

    top: 50%;

    right: 0;

    text-align: center;

    color: #000;

    opacity: 1 !important;

    transition: opacity 0.25s;

    cursor: pointer;

}

.slick-slider .slick-prev:hover,

.slick-slider .slick-next:hover {

  opacity: 1;

}

.slick-slider .slick-prev {

  left: 0;

}

.slick-slider .slick-next {

  right: 0;

}



#detail .product-images {

  width: 100%;

  margin: 0 auto;

  border: 1px solid #eee;

}

#detail .product-images li,

#detail .product-images figure,

#detail .product-images a,

#detail .product-images img {

  display: block;

  outline: none;

  border: none;

}

#detail .product-images .main-img-slider figure {

  margin: 0 auto;

  padding: 0 2em;

}

#detail .product-images .main-img-slider figure a {

  cursor: pointer;

  cursor: -webkit-zoom-in;

  cursor: -moz-zoom-in;

  cursor: zoom-in;

}

#detail .product-images .main-img-slider figure a img {

  width: 100%;

  max-width: 400px;

  margin: 0 auto;

}

#detail .product-images .thumb-nav {

  margin: 0 auto;

  padding: 20px 10px;

  max-width: 600px;

}

#detail .product-images .thumb-nav.slick-slider .slick-prev,

#detail .product-images .thumb-nav.slick-slider .slick-next {

  font-size: 1.2em;

  height: 20px;

  width: 26px;

  margin-top: -10px;

}

#detail .product-images .thumb-nav.slick-slider .slick-prev {

  margin-left: -30px;

}

#detail .product-images .thumb-nav.slick-slider .slick-next {

  margin-right: -30px;

}

#detail .product-images .thumb-nav li {

  display: block;

  margin: 0 auto;

  cursor: pointer;

}

#detail .product-images .thumb-nav li img {

    display: block;

    width: 100%;

    max-width: 95%;

    margin: 0 auto;

    border: 0px solid transparent;

    -webkit-transition: border-color 0.25s;

    -ms-transition: border-color 0.25s;

    -moz-transition: border-color 0.25s;

    transition: border-color 0.25s;

}

#detail .product-images .thumb-nav li:hover,

#detail .product-images .thumb-nav li:focus {

  border-color: #999;

}

#detail .product-images .thumb-nav li.slick-current img {

  border-color: #d12f81;

}





.zx1{

    width:100%;

}

div#fancybox-container-1 {

    display: none;

}

#detail .product-images .thumb-nav {

    margin: 0 auto;

    padding: 10px 0 !important;

    max-width: 100% !important;

}

.slick-next:before, .slick-prev:before {

    font-size: 86px;

    color: red;

    line-height: 1;

    opacity: 1 !important;

    color:#c8a755a3;

}



#detail .product-images .thumb-nav.slick-slider .slick-prev, #detail .product-images .thumb-nav.slick-slider .slick-next {

    font-size: 1.2em;

    height: 19px;

    width: 15%;

    margin-top: -16px;

}



#detail .product-images .thumb-nav.slick-slider .slick-prev, #detail .product-images .thumb-nav.slick-slider .slick-next {

    font-size: 1.2em;

    height: 19px;

    display: none !important;

    width: 35%;

    margin-top: 0;

}

#detail .product-images {

    border: 0px solid #eee0 !important;

}

@media only screen and (max-width: 600px) {

.slick-next:before, .slick-prev:before {

    font-size: 35px;

}

.brokerNumber {

    margin-left: 0 !important;

}

.slick-slider .slick-prev, .slick-slider .slick-next {

    width: 18%;

    margin-top: 0;

}

}



.flex_space {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    width: 59%;
}
.slider_divide_space {
    width: 49%;
    display: inline-block;
}














  </style>

</head>
<body>

<div class="container-fluid">
  <div class="main_divide_slider">
  <?php do_shortcode('[mphb_availability_search]'); ?>
    <div class="flex_space">

      

        <?php
        // Query posts of 'custom-property' type
        $customPropertyQuery = new WP_Query(array(
          'post_type' => 'custom-property',
        ));

        // Loop through posts
        while ($customPropertyQuery->have_posts()) : $customPropertyQuery->the_post();
        ?>

          <div class="slider_divide_space">
            <div class="slider_area">
              <div id="carouselExampleIndicators<?php echo get_the_ID(); ?>" class="carousel slide carousel-fade" data-ride="carousel" data-interval="5000">
                <ol class="carousel-indicators">
                  <?php
                  // Retrieve the array of image IDs from the ACF Gallery field
                  $gallery_images = get_field('gallery_images');

                  // Check if the Gallery field has images
                  if ($gallery_images) {
                    foreach ($gallery_images as $index => $image_id) {
                      // Add an indicator for each image
                      echo '<li data-target="#carouselExampleIndicators' . get_the_ID() . '" data-slide-to="' . $index . '" ' . ($index === 0 ? 'class="active"' : '') . '></li>';
                    }
                  }
                  ?>
                </ol>

          <div class="carousel-inner">
            <?php
            // Check if the Gallery field has images
            if ($gallery_images) {
              foreach ($gallery_images as $index => $image_id) {
                // Get the image URL based on the image ID
                $image_url = wp_get_attachment_url($image_id);
                ?>

                <div class="carousel-item <?php echo ($index === 0) ? 'active' : ''; ?>">
                  <img class="d-block w-100" src="<?php echo esc_url($image_id); ?>" alt="Gallery Image">
                  <div class="btn_in"><a href="#"><?php echo esc_html(get_field("gallery_text")); ?></a></div>
                </div>

              <?php
            }
          }
          ?>
        </div>

        <a class="carousel-control-prev" href="#carouselExampleIndicators<?php echo get_the_ID(); ?>" role="button" data-slide="prev">
          <span class="" aria-hidden="true"><i class="fa fa-angle-left" aria-hidden="true"></i></span>
          <span class="sr-only">Previous</span>
        </a>

        <a class="carousel-control-next" href="#carouselExampleIndicators<?php echo get_the_ID(); ?>" role="button" data-slide="next">
          <span class="" aria-hidden="true"><i class="fa fa-angle-right" aria-hidden="true"></i></span>
          <span class="sr-only">Next</span>
        </a>

      </div>

      <div class="slider_main_text">
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <p><?php echo esc_html(get_field("bedroom_size")); ?></p>
        <!-- You can customize the content here based on your needs -->
      </div>

      <div class="line"></div>
    </div>

    </div>

<?php endwhile; ?>

   
</div>
  </div>
  
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.0.1/jquery-migrate.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.3.5/jquery.fancybox.min.js"></script>

</body>
</html>

<?php
get_footer();
?>



  

