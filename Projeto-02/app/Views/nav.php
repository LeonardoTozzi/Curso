<nav>
    <!-- <div>
        <a href="<?= site_url('/') ?>">Home</a> |
        <a href="<?= site_url('about') ?>">About</a> |
        <a href="<?= site_url('services') ?>">Services</a>
    </div> -->
    <!-- outra forma de cirar hiperligações -->
    <div>
        <?= anchor('/', 'Home')?> |
        <?= anchor('about', 'About')?> |
        <?= anchor('services', 'Services')?>
    </div>
</nav>