<section id="contact">

  <div class="contact-form-wrap animated">
    <h2 class="headline headline--medium">Want to get in touch?</h2>
    <?php
  echo do_shortcode(
    '[contact-form-7 id="31" title="Contact form 1"]'
  );
  ?>
    <!-- <form class="contact-form">
      <div class="contact-form__name-wrap">
        <label for="name">Name</label>
        <input class="contact-form__text-field" type="text" id="name" placeholder="Enter your name" required />
      </div>
      <div class="contact-form__email-wrap">
        <label for="email">Email</label>
        <input class="contact-form__text-field" type="email" id="email" placeholder="Enter your email" required />
      </div>
      <div class="contact-form__message-wrap">
        <label for="message">Message</label>
        <textarea class="contact-form__text-field" name="message" id="message" rows="4" placeholder="Enter your message" required></textarea>
      </div>
      <button class="btn">Send</button>
    </form> -->
  </div>
</section>
</main>
<?php wp_footer(); ?>
</body>

</html>