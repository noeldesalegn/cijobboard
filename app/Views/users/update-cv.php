<?= $this->extend('layouts/app.php'); ?>

<?= $this->section('content');?>

<section class="section-hero overlay inner-page bg-image" style="background-image: url('<?=base_url('assets/images/hero_1.jpg'); ?>');" id="home-section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <h1 class="text-white font-weight-bold"></h1>
            <div class="custom-breadcrumbs">
              <span class="text-white"><strong>Update My cv</strong></span>
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
            <?php if(session()->getFlashdata('error')) : ?>
            <div class="alert alert-success"> <?= session()->getFlashdata('error'); ?> </div>
            <?php endif; ?>
        <div class="row">
          <div class="col-lg-6 mb-5">
            <h2 class="mb-4">Update users JobBoard</h2>
            <form action="<?= url_to('submit.cv.users'); ?>" method="POST" enctype="multipart/form-data" class="p-4 border rounded">

              <div class="row form-group">
                <div class="col-md-12 mb-3 mb-md-0">
                  <label class="text-black" for="cv">CV</label>
                  <input type="file" name="cv" class="form-control">
                </div>
              </div>
              <div class="row form-group">
                <div class="col-md-12">
                  <input type="submit" value="Update" class="btn px-4 btn-primary text-white">
                </div>
              </div>

            </form>
          </div>
          
        </div>
      </div>
    </section>

<?= $this->endsection(); ?>