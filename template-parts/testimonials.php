<?php
$testimonials = new WP_Query([
  'post_type' => 'testimonial',
  'posts_per_page' => 3
]);
if ($testimonials->have_posts()) :
  while ($testimonials->have_posts()) : $testimonials->the_post(); ?>
    <div class="testimonial">
      <?php if (has_post_thumbnail()) {
          the_post_thumbnail('thumbnail');
      } ?>
      <h3><?php the_title(); ?></h3>
      <p><?php the_content(); ?></p>
    </div>
  <?php endwhile;
  wp_reset_postdata();
else : ?>
  <p>No testimonials found.</p>
<?php endif; ?>
