<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>
<!-- Hero Section -->
<section class="hero-section">



    <?php if (have_rows('hero_repeater')) : ?>
        <div class="slick-slider-hero">
            <?php while (have_rows('hero_repeater')) : the_row();
                $heroImage = get_sub_field('hero_image_bg');
                $heroTitle = get_sub_field('hero_title');
                $heroSubtitle = get_sub_field('hero_subtitle');
                
            ?>
                <div class="hero-slide" style="background-image: url(<?php echo $heroImage['url']; ?>); background-repeat: no-repeat; background-size: cover;">
                    <div class="hero-slide__wrapper">
                        <?php if ($heroTitle) : ?>
                            <h1 class="hero-slide__title"><?php echo $heroTitle; ?></h1>
                        <?php endif; ?>
                        <?php if ($heroSubtitle) : ?>
                            <p class="hero-slide__subtitle"><?php echo $heroSubtitle; ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>


</section>
<!-- Discover Section -->
<section class="discover-section " id="discover">
    <div class="discover-section__wrap">
        <h2 class="text-left"><?php the_field('discover_title'); ?></h2>
        <p class="text-left"><?php the_field('discover__sub_title'); ?></p>

        <?php
        $args = array(
            'post_type' => 'islands', // Specify the custom post type
            'posts_per_page' => -1,   // Retrieve all posts. You can adjust this number as needed.
        );

        $query = new WP_Query($args); ?>

        <?php if ($query->have_posts()) : ?>
            <div class="slick-slider-discover">
                <?php while ($query->have_posts()) : $query->the_post();
                    $priceLink = get_field('price_link');
                    $icon = get_field('icon');
                ?>
                    <div class="discover-slide">

                        <?php if (has_post_thumbnail()) : ?>

                            <?php the_post_thumbnail('island-image'); ?>

                        <?php endif; ?>

                        <div class="card-body">
                            <h5 class="card-title"> <?php the_title(); ?></h5>
                            <?php the_content(); ?>

                            <?php if ($priceLink) : ?>
                                <a href="<?php echo $priceLink['url']; ?>" class="card-body__link" target="<?php echo $priceLink['target']; ?>"><span>From </span><?php echo $priceLink['title']; ?>
                                <img src="<?php echo $icon; ?>" alt="">
                            </a>
                            <?php endif; ?>


                        </div>

                    </div>
                <?php endwhile;
                wp_reset_postdata();
                ?>
            </div>
        <?php endif; ?>

        <div class="discover-section-text">
            <p class="text-center"><?php the_field('discover_text'); ?></p>
        </div>

        <?php
        $args = array(
            'post_type'      => 'islands',
            'posts_per_page' => -1,
        );

        $query = new WP_Query($args);

        if ($query->have_posts()) : ?>
            <div class=" discover-section-select">
                <select class="custom-select ">
                <option selected>Select an island</option>
                <?php while ($query->have_posts()) : $query->the_post(); ?>
                        
                        <option ><?php the_title(); ?></option>
                        <!-- ... other options -->
                        <?php endwhile; ?>    
                    </select>
                    <button class="btn btn-lg btn-success">EXPLORE</button>
                
            </div>
        <?php endif;
        wp_reset_postdata();
        ?>



    </div>
</section>

<!-- Experience Section -->
<?php
$experienceImage = get_field('experience-bg');
$experienceTitle = get_field('experience-title');
$experienceSubTitle = get_field('discover__sub_title');
$experienceText = get_field('experience-text');
?>

<section class="experience-section text-white text-center " id="experience" style="background-image: url(<?php echo $experienceImage['url']; ?>); background-repeat: no-repeat; background-size: cover;">
    <div class="experience-section__wrap">
        <div class="experience-section_title">
            <h2><?php echo $experienceTitle; ?></h2>
            <p><?php echo $experienceSubTitle; ?></p>
        </div>
        <div class="experience-section__text">
            <p><?php echo $experienceText ?></p>
            <button class="experience-section__btn">LEARN MORE</button>
        </div>
    </div>
</section>

<!-- Why Tahiti Section -->
<?php
$whyLeft = get_field('why_left');
$whyCenter = get_field('why_center');
$whyRight = get_field('why_right');
?>

<section class="why-tahiti" id="travel">
    <div class="container">
        <h2 class="why-tahiti-title"><span>WHY</span> TAHITI?</h2>
        <!-- Content for why Tahiti -->
        <div class="row ">
            <div class="why-tahiti-item col-md-4">
                <p><?php echo $whyLeft; ?></p>
            </div>
            <div class="why-tahiti-item col-md-4">
                <p><?php echo $whyCenter; ?></p>
            </div>
            <div class="why-tahiti-item col-md-4">
                <p><?php echo $whyRight; ?></p>
            </div>
        </div>
    </div>
</section>
<!-- About section-->
<?php
$aboutBg = get_field('about_bg');
$aboutTitle = get_field('about_title');
$aboutText = get_field('about_text');
?>
<section class="about-section" id="about" style="background-image: url(<?php echo $aboutBg['url']; ?>); background-repeat: no-repeat; background-size: cover;">
    <div class="container">
        <div class="about-section__wrap">
            <h2><?php echo $aboutTitle; ?></h2>
            <p><?php echo $aboutText ?></p>
            <div class="about-section__btn">
                <button>BOOK NOW</button>
            </div>

        </div>
    </div>

</section>

<?php get_footer(); ?>