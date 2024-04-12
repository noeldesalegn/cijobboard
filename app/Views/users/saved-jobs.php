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

        <div class="row mb-5 justify-content-center">
          <div class="col-md-7 text-center">
            <h2 class="section-title mb-2">Saved jobs.</h2>
          </div>
        </div>
        
        <ul class="job-listings mb-5">
          <?php foreach($savedJobs as $job): ?>
            <li class="job-listing d-block d-sm-flex pb-3 pb-sm-0 align-items-center">
              <a href="<?= url_to('single.jobs',$job->job_id); ?>"></a>
              <div class="job-listing-logo">
                <img src="<?= base_url('assets/images/' . $job->company_image.''); ?>" alt="Free Website Template by Free-Template.co" class="img-fluid">
              </div>
              <div class="job-listing-about d-sm-flex custom-width w-100 justify-content-between mx-4">
                <div class="job-listing-position custom-width w-50 mb-3 mb-sm-0">
                  <h2><?= $job->title; ?></h2>
                  <strong><?= $job->company_name; ?></strong>
                </div>
                <div class="job-listing-location mb-3 mb-sm-0 custom-width w-25">
                  <span class="icon-room"></span><?= $job->location; ?>
                </div>
                <div class="job-listing-meta">
                  <span class="badge badge-danger"><?= $job->job_type; ?></span>
                </div>
              </div>
            </li>
          <?php endforeach; ?>
        </ul>


        <div class="row pagination-wrap">
          <div class="col-md-6 text-center text-md-left mb-4 mb-md-0">
            <span>Showing 1-7 Of 43,167 Jobs</span>
          </div>
          <div class="col-md-6 text-center text-md-right">
            <div class="custom-pagination ml-auto">
              <a href="#" class="prev">Prev</a>
              <div class="d-inline-block">
              <a href="#" class="active">1</a>
              <a href="#">2</a>
              <a href="#">3</a>
              <a href="#">4</a>
              </div>
              <a href="#" class="next">Next</a>
            </div>
          </div>
        </div>

      </div>
    </section>
    
<?= $this->endsection(); ?>