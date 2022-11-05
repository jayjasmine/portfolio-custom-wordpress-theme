<?php
get_header();
?>
<div class="project-banner__bg-image" style="
        background-image: linear-gradient(to top, <?php the_field('color') ?>, transparent 83%),
          url('<?php the_field('banner_image') ?>');
      "></div>
<?php
while (have_posts()) {
  the_post(); ?>

  <main>
    <div class="project-banner">
      <div class="page-banner__content animated">
        <h1 class="page-banner__title"><?php the_title(); ?></h1>
        <?php
        $techstack = get_field('techstack');
        if ($techstack) :
          foreach ($techstack as $tech) :
        ?>
          <div class="page-banner__tags"><?php echo $tech; ?></div>
        <?php endforeach;
        endif;
        ?>

        <div> <a href="<?php echo the_field('demo_url') ?>" target="_blank" class="btn">Live Demo</a>
          <a href="<?php echo the_field('github_url') ?>" target="_blank" class="btn btn--github"><img class="github-logo" src="<?php echo get_theme_file_uri('/images/tech/github.png') ?>" /></a>
        </div>
      </div>

    </div>
    <section class="project-content animated">
      <?php the_content(); ?>
    </section>
  <?php }
get_footer();
  ?>