<?php
get_header();
?>
    <div
      class="project-banner__bg-image"
      style="
        background-image: linear-gradient(to top, #eeeff1, transparent 63%),
          url('<?php echo get_theme_file_uri('/images/project-block.png')?>');
      "
    ></div>


  <main>
    <div class="project-banner">
      <div class="page-banner__content animated">
        <h1 class="page-banner__title">All Projects</h1>
      </div>
    </div>

    <div class="projects-grid">
  <?php
  // WP_query: allows us to query the database and store data so we can store in a variable.
  $homepageProjects = new WP_Query(array(
    'post_type' => 'project'
  ));

  while ($homepageProjects->have_posts()) {
    //the_post gets the data ready for each iteration
    $homepageProjects->the_post();
  ?>
    <div class="projects-card animated">
      <a href="<?php the_permalink(); ?>" class="project-image" style="
                background-image: linear-gradient(
                    to top,
                    #3db4cf,
                    transparent 80%
                  ),
                  url('../../images/project-block.png');
              ">
        <div class="project-name-link">
          <?php the_title(); ?>
        </div>
        <div class="project-tags-container">
          <span class="project-tag">JavaScript</span>
          <span class="project-tag">NodeJS</span>
          <span class="project-tag">HTML</span>
          <span class="project-tag">SCSS</span>
        </div>
      </a>
    </div>
  <?php }
  ?>
</div>
  <?php 
get_footer();
  ?>