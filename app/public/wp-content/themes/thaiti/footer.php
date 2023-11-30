<footer class="footer">
  <?php

  ?>
  <div class="footer-logo">
    <?php
    if (function_exists('the_custom_logo')) {
      $custom_logo_id = get_theme_mod('custom_logo');
      $logo = wp_get_attachment_image_src($custom_logo_id, 'full');

      if (has_custom_logo()) {
        echo '<a href="' . esc_url(home_url('/')) . '"><img src="' . esc_url($logo[0]) . '" alt="' . get_bloginfo('name') . '"></a>';
      } else {
        echo '<h1>' . get_bloginfo('name') . '</h1>';
      }
    }
    ?>
  </div>
  <div class="footer-content">
    <?php if (have_rows('footer_menus', 'option')) : ?>
      <?php while (have_rows('footer_menus', 'option')) : the_row();
        $menuTitle = get_sub_field('menu_titile', 'option'); ?>
        <div class="footer-link">
          <p><?php echo $menuTitle; ?></p>
          <?php if (have_rows('menu_item', 'option')) : ?>

            <?php while (have_rows('menu_item', 'option')) : the_row(); ?>

              <?php $menuLink = get_sub_field('menu_link', 'option');
              ?>

              <a href="<?php echo esc_url($menuLink['url']); ?>"><?php echo esc_html($menuLink['title']); ?></a>



            <?php endwhile; ?>

          <?php endif; ?>
        </div>


      <?php endwhile; ?>

    <?php endif; ?>
  </div>
  <div class="footer-socials">
    <?php if (have_rows('socials', 'option')) : ?>
      
        <?php while (have_rows('socials', 'option')) : the_row();
          $image = get_sub_field('socials-icon');
          $url = get_sub_field('socials-url');
        ?>
          <a class="footer-socials__link" href="<?php echo esc_url($url); ?>"><img src="<?php echo $image; ?>" alt="<?php echo $url; ?>"></a>
        <?php endwhile; ?>
    
    <?php endif; ?>
  </div>
</footer>
<?php wp_footer(); ?>

<script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script type="text/javascript">
  $(document).ready(function() {
    $('.slick-slider-hero').slick({
      dots: false,
      infinite: true,
      speed: 500,
      fade: true,
      cssEase: 'linear',
      autoplay: true,
      autoplaySpeed: 2000,
    });
    $('.slick-slider-discover').slick({
      dots: false,
      infinite: true,
      arrows: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [{
          breakpoint: 1600,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          }
        },
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            
          }
        },
        {
          breakpoint:  850,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            
          }
        }
      ]
        
    });
    $('.slick-slider-discover').on('afterChange', function (event, slick, currentSlide) {
  // Получаем общее количество слайдов
  var totalSlides = slick.$slides.length;

  // Проверяем, остался ли только один слайд и это не последний слайд
  if (totalSlides === 1 && currentSlide < totalSlides - 1) {
    // Добавляем класс для центрирования слайда
    slick.$slides.eq(currentSlide).addClass('center-slide');
  } else {
    // Убираем класс, если условие не выполняется
    slick.$slides.removeClass('center-slide');
  }
});

  });
</script>
</body>

</html>