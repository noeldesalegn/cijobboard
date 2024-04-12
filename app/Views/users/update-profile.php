<?= $this->extend('layouts/app.php'); ?>

<?= $this->section('content');?>

<section class="section-hero overlay inner-page bg-image" style="background-image: url('<?=base_url('assets/images/hero_1.jpg'); ?>');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold"></h1>
            <div class="custom-breadcrumbs">
              <span class="text-white"><strong>Update My Profile</strong></span>
            </div>
          </div>
        </div>
      </div>
    </section>


<section class="site-section">
    
      <div class="container">
      <?php if(session()->getFlashdata('update')) : ?>
            <div class="alert alert-success"> <?= session()->getFlashdata('update'); ?> </div>
            <?php endif; ?>
        <div class="row">
        <div class="col-md-6 order-md-2 ml-md-auto">
            <img src="<?=base_url('assets/user_image/'.$singleUser->image.''); ?>" alt="Image" class="img-fluid mb-4 rounded">
          </div>
          <div class="col-lg-6 mb-5">
            <h2 class="mb-4">Update users JobBoard</h2>
            <form action="<?= base_url('users/update-profile') ?>" method="post" class="p-4 border rounded">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="username">Username</label>
                  <input type="text" name="username" value="<?= $singleUser->username; ?>" id="username" class="form-control" placeholder="Username">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="jobtitle">Job Titel</label>
                  <input type="text" name="job_title" value="<?= $singleUser->job_title; ?>" id="fname" class="form-control" placeholder="Password">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Facebook</label>
                  <input type="text" name="facebook" value="<?= $singleUser->facebook; ?>"  id="fname" class="form-control" placeholder="facebook link">
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Linkedin</label>
                  <input type="text" name="linkedin" value="<?= $singleUser->linkedin; ?>" id="fname" class="form-control" placeholder="Linkedin link">
                </div>
              </div>
              <div class="row form-group mb-4">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="fname">Twitter</label>
                  <input type="text" name="twitter" value="<?= $singleUser->twitter; ?>" id="fname" class="form-control" placeholder="Twitter link">
                </div>
              </div>
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Bio</label>
                <textarea placeholder="Bio" name="bio" class="form-control" id="exampleFormControlTextarea1" rows="3"><?= $singleUser->bio; ?>"</textarea>
                 </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="update profile" class="btn px-4 btn-primary text-white">
                </div>
              </div>

            </form>
          </div>
          
        </div>
      </div>
    </section>


<?= $this->endsection(); ?>
