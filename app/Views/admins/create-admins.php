<?= $this->extend('layouts/admin.php'); ?>

<?= $this->section('content');?>
<br>
<div class="card mt-2 ml-4 mr-4">
  <div class="card-body">
        <form method="POST" action="<?= url_to('admins.store'); ?>" class="ml-4 mr-4">
            <h2>Create Admin</h2>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label"> Username </label>
            <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text">Your UserName</div>
        </div>

        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="exampleInputPassword1">
        </div>
        
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
  </div>
</div>

<?= $this->endsection(); ?>