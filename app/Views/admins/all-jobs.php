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
          <a href="<?= url_to('jobs.create'); ?>" class="btn btn-primary text-white text-center float-right">Create Jobs</a>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Job Title</th>
            <th scope="col">Category</th>
            <th scope="col">Company</th>
            <th scope="col">Job Region</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($allJobs as $job) : ?>
          <tr>
            <th scope="row"><?= $job['id']; ?></th>
            <td><?= $job['title']; ?></td>
            <td><?= $job['category']; ?></td>
            <td><?= $job['company_name']; ?></td>
            <td><?= $job['location']; ?></td>
            <td><a href="<?= url_to('jobs.delete',$job['id']); ?>" class="btn btn-danger text-center">Delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
  </div>
</div>
<br>


<?= $this->endsection(); ?>