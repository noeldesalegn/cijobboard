<?= $this->extend('layouts/admin.php'); ?>

<?= $this->section('content');?>

<br>
<div class="card mt-2 ml-4 mr-4">
  <div class="card-body">
        <form method="POST" action="<?= url_to('categories.update',$category['id']); ?>" class="ml-4 mr-4">
            <h2>Edit categories</h2>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">categories</label>
            <input value="<?= $category['name']; ?>" type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Create your categories here.</div>
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary">update</button>
        </form>
  </div>
</div>

<?= $this->endsection(); ?>