<!-- Dark overlay -->
<div class="overlay"></div>
<!-- AkhirDark overlay -->

<ul class="nav justify-content-center fixed-top mt-3">
    <li class="nav-item">
        <a class="nav-link btn-customized" href="<?= base_url('store'); ?>" data-toggle="tooltip" data-placement="bottom" title="Home">
            <i class="fas fa-home"></i>
        </a>
    </li>

    <li class="nav-item">
        <a class="btn btn-primary btn-customized" id="open-search" role="button" data-toggle="tooltip" data-placement="bottom" title="Search">
            <i class="fas fa-search"></i>
        </a>
    </li>
</ul>
<!-- Search Bar -->
<nav class="search_bar text-center justify-content-center">
    <form method="post" action="<?= base_url('etalase'); ?>">
        <input type="text" name="keyword" placeholder="Cari Produk.....">
        <button type="submit" name="submit"><span class="fas fa-search fa-2x" style="color:#0b86f8;"></span></button>
    </form>
</nav>
<!-- Akhir Search Bar -->