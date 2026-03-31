<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package watchin360
 */
get_header();
	if ( have_posts() ) :
		/* Start the Loop */
		while ( have_posts() ) :
			the_post();

			// slider
// 			get_template_part( 'template-parts/rev', 'slider' );

			?>
		  	<!-- simple about -->
		  	        <!-- start banner slider -->
        <section class="p-0 top-space-margin">
            <div class="full-screen  md-h-600px sm-h-500px">
                <?php
                    $video = get_field('banner_video',get_the_ID());

                ?>
                
                
               <video width="100%" height="100vh" poster="<?=get_the_post_thumbnail_url(get_the_ID(), 'full')?>" autoplay muted loop playsinline style="height:100%; object-fit: cover">
                   
                    <source src="<?=wp_get_attachment_url($video['file'])?>" type="video/webm">
                    Your browser does not support the video tag.
                </video> 
                <h1 class="d-none">Digital Marketing Surabaya and Social Media Agency Surabaya<?=$video['h1']?></h1>
                <h3 class="d-none">Creative social media, videography, and photography services in Surabaya, Malang, and Bali. Effective digital marketing at competitive pricing.<?=$video['h3']?></h3>
            </div>
        </section>
        <!-- end banner slider --> 

		  	<?php 
		  		$about = get_field('about');
		  	?>

	    	<section class="bg-dark-gray background-position-center-top overflow-hidden" style="background-image: url('<?=get_template_directory_uri()?>/assets/images/demo-architecture-dotted-pattern.svg')">
	            <div class="container">
	                <div class="row align-items-center mb-5 sm-mb-30px">
	                    <div class="col-lg-6 md-mb-50px sm-mb-40px text-center text-sm-start" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
	                		<style type="text/css">
	                			.img-logo {
	                				width: 180px;
	                			}
 	                		</style>
	                        <?= wp_get_attachment_image($about['logo'], 'full', false, ['class' => 'img-logo']) ?>
	                        <h4 class="text-white fw-600 mt-20px mb-0 w-90 lg-w-100"><?=$about['title']?></h4>
	                    </div>
	                    <?php 
	                    	$detail = $about['detail'];
	                    ?>
	                    <div class="col-lg-6 last-paragraph-no-margin">
	                        <div class="row align-items-center">
	                            <div class="col-xl-6 col-lg-5 col-sm-4 position-relative atropos transform-3d xs-mb-15px text-center text-sm-start text-lg-center" data-anime='{ "translateY": [-15, 0], "scale": [0.8, 1], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
	                                <div class="atropos d-inline-block" data-atropos data-atropos-perspective="500">
	                                    <div class="atropos-scale">
	                                        <div class="atropos-rotate">
	                                            <div class="atropos-inner text-center">
	                                                <div data-atropos-offset="-5" class="position-relative left-0px right-0px top-0px lg-top-0px md-top-0px">
<!-- 	                                                    <span class="fs-180 lg-fs-130 md-fs-150 text-dark-gray alt-font fw-700 position-absolute left-0px w-100 ls-minus-3px"><?=$detail['number']?></span> -->
															<img class="sm-h-100px h-100" src="https://watchin360.com/wp-content/uploads/2024/12/logo.png" alt="Watchin360 Logo"/>
	                                                </div>
	                                                <span class="w-210px h-210px lg-w-150px lg-h-150px md-w-170px md-h-170px sm-w-150px sm-h-150px"></span>
	                                            </div> 
	                                        </div>
	                                    </div>
	                                </div> 
	                            </div>
	                            <div class="col-xl-6 col-lg-7 col-sm-8 text-center text-sm-start" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
	                                <span class="fs-14 text-uppercase ls-1px text-white fw-600 d-block mb-5px"><?=$detail['title']?></span>
	                                <p class="w-90 lg-w-100"><?= $detail['description'] ?></p>
	                            </div>
	                        </div> 
	                    </div>
	                </div>
	                <div class="row row-cols-1 row-cols-lg-3 justify-content-center" data-anime='{ "el": "childs", "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
	                    
	                	<?php foreach ($detail['items'] as $key => $list) :?>
	                    <!-- start features box item -->
	                    <div class="col icon-with-text-style-01 pe-5 md-mb-30px">
	                        <div class="separator-line-1px bg-charcoal-grey w-100 mb-25px d-none d-lg-block"></div>
	                        <div class="feature-box feature-box-left-icon last-paragraph-no-margin"> 
	                            <div class="feature-box-content">
	                                <span class="text-medium-gray fs-18 lh-30 w-80 sm-w-90 d-block"><span class="text-white fw-600"><?=$list['number']?>+</span> <?=$list['description']?></span>
	                            </div>
	                            <div class="feature-box-icon me-0">
	                                <span class="fs-18 mb-0 fw-500 text-base-color">0<?=$key + 1?></span>
	                            </div>
	                        </div>
	                    </div>
	                    <!-- end features box item -->
	                	<?php endforeach; ?>
	                </div>
	            </div> 
	        </section>
	        <!-- simple about --> 

	        <!-- video -->

	        <?php 
	        	$video = get_field('video');
	        ?>

	        <section class="p-0 bg-dark-gray background-position-center-top overflow-hidden" style="background-image: url('<?=get_template_directory_uri()?>/assets/images/demo-architecture-dotted-pattern.svg')">
	            <div class="container-fluid p-0"> 
	                <div class="row g-0 align-items-center h-500px md-h-450px sm-h-auto" data-bottom-top="transform: translate3d(-30px, 0px, 0px);" data-top-bottom="transform: translate3d(-110px, 0px, 0px);">


	                	<?php
	                		 $background =  wp_get_attachment_url($video['image']);
	                	?>

	                    <div class="col-md-6 cover-background h-100 sm-h-400px xs-h-350px" style="background-image: url('<?=$background?>');"> 
	                    </div> 
	                    <div class="col-lg-4 col-md-6 position-relative bg-nero-grey h-100 sm-h-350px sm-pb-8 overflow-hidden"> 
	                        <div class="h-100 d-flex flex-column align-items-center justify-content-center">
	                            <a  href="https://www.youtube.com/watch?v=<?=$video['youtube_id']?>" class="position-relative border border-2 border-color-base-color d-inline-block text-center rounded-circle video-icon-box video-icon-large popup-youtube mb-10px">
	                                <span>
	                                    <span class="video-icon">
	                                        <i class="fa-solid fa-play text-base-color"></i> 
	                                    </span>
	                                </span>
	                            </a>

	                            <?php 
	                            	$quote = splitString($video['title']);
	                            ?>

	                            <h2 class="fs-60 alt-font fw-500 text-center w-50 xl-w-80 ls-minus-2px"><?=$quote[0]?> <span class="text-white"><?=$quote[1]?></span></h2>
	                            <div class="position-absolute bottom-minus-20px left-0px right-0px text-center w-100 fs-140 sm-fs-160 xs-fs-110 ls-minus-3px opacity-1 word-break-normal text-outline text-outline-color-white alt-font" data-bottom-top="transform:scale(1.6, 1.6)" data-top-bottom="transform:scale(1, 1)">watchin360</div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </section>
	        <!-- video -->


	      <!-- services -->
<?php
	$services = get_field('services');
?>
<section class="bg-dark-gray background-position-center-top overflow-hidden" style="background-image: url('<?=get_template_directory_uri()?>/assets/images/demo-architecture-dotted-pattern.svg')">
    <div class="container">
        <div class="row align-items-end mb-6">
            <div class="col-md-6 sm-mb-20px" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <span class="text-base-color fs-12 fw-600 ls-3px text-uppercase mb-5px d-block"><?= $services['subtitle'] ?></span>
                <h4 class="text-white fw-600 mb-0"><?= $services['title'] ?></h4>
            </div>
            <div class="col-md-5 offset-md-1 last-paragraph-no-margin" data-anime='{ "translateX": [-50, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <p class="w-80 xl-w-85 lg-w-100"><?= $services['description'] ?></p>
            </div>
        </div>


        <?php 
        	$service_categories = get_terms([
        		'taxonomy' => 'project-category',
        		'hide_empty' => false,
        	]);
        ?>
		
        <div class="row align-items-center mb-9">
            <div class="col-md-12 position-relative" data-anime='{ "translateX": [150, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
                <div class="outside-box-right-30 sm-outside-box-right-0">
                    <div class="swiper slider-four-slide magic-cursor drag-cursor" data-slider-options='{ "slidesPerView": 2, "spaceBetween": 35, "loop": false, "autoplay": false, "keyboard": { "enabled": true, "onlyInViewport": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-prev-nav" }, "breakpoints": { "1200": { "slidesPerView": 3.3 }, "992": { "slidesPerView": 2.5 }, "768": { "slidesPerView": 2.3 }, "576": { "slidesPerView": 1.5 }, "320": { "slidesPerView": 1 } }, "effect": "slide" }'>
                        <div class="swiper-wrapper">

                        	<?php foreach ($service_categories as $key => $service_item) :?>

                            <!-- start content carousal item --> 
                            <div class="swiper-slide"> 
                                <div class="interactive-banner-style-06">                                    
                                    <div class="interactive-banners-image">
                                    	<?= wp_get_attachment_image(get_field('image', 'project-category_'.$service_item->term_id), 'full', false, ['style'=>'aspect-ratio:3/4; object-fit:cover']) ?>
                                        <div class="overlay-bg bg-gradient-dark-transparent opacity-light"></div>
                                    </div>
                                    <div class="interactive-banners-content p-60px lg-p-30px"> 
                                        <div class="h-100 w-100 last-paragraph-no-margin text-white"> 
                                            <a href="<?=get_term_link($service_item)?>" class="fs-22 d-block mb-10px fw-500 text-white"><?=$service_item->name?></a>
                                            <p class="interactive-banners-content-text w-95 lg-w-100"><?=$service_item->description?></p>
                                        </div> 
                                    </div>
                                    <div class="box-overlay bg-gradient-dark-transparent"></div>
                                </div>
                            </div>
                            <!-- end content carousal item -->

                        	<?php endforeach; ?>
                           
                        </div>
                    </div>
                    
                    <!-- start slider navigation
                    <div class="swiper-button-prev-nav swiper-button-prev slider-navigation-style-07 bg-white box-shadow-large" style="left: -20px;"><i class="bi bi-arrow-left-short icon-extra-large text-dark-gray"></i></div>
                    <div class="swiper-button-next-nav swiper-button-next slider-navigation-style-07 bg-white box-shadow-large" style="right: -20px;"><i class="bi bi-arrow-right-short icon-extra-large text-dark-gray"></i></div>
                    end slider navigation -->
                </div>
            </div>
        </div>
    </div>
</section>
<!-- services -->

	        <!-- clients -->


	        <?php
	        	$clients = get_field('our_clients');

	        ?>

	        <section class="background-position-center-top position-relative" > 
                <div class="align-items-center">
		 	<div class="sm-mb-20px text-center m-auto" style="max-width: 768px;" data-anime='{ "el": "childs", "translateX": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 100, "staggervalue": 150, "easing": "easeOutQuad" }'>
	                        <span class="fs-12 fw-600 ls-3px text-uppercase mb-5px d-block" style="color: #000000;"><?=$clients['subtitle']?></span>
	                        <h4 class=" fw-600 mb-0"><?=$clients['title']?></h4>
                    	</div>
					<div  style="padding: 32px 0;" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>

					<?php  
// 						$url = 'https://igbmedia.com/wp-json/api/v1/clients?taxonomy=ourwork-categories&term=videography-storytelling';
// 						$datas = get_data_from_api($url);
								
						$datas = get_posts([
							'post_type' => 'client',
							'numberposts' => '-1',
							
							
						]);
						$loops = array_chunk($datas, 24);
			
					?>
<div  class="swiper slider-one-slide magic-cursor drag-cursor" data-slider-options='{"pagination": { "el": ".slider-four-slide-pagination-1", "clickable": true }, "slidesPerView": 1, "spaceBetween": 20, "loop": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 1, "spaceBetween": 60 }, "992": { "slidesPerView": 1, "spaceBetween": 40 }, "768": { "slidesPerView": 1, "spaceBetween": 25 }, "576": { "slidesPerView": 1 } }, "effect": "slide" }'>

						<div class="swiper-wrapper mb-sm-5"> 
							<?php foreach($loops as $loop): ?>
							<!-- start review item -->
							<div class="swiper-slide text-center mb-3">
								<div class="row">
									<?php foreach ($loop as $item): ?>
									<div class="col-6 col-md-2">
										<a href="<?=get_permalink($item)?>" target="_blank" >
											
											<?= get_the_post_thumbnail($item, 'full', ['style' => 'aspect-ratio:16/9; object-fit:contain; width:300px; padding:16px']) ?>
											
										</a>
									</div>
									<?php endforeach; ?>
								</div>
							</div>
							<!-- end review item -->
							<?php endforeach; ?>
						
							

						</div>  
						<div class="swiper-pagination slider-four-slide-pagination-1 swiper-pagination-style-2 swiper-pagination-clickable swiper-pagination-bullets bottom-0" ></div>
					</div>
					</div>
                </div>
                 <div class="position-absolute bottom-minus-50px lg-bottom-minus-40px md-bottom-minus-25px sm-bottom-minus-20px xs-bottom-minus-10px left-0px right-0px text-center w-100 fs-200 lg-fs-160 md-fs-140 sm-fs-120 xs-fs-90 fw-600 ls-minus-4px" style="color: #f6f6f6;">watchin360</div>
	        </section>
	        <!-- clients -->

	        <!-- best client -->

	        <?php 
	        	$latest = get_field('latest_projects');
				get_template_part( 'template-parts/rev', 'slider' );
	        ?>

	        <section class="bg-nero-grey overlap-height background-position-center-top position-relative" style="z-index: 1; background-image: url('<?=get_template_directory_uri()?>/assets/images/demo-architecture-dotted-pattern.svg')">
	            <div class="container overlap-gap-section">
	                <div class="row">
	                    <div class="col-lg-4">
	                        <div class="position-relative" data-anime='{ "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
	                            <span class="text-base-color fs-12 fw-600 ls-3px text-uppercase mb-5px d-block"><?= $latest['subtitle'] ?></span>
	                            <h4 class="text-white fw-600 mb-20px"><?= $latest['title'] ?></h4>
	                            <p><?= $latest['description'] ?></p>
	                        </div>
	                    </div>
		                    <div class="col-lg-7 offset-lg-1 last-paragraph-no-margin" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
		                        
		                        <?php 
		                        	$best_projects = $latest['projects'];
		                        ?>

		                        <?php foreach($best_projects as $list): ?>

		                        <div class="row align-items-center pt-25px pb-25px border-bottom border-color-charcoal-grey g-0 position-relative sm-pe-40px">
		                            <div class="col-md-2">
		                                <span class="fw-600 text-base-color"><?=get_field('year', $list)?></span>
		                            </div>
		                            <div class="col-md-6">
		                                <span class="text-white fw-500 fs-17"><?=get_the_title($list)?></span>
		                            </div>
		                            <div class="col-md-3">

		                            	<?php 
		                            		$project_term = get_the_terms($list, 'project-category');
		                            	?>

		                                <span class="fw-500"><?= join(', ', wp_list_pluck($project_term, 'name')); ?></span>
		                            </div>
		                            <div class="col-auto col-md-1 sm-position-absolute right-0px">
		                                <a href="<?=get_permalink($list)?>"><i class="bi bi-arrow-right text-white"></i></a>
		                            </div>
		                        </div>

		                    	<?php endforeach; ?>
		                        
		                    </div>
	                </div>
	            </div> 
	        </section>
	        <!-- best client -->


	        <!-- recent project and testimonials -->

	        <?php
	        	$recentProjects = get_posts([
	        		'numberposts' => '6',
	        		'post_type' => 'project',
	        		'orderby' => 'menu_order',
	        		'order' => 'ASC'
	        	]);


	        ?>
		    <section class="bg-dark-gray background-position-center-top pb-0" style="background-image: url('<?=get_template_directory_uri()?>/assets/images/demo-architecture-dotted-pattern.svg')">
		        <div class="container"> 
		            <div class="row mb-8 xs-mb-10 overlap-section">
		                <div class="col-12 position-relative">
		                    <div class="vertical-title-center align-items-center position-absolute top-0px left-15px bg-base-color p-10px xs-p-5px h-270px sm-h-190px z-index-9 w-50px xs-w-40px">
		                        <div class="title fs-14 ls-2px text-dark-gray fw-700 text-uppercase">Recent projects</div>
		                    </div>
		                    <div class="swiper position-relative text-slider-style-04 magic-cursor drag-cursor" data-slider-options='{ "autoHeight": true, "loop": true, "allowTouchMove": true, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "effect": "fade" }'>
		                        <div class="swiper-wrapper">

		                        	<?php foreach ($recentProjects as $key => $list) :?>

		                            <!-- start text slider item -->
		                            <div class="swiper-slide">

		                                <?= get_the_post_thumbnail($list, 'full', ['style' => 'aspect-ratio:16/9;object-fit:cover']) ?>
		                                <div class="container position-absolute sm-position-relative bottom-0 right-0px z-index-1 swiper-slide-content">
		                                    <div class="row justify-content-end align-items-end h-100">
		                                        <div class="col-lg-5 col-md-7 p-0">
		                                            <div class="bg-white p-16 lg-p-12">
		                                            	<?php $project_term = get_the_terms($list, 'project-category'); ?>
		                                                <span class="text-dark-gray fs-15 text-uppercase ls-1px fw-700"><?= join(', ', wp_list_pluck($project_term, 'name')); ?></span>
		                                                <h2 class="alt-font text-dark-gray fw-600 mb-20px ls-minus-2px"><?= get_the_title($list) ?></h2>
		                                                <p class="w-90 mb-10px"><?=get_the_excerpt($list)?></p>
		                                                <a href="<?=get_permalink($list)?>" class="btn btn-link btn-hover-animation-switch btn-large text-dark-gray fw-800">
		                                                    <span>
		                                                        <span class="btn-text">Explore project</span>
		                                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right fs-14"></i></span>
		                                                        <span class="btn-icon"><i class="fa-solid fa-arrow-right fs-14"></i></span>
		                                                    </span> 
		                                                </a>
		                                            </div>
		                                        </div>
		                                    </div>
		                                </div>
		                            </div>
		                            <!-- end text slider item -->

		                        	<?php endforeach ?>                               
		                        </div>
		                        <!-- start slider navigation -->
		                        <div class="slider-one-slide-prev-1 icon-small swiper-button-prev slider-navigation-style-07 bg-dark-gray text-white box-shadow-small"><i class="bi bi-arrow-down-left"></i></div>
		                        <div class="slider-one-slide-next-1 icon-small swiper-button-next slider-navigation-style-07 bg-dark-gray text-white box-shadow-small"><i class="bi bi-arrow-up-right"></i></div>
		                        <!-- end slider navigation --> 
		                    </div>
		                </div>
		            </div>
		            <div class="row row-cols-2 row-cols-md-4 counter-style-04">

		            	<?php $counter = get_field('counter') ?>
		            	<?php foreach ($counter as $key => $count) :?>
		                <!-- start counter item -->
		                <div class="col last-paragraph-no-margin sm-mb-30px text-center">
		                    <h3 style="font-size: 48px;" class="vertical-counter d-inline-flex alt-font text-white fw-300 mb-0" data-text="+" data-to="<?=$count['number']?>"></h3>
		                    <span class="fs-13 text-base-color fw-600 d-block ls-2px text-uppercase"><?= $count['title'] ?></span>
		                </div>
		                <!-- end counter item -->
		            	<?php endforeach ?>
		              
		            </div>
		            <div class="row justify-content-center">  
		                <div class="col-xl-9 col-lg-10 testimonials-style-10 position-relative ps-4 pe-4 swiper-number-pagination-progress" data-anime='{ "translateY": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
		                    <div class="swiper magic-cursor pt-9 pb-6" data-slider-options='{"slidesPerView": 1, "loop": true, "keyboard": { "enabled": true, "onlyInViewport": true }, "autoplay": { "delay": 4000, "disableOnInteraction": false }, "pagination": { "el": ".swiper-number-line-pagination", "clickable": true }, "navigation": { "nextEl": ".swiper-button-next-nav", "prevEl": ".swiper-button-previous-nav", "effect": "fade" } }' data-swiper-number-pagination-progress="true">
		                        <div class="swiper-wrapper">

		                        	<?php
		                        	$testimonials = get_field('testimonials');

		                        	foreach ($testimonials as $key => $testimonial) :
		                        	?>

		                            <!-- start testimonial item -->
		                            <div class="swiper-slide">
		                                <div class="d-flex flex-column">
		                                    <div class="align-self-center text-center w-90 last-paragraph-no-margin"> 
		                                        <h5 class="fw-100 lh-48 alt-font mb-0"><?=$testimonial['testimonial']?> <span class="text-base-color"> <br> <?=$testimonial['name']?> </span></h5>
		                                    </div>
		                                </div>
		                            </div>
		                            <!-- end testimonial item -->
		                        	<?php endforeach; ?>
		                           
		                        </div>  
		                    </div>
		                    <!-- start slider pagination -->
		                    <div class="swiper-pagination-wrapper d-flex align-items-center justify-content-center">
		                        <div class="number-prev fs-15 fw-600"></div>
		                        <div class="swiper-pagination-progress bg-medium-gray">
		                            <span class="swiper-progress"></span>
		                        </div>
		                        <div class="number-next fs-15 fw-600"></div>    
		                    </div>
		                    <!-- end slider pagination -->
		                    <!-- start slider navigation -->
		                    <div class="swiper-button-previous-nav swiper-button-prev icon-extra-medium left-0px"><i class="bi bi-arrow-left icon-extra-medium text-white"></i></div>
		                    <div class="swiper-button-next-nav swiper-button-next icon-extra-medium right-0px"><i class="bi bi-arrow-right icon-extra-medium text-white"></i></div>
		                    <!-- end slider pagination -->
		                </div> 
		            </div>
		        </div>
		    </section>
	        <!-- recent project -->


	         <!-- devider -->
		    <section class="half-section bg-dark-gray background-position-center-top overflow-hidden position-relative" style="background-image: url('<?=get_template_directory_uri()?>/assets/images/demo-architecture-dotted-pattern.svg')">
		        <!-- start marquees -->
		        <div class="fw-600 alt-font fs-180 md-fs-150 sm-fs-130 xs-fs-100 text-charcoal ls-minus-7px md-ls-minus-5px xs-ls-minus-2px text-nowrap text-center mb-20px" data-bottom-top="transform: translate3d(100px, 0px, 0px) scale(1.5, 1.5);" data-top-bottom="transform: translate3d(-200px, 0px, 0px) scale(.7, .7);">
		            <span class="text-outline text-outline-color-white opacity-1">Social </span>Media <span class="text-outline text-outline-color-white opacity-1">Agency </span>Surabaya
		        </div> 
		        <!-- end marquees -->
		        <div class="position-absolute right-18 md-right-0 top-minus-50px sm-top-minus-20px sm-w-220px xs-w-190px z-index-9" data-anime='{ "translateY": [0, 0], "scale": [0.8, 1], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
		            <img src="images/demo-architecture-home-11.png" class="animation-rotation" alt="">
		            <div class="absolute-middle-center w-100 z-index-minus-1"><img src="images/demo-architecture-home-12.png" alt=""></div> 
		        </div>
		    </section>
		    <!-- devider --> 


		    <!-- articles -->

		    <?php
		    	$articles = get_field('articles');
		    ?>
	        <section class="bg-dark-gray background-position-center-top position-relative pt-0" style="background-image: url('<?=get_template_directory_uri()?>/assets/images/demo-architecture-dotted-pattern.svg')">
	            <div class="container">
	                <div class="row align-items-center justify-content-center text-center mb-2 sm-mb-5">
	                    <div class="col-md-6" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
	                        <span class="text-base-color fs-12 fw-600 ls-3px text-uppercase d-inline-block"><?=$articles['subtitle']?></span>
	                        <h4 class="text-white fw-600"><?= $articles['title'] ?></h4>
	                    </div>
	                </div>
	                <div class="row blog-metro mb-6">
	                    <div class="col-12">
	                        <ul class="blog-metro blog-wrapper grid-loading grid grid-3col xl-grid-3col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 1200, "delay": 0, "staggervalue": 150, "easing": "easeOutQuad" }'>
	                            <li class="grid-sizer"></li>


	                            <?php 
	                            	$recent_posts = get_posts([
	                            		'numberposts' => '3',
	                            		'orderby' => 'id',
	                            		'order' => 'DESC',
										'post_type' => 'post',
	                            	]);
					 
					
	                            ?>

	                            <?php foreach ($recent_posts as $key => $list) : ?>
	                            <!-- start blog item -->
	                            <li class="grid-item text-white">
	                                <figure class="position-relative mb-0 overflow-hidden">
	                                    <div class="blog-image bg-dark-slate-blue">
	                                        <a href="<?= get_permalink($list) ?>">
	                                        	<?= get_the_post_thumbnail($list, 'full', ['style' => 'aspect-ratio:1/1;object-fit:cover']) ?>
	                                        </a>
	                                        <div class="blog-overlay"></div>
	                                    </div>
	                                    <figcaption class="d-flex flex-column justify-content-end h-100 p-50px lg-p-25px">
	                                    	<?php $terms = get_the_terms($list, 'category') ?>
	                                        <div class="blog-categories mb-auto">
	                                        	<?php foreach ($terms as $key => $term) : ?>
	                                            <a href="<?= get_term_link($term)?>" class="categories-btn bg-white text-dark-gray text-uppercase fw-700 ms-0 mb-auto align-self-start"><?=$term->name?></a>
	                                        	<?php endforeach; ?>
	                                        </div> 
	                                        <a href="<?= get_permalink($list) ?>" class="text-white card-title fs-22 fw-500"><?= get_the_title($list) ?></a>
	                                    </figcaption>
	                                </figure>
	                            </li>                            
	                            <!-- end blog item -->
	                        	<?php endforeach; ?>
	                           
	                        </ul>
	                    </div>
	                </div>
	            </div>
<!-- 	            <div class="position-absolute bottom-minus-50px lg-bottom-minus-40px md-bottom-minus-25px sm-bottom-minus-20px xs-bottom-minus-10px left-0px right-0px text-center w-100 fs-200 lg-fs-160 md-fs-140 sm-fs-120 xs-fs-90 fw-600 text-nero-grey ls-minus-4px">watchin360</div> -->
<div class="fw-600 alt-font fs-180 md-fs-150 sm-fs-130 xs-fs-100 text-charcoal ls-minus-7px md-ls-minus-5px xs-ls-minus-2px text-nowrap text-center mb-20px skrollable skrollable-between" data-bottom-top="transform: translate3d(100px, 0px, 0px) scale(1.5, 1.5);" data-top-bottom="transform: translate3d(-200px, 0px, 0px) scale(.7, .7);" style="transform: translate3d(-8.39223px, 0px, 0px) scale(1.21095, 1.21095);">
		            Digital <span class="text-outline text-outline-color-white opacity-1">Marketing </span>Surabaya <span class="text-outline text-outline-color-white opacity-1">Social </span>Media <span class="text-outline text-outline-color-white opacity-1">Agency </span>Surabaya
		        </div>
	        </section>
	        <!-- articles --> 

			<?php

		endwhile;

	endif;
get_footer();