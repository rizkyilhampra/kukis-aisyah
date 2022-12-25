<div class="main-sidebar sidebar-style-2">
    <aside id="sidebar-wrapper">
        <div class="sidebar-brand">
            <a href="/admin">Kukis Aisyah</a>
        </div>
        <div class="sidebar-brand sidebar-brand-sm">
            <a href="/admin">KA</a>
        </div>
        <ul class="sidebar-menu">
            <li class="menu-header">Menu</li>
            <li class="nav-item <?php echo ((url_is('/admin'))) ? "active" : ''; ?>">
                <a class="nav-link" href="/admin">
                    <i class="far fa-square"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li class="nav-item <?php echo ((url_is('/admin/product*'))) ? "active" : ''; ?>">
                <a class="nav-link" href="/admin/product">
                    <i class="far fa-square"></i>
                    <span>Produk</span>
                </a>
            </li>
            <li class="nav-item <?php echo ((url_is('admin/pesanan*'))) ? "active" : ''; ?>">
                <a class="nav-link" href="/admin/pesanan">
                    <i class="far fa-square"></i>
                    <span>Pesanan</span>
                </a>
            </li>
        </ul>
    </aside>
</div>