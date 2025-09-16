This is just a sample frontend. please design your own intended for functions only
     
     
          <nav>
                    <ul class="nav-links">
    <li><a href="<?= base_url('register') ?>">Register</a></li>
    <li><a href="<?= base_url('login') ?>">Login</a></li>
</ul>

                </nav>
            </div>
        </div>

  <?php $errors = session('errors') ?? []; ?>
  <?php if (session('success')): ?>
    <p style="color:green;"><?= esc(session('success')) ?></p>
  <?php endif; ?>

 <?php if (! empty($errors)): ?>
    <div class="alert alert-danger">
        <ul>
        <?php foreach ($errors as $error): ?>
            <li><?= esc($error) ?></li>
        <?php endforeach ?>
        </ul>
    </div>
  <?php endif; ?>

   <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow p-4" style="width: 450px;">
        <h3 class="text-center mb-4">Register</h3>
  <?= form_open('/register') ?>  <!-- auto-adds CSRF when filter is on -->
<div class="mb-3">
   <label for="floatingInput">Username:</label>
  <input name="name" type="text"  value="<?= old('name') ?>" required class="form-control" id="name">
</div>
<div class="mb-3">
   <label for="floatingInput">Email:</label>
  <input name="email" type="email"  value="<?= old('email') ?>" required class="form-control" id="email">
</div>
<div class="mb-3">
   <label for="floatingInput">Password:</label>
  <input name="password" type="password"  value="<?= old('password') ?>" required class="form-control" id="password">
</div>
<div class="mb-3">
  <label for="floatingInput">Confirm Password:</label>
  <input name="pass_confirm" type="password"  value="<?= old('pass_confirm') ?>" required class="form-control" id="password_confirm">
</div>
    <button type="submit" class="btn btn-success w-100">Register</button>
  <?= form_close() ?>
  </div>
</div>-->
