<?php
/**
 * The main template file
 *
 * @package U.P.R. Solar Green Energy
 */

get_header();
?>

<main id="main" class="site-main">
  <section class="hero">
    <div class="container">
      <div class="hero-content">
        <h2>Harness the Power of the Sun with U.P.R. Solar</h2>
        <p>Professional solar energy solutions for homes and businesses. Save money while saving the planet.</p>
        <a href="#contact" class="cta-button">Get Free Consultation</a>
      </div>
    </div>
  </section>

  <section id="services" class="services">
    <div class="container">
      <div class="section-title">
        <h2>Our Services</h2>
        <p>We provide comprehensive solar energy solutions tailored to your needs</p>
      </div>
      <div class="services-grid">
        <div class="service-card">
          <div class="service-icon">☀️</div>
          <h3>Residential Solar</h3>
          <p>Professional installation of high-efficiency solar panels for your home.</p>
        </div>
        <div class="service-card">
          <div class="service-icon">🏢</div>
          <h3>Commercial Solar</h3>
          <p>Custom solar solutions for businesses to cut operational costs.</p>
        </div>
        <div class="service-card">
          <div class="service-icon">🔋</div>
          <h3>Battery Storage</h3>
          <p>Energy storage systems to maximize your solar investment.</p>
        </div>
        <div class="service-card">
          <div class="service-icon">🔧</div>
          <h3>Maintenance & Repair</h3>
          <p>Comprehensive maintenance services for your solar system.</p>
        </div>
      </div>
    </div>
  </section>

  <section id="about" class="about">
    <div class="container">
      <div class="about-content">
        <div class="about-text">
          <h2>Why Choose U.P.R. Solar Green Energy?</h2>
          <p>With over 10 years of experience in the solar industry, we are committed to providing high-quality renewable energy solutions.</p>
          <a href="#contact" class="cta-button">Contact Us Today</a>
        </div>
        <div class="about-image">
          <img src="<?php echo get_template_directory_uri(); ?>/images/solar-installation.jpg" alt="Solar Installation">
        </div>
      </div>
    </div>
  </section>

  <section id="contact" class="contact">
    <div class="container">
      <div class="section-title">
        <h2>Contact Us</h2>
        <p>Get in touch for a free consultation and quote</p>
      </div>
      <div class="contact-container">
        <div class="contact-info">
          <h2>Get Started With Solar Today</h2>
          <p>Fill out the form or contact us directly using the information below.</p>
          <div class="contact-details">
            <div>
              <span>📍</span>
              <p>123 Solar Avenue, Energy City</p>
            </div>
            <div>
              <span>📞</span>
              <p>(555) 123-SOLAR</p>
            </div>
            <div>
              <span>✉️</span>
              <p>info@upresolar.com</p>
            </div>
          </div>
        </div>
        <div class="contact-form">
          <?php echo do_shortcode('[contact-form-7 id="101" title="Contact form 1"]'); ?>
        </div>
      </div>
    </div>
  </section>
</main>

<?php
get_footer();