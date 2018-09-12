<?php
$printImagePath = function ( $path ) {
  echo get_parent_theme_file_uri( 'starter-content/corporate/' .  $path );
};
$divider = function() { ?>
  <div class="row bg-editor-hr-wrap" style="padding-bottom: 15px;">
    <div class="col-md-12 col-xs-12 col-sm-12">
      <div>
        <hr class="bg-hr color1-color bg-hr-15" style="width: 50px; margin-left: 0px; margin-right: auto; margin-top: 0px; border-radius: 100px;">
      </div>
    </div>
  </div>
<?php }; ?>

<div class="boldgrid-slider boldgrid-section-wrap">
  <div class="boldgrid-section"
    style="background-position: 50% 60%; background-size: cover;background-image: linear-gradient(to left, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(<?php $printImagePath( 'home/home1.png' ) ?>)">
    <div class="container">
      <div class="row row-spacing">
        <div class="col-md-6 col-sm-12 col-xs-12">
          <h5 style="margin-bottom: 0;" class="color4-color">We help Entrepreneurs</h5>
          <h2 style="margin-top: 0" class="color4-color">Grow Your Business</h2>
          <?php $divider(); ?>
          <h5 style="font-size: 1.3em;" class="color4-color">Taking core competencies to, consequently, infiltrate new markets. Drive analytics so that as an end result.</h5>
          <p style="margin-top: 30px;"><a href="#" class="button-primary">Learn More</a></p>
        </div>
        <div class="col-md-6 col-sm-12 col-xs-12"></div>
      </div>
    </div>
  </div>
</div>
<div class="boldgrid-section">
  <div class="container">
    <div class="row row-spacing">
      <div class="col-md-6 col-sm-12 col-xs-12">
        <h5 style="margin-bottom: 0;">Where we started</h5>
        <h2 style="margin-top: 0">Our Story</h2>
        <?php $divider(); ?>
        <p style="margin-bottom: 20px;">Executing big data with the aim to improve overall outcomes. Build user stories so that as an end result, we create actionable insights. Engage audience segments and above all, use best practice. Target key demographics while remembering to get buy in.</p>
        <p style="margin-bottom: 40px;">Generating dark social so that as an end result, we use best practice.
          Synchronising first party data so that we be transparent.</p>
        <p><a href="#" class="button-primary">Learn More</a></p>
      </div>
      <div class="col-md-6 col-sm-12 col-xs-12 align-column-center">
        <p class="text-center"><img class="image-shadow" style="width: 350px" src="<?php $printImagePath( 'home/home2.png' ) ?>" ></p>
      </div>
    </div>
  </div>
</div>
<div class="boldgrid-section"
  style="background-position: 50% 60%; background-size: cover;background-image: linear-gradient(to left, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(<?php $printImagePath( 'home/home3.png' ) ?>)">
  <div class="container">
    <div class="row row-spacing-top">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <h5 style="margin-bottom: 0;" class="color4-color">What We Do</h5>
        <h2 style="margin-top: 0" class="color4-color">Services</h2>
        <?php $divider(); ?>
      </div>
    </div>
    <div class="row row-spacing-bottom">
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="bg-box text-center color2-background-alpha" style="padding: 1.6em;">
          <img src="<?php $printImagePath( 'icons/development.svg' ) ?>" style="height: 75px;">
          <h4 class="color4-color">Advanced Analytics</h4>
          <p class="color4-color">Building brand integration and possibly funnel users.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="bg-box text-center color2-background-alpha" style="padding: 1.6em;">
          <img src="<?php $printImagePath( 'icons/business.svg' ) ?>" style="height: 75px;">
          <h4 class="color4-color">Finance</h4>
          <p class="color4-color">Building brand integration and possibly funnel users.</p>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <div class="bg-box text-center color2-background-alpha" style="padding: 1.6em;">
          <img src="<?php $printImagePath( 'icons/strategy.svg' ) ?>" style="height: 75px;">
          <h4 class="color4-color">Strategy & Marketing</h4>
          <p class="color4-color">Building brand integration and possibly funnel users.</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="boldgrid-section">
  <div class="container">
    <div class="row row-spacing">
      <div class="col-md-3 col-sm-6 col-xs-12 text-center">
        <img src="<?php $printImagePath( 'home/logo1.png' ) ?>">
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 text-center">
        <img src="<?php $printImagePath( 'home/logo3.png' ) ?>">
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 text-center">
        <img src="<?php $printImagePath( 'home/logo4.png' ) ?>">
      </div>
      <div class="col-md-3 col-sm-6 col-xs-12 text-center">
        <img src="<?php $printImagePath( 'home/logo5.png' ) ?>">
      </div>
    </div>
  </div>
</div>
<div class="boldgrid-section color4-background-color">
  <div class="container">
    <div class="row row-spacing-top">
      <div class="col-md-5 col-sm-12 col-xs-12">
        <h5 style="margin-bottom: 0;">Read All About It</h5>
        <h2 style="margin-top: 0">Recent News</h2>
        <?php $divider(); ?>
      </div>
      <div class="col-md-7 col-sm-12 col-xs-12 align-column-center">
        <p>Target user stories so that we maximise share of voice. Grow cloud
          computing with the aim to take this offline. Lead integrated tech stacks
          and above all, target the low hanging fruit.</p>
      </div>
    </div>
    <div class="row row-spacing-bottom">
      <div class="col-md-12 col-sm-12 col-xs-12">
        [boldgrid_component type="recent_posts"]
      </div>
    </div>
  </div>
</div>
<div class="boldgrid-section">
  <div class="container">
    <div class="row row-spacing-top">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <h5 style="margin-bottom: 0;">Meet the Professionals</h5>
        <h2 style="margin-top: 0">Team</h2>
        <?php $divider(); ?>
      </div>
    </div>
    <div class="row row-spacing-bottom">
      <div class="col-md-6 col-sm-12 col-xs-12">
        <div class="boldgrid-slider boldgrid-wrap-row">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="bg-box text-center">
                <img class="image-shadow" src="<?php $printImagePath( 'home/home7.png' ) ?>" style="width: 350px;">
                <h4 style="margin-top: 25px;">Nathan Counsel</h4>
                <p>Chief Executive Officer</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="bg-box text-center">
                <img class="image-shadow" src="<?php $printImagePath( 'home/home8.png' ) ?>" style="width: 350px;">
                <h4 style="margin-top: 25px;">Nathan Counsel</h4>
                <p>Chief Executive Officer</p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="bg-box text-center">
                <img class="image-shadow" src="<?php $printImagePath( 'home/home8a.png' ) ?>" style="width: 350px;">
                <h4 style="margin-top: 25px;">Nathan Counsel</h4>
                <p>Chief Executive Officer</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12">
        <h3 style="margin-bottom: 1.1em;">Who We Are</h3>
        <p style="margin-bottom: 2em;">Generate vertical integration while remembering to increase viewability.
          Grow social with the aim to increase viewability. Lead vertical integration in turn innovate.</p>
        <p style="margin-bottom: 2em;">Repurpose customer jounreys with the aim to come up with a bespoken solution. Growing benchmarking so that we build ROI.</p>
        <p><a href="#" class="button-primary">Meet the Team</a></p>
      </div>
      <div class="col-md-1 col-sm-12 col-xs-12"></div>
    </div>
  </div>
</div>
<div class="boldgrid-section"
  style="background-size: cover; background-position: 50% 37%; background-image: linear-gradient(to left, rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url(<?php $printImagePath( 'home/home9.png' ) ?>)">
  <div class="container">
    <div class="row row-spacing">
      <div class="col-md-8 col-sm-12 col-xs-12">
        <h3 class="color4-color">Create daily standups to in turn re-target key demographics.</h3>
      </div>
      <div class="col-md-4 col-sm-12 col-xs-12 text-right align-column-center">
        <p style="margin-top: 10px;"><a href="#" class="button-primary">Contact Us</a></p>
      </div>
    </div>
  </div>
</div>
