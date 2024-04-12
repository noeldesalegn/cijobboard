<?= $this->extend('layouts/app.php'); ?>

<?= $this->section('content');?>

<section class="section-hero overlay inner-page bg-image" style="background-image: url('<?=base_url('assets/images/hero_1.jpg'); ?>');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold"></h1>
            <div class="custom-breadcrumbs">
              <span class="text-white"><strong>My Profile</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>

<section class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-12 text-center" data-aos="fade">
            <h2 class="section-title mb-3">My Profile</h2>
          </div>
        </div>

        <div class="row align-items-center block__69944">

          <div class="col-md-6 order-md-2 ml-md-auto">
            <img src="<?=base_url('assets/user_image/'.$singleUser->image.''); ?>" alt="Image" class="img-fluid mb-4 rounded">
          </div>
           
          <div class="col-md-6">
            <h3><?=$singleUser->username ?></h3>
            <p class="text-muted"><?=$singleUser->job_title ?></p>
            <a class="text-white btn btn-success" enctype="multipart/form-data" href="<?= base_url('users/downloadCV/' . $singleUser->cv) ?>">Download CV</a>
            <p><?=$singleUser->bio ?></p>
            <div class="social mt-4">
              <a href="<?=$singleUser->facebook ?>"><span class="icon-facebook"></span></a>
              <a href="<?=$singleUser->twitter ?>"><span class="icon-twitter"></span></a>
              <a href="<?=$singleUser->instagram ?>"><span class="icon-instagram"></span></a>
              <a href="<?=$singleUser->linkedin ?>"><span class="icon-linkedin"></span></a>
            </div>
          </div>
      </div>
    </section>





<?= $this->endsection(); ?>
