<?= $this->extend('layouts/admin.php'); ?>

<?= $this->section('content');?>

<br>
<div class="card mt-2 ml-4 mr-4">
  <?php if(session()->getFlashdata('save')) : ?>
      <div class="alert alert-success"> <?= session()->getFlashdata('save'); ?> </div>
  <?php endif; ?>
<br>
  <?php if(session()->getFlashdata('edit')) : ?>
      <div class="alert alert-success"> <?= session()->getFlashdata('edit'); ?> </div>
  <?php endif; ?>
  <?php if(session()->getFlashdata('delete')) : ?>
      <div class="alert alert-success"> <?= session()->getFlashdata('delete'); ?> </div>
  <?php endif; ?>
  <div class="card-body">
      <table class="table table-striped">
          <h2 class="float-left">Jobs</h2>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">CV</th>
            <th scope="col">Job Id</th>
            <th scope="col">Job title</th>
            <th scope="col">Company</th>
            <th scope="col">Email</th>
            <th scope="col">Location</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($allApps as $apps) : ?>
          <tr>
            <th scope="row"><?= $apps['id']; ?></th>
            <td><a class="btn btn-success" href="<?= base_url('assets/cvs/'.$apps['cv']); ?>" target="_blank" >CV</a></td>
            <td><?= $apps['job_id']; ?></td>
            <td><?= $apps['job_title']; ?></td>
            <td><?= $apps['company_name']; ?></td>
            <td><?= $apps['email']; ?></td>
            <td><?= $apps['location']; ?></td>
            <td><a href="<?= url_to('apps.delete',$apps['id']); ?>" class="btn btn-danger text-center">Delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
  </div>
</div>
<br>


<?= $this->endsection(); ?>