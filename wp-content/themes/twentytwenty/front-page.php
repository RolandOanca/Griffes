

<?php
/**
 * Template name: Homepage
 */
get_header(); ?>
<!-- Header -->



<section id="banner" style="background-image:url('http://griffes.ro/wp-content/uploads/2016/10/new-banner.jpg');">


<div id="logo">
    <img src="http://griffes.ro/wp-content/uploads/2016/10/logo.png" alt="Griffes">
</div>
<div id="scroll-down">
    <img src="http://griffes.ro/wp-content/uploads/2016/10/scroll-down.png" alt="Griffes">
</div>
</section>



<!-- About Section -->

<section id="about-us">
    <div class="text-about text-center">
        <h2><?php echo CFS()->get("title_about_section_homepage");?></h2>
        <div class="row">
            <div class ="col-sm-12 columns">
                <p><?php echo CFS()->get("description_about_section_homepage");?></p>
            </div>
        </div>
    </div>
</section>

<!-- Services -->

<section id="services">
    <div class="tab-image">
        <?php $tabFields = CFS()->get('tabs_field')?>
        
        <?php foreach ( $tabFields as $index => $field ) {?>
            <div data-tab="<?php echo $index;?>" class="image image2 <?php if ($index == 0) { echo "active-tab"; } ?>" style="background-image: url('<?php echo $field['tab_background_image_field'];?>');"></div>
        <?php } ?>
    </div>
        <div class="container custom-container">
            
            <div class="row">
                <div class="tab-content-services">
                    <div class="main-content">
                        <div class="col-sm-12 columns">
                            <h2><?php echo CFS()->get('title_field')?></h2>
                        </div>
                        <div class="col-sm-12 columns">
                            <p> <?php echo CFS()->get('services_content_field')?> </p>
                        </div>
                    </div>
                </div>
            </div>
     
            <div class="row">
                
                <div class="col-lg-8 col-sm-12 custom-lg-8">
                    <div class="tab-container">
                        <ul class="tab-nav">
                            
                            <?php foreach ( $tabFields as $index => $field ) {?>
                                <li class="tab-itm <?php if ($index == 0) { echo "active-tab"; } ?>" data-tab="<?php echo $index?>">
                                    <img src="<?php echo $field['tab_icon_field'];?>">
                                     <?php 
                                        
                                        echo $field['tab_title_fild']
                                    ?>
                                </li>
                            <?php } ?>
                        </ul>
                    </div> 
                    <div class="tab-content">
                        <?php foreach( $tabFields as $index => $field ) {?>
                            <div data-tab="<?php echo $index; ?>" class="content <?php if ($index == 0) { echo "active-tab"; } ?>">
                                <?php echo $field['tab_content_fields']; ?>
                            </div>
                        <?php } ?>
                    </div>
                </div> 
            </div>                
        </div>
</section>

<!-- Latest news -->

<section id="latest-news">
    
        <div class="row">
            <div class="columns col-sm-12 text-center">
                <h2><?php echo CFS()->get('latest_news_title_field'); ?></h2>
            </div>
        </div>

        <div class="row">
            
            <div class ="single-item " style="max-width:100%">
                <?php $catquery = new WP_Query( 'cat=3&posts_per_page=19&order=ASC' ); ?>
                <?php while($catquery->have_posts()) : $catquery->the_post(); ?>
                <div class="itm">
                    <div class="row">
                        <div class="col-lg-4 col-sm-12 col-md-12">
                            <div class="image-latest">
                                <img src="<?php echo CFS()->get('images_for_posts'); ?>"/>
                            </div>
                        </div>
                        <div class="col-lg-8 col-md-12">
                            <div class="slider-content">
                                <h3><?php the_title(); ?></h3>
                                <div class="date"><?php echo CFS()->get('date_field'); ?></div>
                                <div class="text-scroll mCustomScrollbar">
                                    <?php the_content(); ?>
                                    <?php echo CFS()->get('link_field'); ?>
                                </div>
                            </div>  
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_postdata();?>
            </div>
            <div class="slick-nav">
                <div class="row">
                    <div class="columns col-sm-6">
                        <div class="left"><i class="icon-angle-left"></i> Previous post</div>
                    </div>
                    <div class="columns col-sm-6">
                        <div class="right float-right">Next post<i class="icon-angle-right"></i></div>
                    </div>
                </div>
            </div>
      
</section>





<!-- Our clients -->

<section id="our-clients">
    <div class="container">
    <div class="row">
        <div class="columns col-sm-12 text-center">
            <h2><?php echo CFS()->get('our_title_field'); ?></h2>
        </div>
    </div>
    <div class="row over">
        <div class="slider-logo">
            
            <?php
                $fields = CFS()->get( 'our_clients_slide_field' );
                foreach ( $fields as $field ) {?>
                    <div class="item">
                        <img src="<?php echo $field['our_clients_img_field'];?>">
                    </div>
                <?php }?>
            </div>
        
        </div>   
    </div>
    </div>



</section>



<!-- Properties -->


<section id="properties">
    <div class="container">
        <div class="row">
            <div class="columns col-sm-12 text-center">
                <h2><?php echo CFS()->get('properties_title_field'); ?></h2>
            </div>
        </div>
            <div class="four-column row">
                <?php
                    $args = array (
                        'post_type' => 'properties',
                        'posts_per_page' => -1, //showposts is deprecated
                        'orderby' => 'date', //You can specify more filters to get the data
                        'order' => 'ASC'
                    );
                    $cat_posts = new WP_query($args);
                    if ($cat_posts->have_posts()) : while ($cat_posts->have_posts()) : $cat_posts->the_post();?>
                   <div class="col-large-3 col-md-6 content_box">
                       <div class="box has-popup">
                           <div class="box-content">
                               <div class="box-img">
                                   <img src="<?php  echo CFS()->get('images_for_properties_field'); ?>"
                                       data-large-img="<?php  echo CFS()->get('modal_img_field'); ?>"/>
                                </div>
                                <div class="box-description text-center" data-long-description="<?php  echo the_excerpt(); ?>">
                                    <h4>
                                    <?php echo the_title(); ?>
                                    <span class="dash">-</span>
                                    <span class="area">
                                        <?php echo CFS()->get('area_field');?>
                                        sqm
                                    </span>
                                   </h4>
                                </div>
                            </div>
                        </div>
                    </div>
                 <?php   endwhile; endif; wp_reset_postdata() ?>
            </div>
        </div>
</section>






<!-- Clients say -->

        <section id="clients-say">
            <div class="row">
                <div class="columns col-sm-12 text-center">
                    <h2><?php  echo CFS()->get('opinion_title_field'); ?></h2>
                </div>
            </div>
        <div class="cover" style="background-image:url('http://rolandoanca.dev.ascensys.ro/griffes/wp-content/uploads/2019/12/clients-say-new.jpg')"></div>
        <div class="row">
            <div id="slideshow" style="display: block; width: 100%; position: relative; z-index:1">
            
            <?php
                $fields = CFS()->get('opinion_slide_field'); 
                foreach( $fields as $field ) {
            ?>
                <div class="clients-say-slick">                    
                    <div class="row">
                        <div class="columns col-sm-12 text-center">
                            <div class="quotes-img">
                                <img src="<?php echo $field['quotes_field']; ?>" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="columns col-sm-12 text-center">
                            <div class="slick-text">
                                <?php echo $field['opinion_content_field']; ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="columns col-sm-12 text-center">
                            <div class="author">
                                <?php  echo $field['author_field']; ?>
                            </div>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
        </section>














<?php get_footer();?>