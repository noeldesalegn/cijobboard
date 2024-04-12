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
          <h2 class="float-left">Categories</h2>
          <a href="<?= url_to('categories.create'); ?>" class="btn btn-primary text-white text-center float-right">Create Categories</a>
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Update</th>
            <th scope="col">Delete</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($allCategories as $category) : ?>
          <tr>
            <th scope="row"><?= $category['id']; ?></th>
            <td><?= $category['name']; ?></td>
            <td><a href="<?= url_to('categories.edit',$category['id']); ?>" class="btn btn-warning text-white text-center">Update</a></td>
            <td><a href="<?= url_to('categories.delete',$category['id']); ?>" class="btn btn-danger text-center">Delete</a></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
  </div>
</div>

<?= $this->endsection(); ?>