<?php
get_header();
?>
<div class="page-banner__bg-container">
  <img src="<?php echo get_theme_file_uri('/images/blob.png') ?>" loading="lazy" class="gradient-animation" />
</div>
<main>
  <section id="page-banner">
    <div class="page-banner__content fadeInBottom">
      <h1 class="headline headline--large">Hi there, I'm Jay 👋</h1>
      <div class="page-banner__grid">
        <h3 class="headline headline--large-medium">
          I'm a full-stack web developer passionate about creating beautiful
          user friendly applications.
        </h3>
        <div>
          <a href="/#projects" class="btn">View Projects</a>
          <a href="https://github.com/jayjasmine" target="_blank" class="btn btn--github"><img class="github-logo" src="<?php echo get_theme_file_uri('/images/tech/github.png') ?>">
          </a>
        </div>
      </div>
    </div>
  </section>
  <section class="about animated">
    <div class="content">
      <div class="paragraph-light">
        <p>
          <?php 
            $p = get_post(35);
            echo apply_filters('the_content', $p->post_content);
          ?>
        </p>
        <h3 class="headline--small">Skills</h3>
        <div class="skills-container">
          <div class="skill-box">
            <img src="<?php echo get_theme_file_uri("/images/tech/html.png"); ?>" alt="html" />
            <p>HTML</p>
          </div>
          <div class="skill-box">
            <img src="<?php echo get_theme_file_uri("/images/tech/css.png"); ?>" alt="css" />
            <p>CSS</p>
          </div>
          <div class="skill-box">
            <img src="<?php echo get_theme_file_uri("/images/tech/js.png"); ?>" alt="js" />
            <p>JS</p>
          </div>
          <div class="skill-box">
            <img src="<?php echo get_theme_file_uri("/images/tech/react.png"); ?>" alt="react" />
            <p>React</p>
          </div>
          <div class="skill-box">
            <img src="<?php echo get_theme_file_uri("/images/tech/node.png"); ?>" alt="node" />
            <p>Node.JS</p>
          </div>
          <div class="skill-box">
            <img src="<?php echo get_theme_file_uri("/images/tech/express.png"); ?>" alt="express" />
            <p>Express</p>
          </div>
          <div class="skill-box">
            <img src="<?php echo get_theme_file_uri("/images/tech/sass.png"); ?>" alt="sass" />
            <p>SASS</p>
          </div>
          <div class="skill-box">
            <img src="<?php echo get_theme_file_uri("/images/tech/mysql.png"); ?>" alt="mysql" />
            <p>MySQL</p>
          </div>
          <div class="skill-box">
            <img src="<?php echo get_theme_file_uri("/images/tech/mongo.png"); ?>" alt="mongo" />
            <p>MongoDB</p>
          </div>
          <div class="skill-box">
            <img src="<?php echo get_theme_file_uri("/images/tech/git.png"); ?>" alt="git" />
            <p>Git</p>
          </div>
        </div>
      </div>
      <div><img id="me" src="<?php echo get_theme_file_uri("/images/me.jpg"); ?>" alt="" /></div>
    </div>
  </section>
  <section id="projects">
    <h2 class="headline headline--medium animated">Projects</h2>
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
                    <?php the_field('color') ?>,
                    transparent 80%
                  ),
                  url('<?php the_field('banner_image') ?>');
              ">
            <div class="project-name-link">
              <?php the_title(); ?>
            </div>
            <div class="project-tags-container">
              <?php
              $techstack = get_field('techstack');
              if ($techstack) :
                foreach ($techstack as $tech) :
              ?>
                  <span class="project-tag"><?php echo $tech; ?></span>

              <?php endforeach;
              endif;
              ?>
            </div>
          </a>
        </div>
      <?php }

      ?>

    </div>
  </section>


  <?php
  get_footer();
  ?>