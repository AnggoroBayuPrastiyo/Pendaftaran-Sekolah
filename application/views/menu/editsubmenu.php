<!-- Begin Page Content -->
<div class="container-fluid">

  <!-- Page Heading -->
  <h1 class="h3 mb-4 text-gray-800"><?= $title; ?></h1>

  <div class="row">
    <div class="col-lg-6">
      <form action="<?= base_url('menu/editsubmenu/') . $submenu['id']; ?>" method="post">
        <div class="form-group">
          <label for="title">Title</label>
          <input type="text" class="form-control" id="title" name="title" value="<?= $submenu['title']; ?>">
          <?= form_error('title', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="menu_id">Menu</label>
          <select name="menu_id" id="menu_id" class="form-control">
            <?php foreach ($menu as $m) : ?>
            <option value="<?= $m['id']; ?>" <?= ($m['id'] == $submenu['menu_id']) ? 'selected' : ''; ?>>
              <?= $m['menu']; ?>
            </option>
            <?php endforeach ?>
          </select>
          <?= form_error('menu_id', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="url">URL</label>
          <input type="text" class="form-control" id="url" name="url" value="<?= $submenu['url']; ?>">
          <?= form_error('url', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
          <label for="icon">Icon</label>
          <input type="text" class="form-control" id="icon" name="icon" value="<?= $submenu['icon']; ?>">
          <?= form_error('icon', '<small class="text-danger">', '</small>'); ?>
        </div>
        <div class="form-group">
          <div class="form-check">
            <input type="checkbox" class="form-check-input" value="1" id="is_active" name="is_active"
              <?= ($submenu['is_active'] == 1) ? 'checked' : ''; ?>>
            <label for="is_active" class="form-check-label">Active?</label>
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Update Submenu</button>
      </form>
    </div>
  </div>

</div>
<!-- /.container-fluid -->