<?php
// Template name: All_home
get_header();
?>
<?php
// echo do_shortcode('[wp_multi_store_locator_map id=664]');
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
.row.data_class.align-items-center {
    /* padding: 49px; */
    padding: 100px 0 0 0;
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
    
    <div class="container">
            <div class="row data_class align-items-center">
               <div class="col-lg-12">
                  <div class="t">
                     <!--<h1 class="wow fade-in-bottom text-white" data-wow-duration="1.5s" data-wow-delay="0.5s">Welcome To Paradise</h1>-->
                     <!--<div class="vh-banner-searchbox standard-search wow fade-in-bottom" data-wow-duration="1s" data-wow-delay="1s">-->
                        <div class="tab-content" id="myTabContent">
                           <div class="tab-pane show active" id="vh-item_a_first" role="tabpanel" aria-labelledby="vh-item_a_first">
                              <!--<form method="post" action="#">-->
                                 <div class="vh-input-group col-vh-in-3">
                                    <!-- <div class="single-input col-vh-in-3"> <input type="date" class="form-control " placeholder="Arrival"> </div> -->
                                    <p><input type="date" id="datepicker" name="arrival_date"  placeholder="Arrival date"></p>
                                    <p><input type="date" id="datepicker1" name="departure_date"  placeholder="Departure date"></p>
                                    <!-- <div class="single-input col-vh-in-3"> <input type="date" class="form-control " placeholder="Departure date"> </div> -->
                                    <div class="single-input col-vh-in-3">
                                       <select type="text" id="flexible_select" class="form-control" name="flexible_dates" placeholder="Flexible Dates?">
                                          <option value="Flexible Dates?">Flexible by</option>
                                          <option value=" 1 day"> 1 day</option>
                                          <option value=" 2 day"> 2 day</option>
                                          <option value=" 3 day"> 3 day</option>
                                       </select>
                                    </div>
                                    
                                     <?php
                                        global $wpdb;
                                        $table_name = $wpdb->prefix;
                                        $user = $wpdb->get_results("SELECT * FROM ak_vh_postmeta WHERE meta_key='bedroom'");
                                        // print_r($user);
                                     ?>
                                       <div class="single-input col-vh-in-3">
                                            <select type="text" class="form-control" id="bedroom_select" placeholder="Bedrooms" name="bedrooms">
                                                <option value="Number of Guests">Bedrooms</option>
                                        
                                                <?php
                                                foreach ($user as $row) {
                                                    echo '<option value="' . esc_attr($row->meta_value) . '">' . esc_html($row->meta_value) . '</option>';
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="single-input"> <button type="submit" name="submit" class="btn_srch" id="searchBtn"><i class="icofont-search"></i></button> </div>
                                    </div>
                                    
                                 </div>
                              <!--</form>-->
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <?php
// if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
//     // Check if the form is submitted and the submit button is clicked

//     // Retrieve and sanitize the form data
//     $arrival_date = isset($_POST['arrival_date']) ? sanitize_text_field($_POST['arrival_date']) : '';
//     $departure_date = isset($_POST['departure_date']) ? sanitize_text_field($_POST['departure_date']) : '';
//     $flexible_dates = isset($_POST['flexible_dates']) ? sanitize_text_field($_POST['flexible_dates']) : '';
//     $bedrooms = isset($_POST['bedrooms']) ? sanitize_text_field($_POST['bedrooms']) : '';

    // Process or display the form data as needed
    // For example, you can save the data to the database, perform calculations, or display a confirmation message.
    // echo $arrival_date;
    // echo 'Arrival Date: ' . esc_html($arrival_date) . '<br>';
    // echo 'Departure Date: ' . esc_html($departure_date) . '<br>';
    // echo 'Flexible Dates: ' . esc_html($flexible_dates) . '<br>';
    // echo 'Bedrooms: ' . esc_html($bedrooms) . '<br>';
// }
?>
         
         
         
         

<div class="container-fluid">
  <div class="main_divide_slider">
    <div class="flex_space">

        <?php
        
        
        // Query posts of 'custom-property' type
        $customPropertyQuery = new WP_Query(array(
          'post_type' => 'custom-property',
          'status'=> 'publish',
    //       'meta_query' => array(
    //     array(
    //         'key' => 'bedroom_size', // Change 'bedroom_size' to your actual meta key
    //         'value' => 2,             // Change 2 to the minimum bedroom size you want
    //         'compare' => '>=',        // Comparison operator
    //         'type' => 'NUMERIC',      // Value type
    //     ),
    // ),
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
                  <a href="<?php echo get_permalink(); ?>"><img class="d-block w-100" src="<?php echo esc_url($image_id); ?>" alt="Gallery Image"></a>
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

<script>
        $(document).ready(function () {
            $("#searchBtn").click(function () {
                // Get the search term from the input field
                var arival = $("#datepicker").val();
                var departure = $("#datepicker1").val();
                var flexible = $("#flexible_select").val();
                var bedroom = $("#bedroom_select").val();
                
                console.log(arival);
                console.log(departure);
                console.log(flexible);
                console.log(bedroom);


                // Perform an AJAX request
                // $.ajax({
                    // type: "GET",
                    // url: "your_search_endpoint.php", // Replace with your server-side search endpoint
                    // data: { term: searchTerm }, // Pass the search term as a parameter
                    // success: function (response) {
                    //     // Display the result in the resultContainer
                    //     $("#resultContainer").html(response);
                    // },
                    // error: function (error) {
                    //     // Handle the error response
                    //     console.error(error);
                    // }
                // });
            });
        });
    </script>

</body>
</html>

<?php
get_footer();
?>
