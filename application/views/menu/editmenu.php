<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row">
    <div class="col-lg-6">
      <form action="<?= base_url('menu/editmenu/') . $menu['id']; ?>" method="post">
        <div class="form-group">
          <label for="menu">Menu</label>
          <input type="text" class="form-control" id="menu" name="menu" value="<?= $menu['menu']; ?>">
          <?= form_error('menu', '<small class="text-danger">', '</small>'); ?>
        </div>
        <button type="submit" class="btn btn-primary">Update Menu</button>
      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->