<?= $this->extend('layouts/admin.php'); ?>

<?= $this->section('content');?>

<br><?php if(session()->getFlashdata('save')) : ?>
      <div class="alert alert-success"> <?= session()->getFlashdata('save'); ?> </div>
  <?php endif; ?>

<br>
<div class="card card-primary  mr-4 ml-4">
              <div class="card-header">
                <h3 class="card-title">Create Jobs</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="<?= url_to('jobs.store'); ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Jobs Title</label>
                    <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Jobs Title">
                  </div>
                  
                    <!-- select -->
                    <div class="form-group">
                        <label>Job Region</label>
                        <select name="location" class="form-control">

                        <option value="New York" >New York</option>
                        <option value="Cairo">Cairo</option>

                        </select>
                    </div>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Company</label>
                      <input type="text" name="company_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Company">
                    </div>

                    <div class="form-group">
                        <label>Job Type</label>
                        <select name="job_type" class="form-control">

                        <option value="Part Time">Part Time</option>
                        <option value="Full Time">Full Time</option>

                        </select>
                    </div>


                    <div class="form-group">
                      <label for="exampleInputEmail1">Vacancy</label>
                      <input name="vacancy" type="text" name="vacancy" class="form-control" id="exampleInputEmail1" placeholder="e.g. 3">
                    </div>


                    <div class="form-group">
                        <label>Experience</label>
                        <select name="experience" class="form-control">
                        <option value="2-3 years">2-3 years</option>
                        <option value="3-4 years">3-4 years</option>
                        <option value="4-5 years">4-5 years</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label>Salary</label>
                        <select name="salary" class="form-control">
                        <option value="$50k-$60">$50k-$60</option>
                        <option value="$60k-$80">$60k-$80</option>
                        <option value="$80k-$90">$80k-$90</option>
                        </select>

                    </div>
                    <div class="form-group">
                        <label>Gender</label>
                        <select name="gender" class="form-control">
                        <option value="Male">Male</option>
                        <option value="Female">female</option>
                        </select>
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Application Deadline</label>
                      <input type="text" name="application_deadline" class="form-control" id="exampleInputEmail1" placeholder="e.g. 20-12-2024">
                    </div>

                    <div class="form-group">
                      <label for="exampleInputEmail1">Published on</label>
                      <input type="text" name="published_on" class="form-control" id="exampleInputEmail1" placeholder="e.g. 20-12-2024">
                    </div>

                    <div class="form-group">
                        <label>Job Description</label>
                        <textarea name="job_description" class="form-control" rows="3" placeholder="Write Job Description"></textarea>
                      </div>

                      <div class="form-group">
                        <label>Responsibilities</label>
                        <textarea  name="responsibilities" class="form-control" rows="3" placeholder="Write Responsibilities"></textarea>
                      </div>

                      <div class="form-group">
                        <label>Education & Experience</label>
                        <textarea name="education_experience" class="form-control" rows="3" placeholder="Write Education & Experience"></textarea>
                      </div>

                      <div class="form-group">
                        <label>Other Benifits</label>
                        <textarea name="other_benifits" class="form-control" rows="3" placeholder="Write Other Benifits"></textarea>
                      </div>

                      <div class="form-group">
                        <label>Categroy</label>
                        <select name="category" class="form-control">
                          <?php foreach($allCategories as $category) : ?>
                          <option value="<?= $category['name']; ?>"><?= $category['name']; ?>
                          <?php endforeach; ?>
                      </option>
                        </select>
                    </div>

                  <!-- <div class="form-group">
                    <label for="exampleInputFile">File input - Images</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input name="company_image" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Images</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div> -->


                  <div class="row form-group">
                    <div class="col-md-12 mb-3 mb-md-0">
                      <label class="text-black" for="company_image">CV</label>
                      <input type="file" name="company_image" class="form-control">
                    </div>
                  </div>

                  <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>

<?= $this->endsection(); ?>