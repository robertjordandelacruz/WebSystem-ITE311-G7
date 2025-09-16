This is just a sample frontend. please design your own, intended for functions only
                <nav>
                    <ul class="nav-links">
                       <li><a href="<?= base_url('dashboard') ?>">Dashboard</a></li>
                        <li><a href="<?= base_url('about') ?>">About</a></li>
                        <li><a href="<?= base_url('contact') ?>">Contact</a></li>
</ul>
                </nav>
            </div>
        </div>

  <div class="container mt-5">
    <div class="card shadow p-4">
        <h2 class="page-title">Welcome, <?= session()->get('name') ?>!</h2>
        <p class="content-text">
            You are logged in as <b><?= session()->get('role') ?></b>.
        </p>
        <a href="<?= base_url('logout') ?>" class="btn btn-danger">Logout</a>
    </div>
</div>-->

