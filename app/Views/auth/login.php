
 
 
 This is just a sample frontend. please design your own intended for functions only
 
             <nav>
                    <ul class="nav-links">
    <li><a href="<?= base_url('register') ?>">Register</a></li>
    <li><a href="<?= base_url('login') ?>">Login</a></li>
</ul>
                </nav>
            </div>
        </div>
    <div class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
    <div class="card shadow p-4" style="width: 400px;">
        <h3 class="text-center mb-4">Login</h3>
    <?php if (session()->getFlashdata('error')): ?>
          <div class="alert alert-danger">
            <?= session()->getFlashdata('error') ?>
          </div>
    <?php endif; ?>

    <form action="<?= base_url('login/auth') ?>" method="post">
        <?= csrf_field() ?>
      <div class="mb-3">
         <label for="email">Email:</label>
        <input type="email" name="email" class="form-control" id="email" required>
      </div>
      <div class="mb-3">
         <label for="password">Password:</label>
        <input type="password" name="password" class="form-control" id="password" required>
      </div>
      <button  type="submit" class="btn btn-primary w-100">Login</button>
    </form>
     </div>
</div>-->