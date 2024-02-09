<style>
    .sidebar li .submenu {
        list-style: none;
        margin: 0;
        padding: 0;
        padding-left: 1rem;
        padding-right: 1rem;
    }
</style>
<nav class="sidebar sidebar-offcanvas fixed-nav" id="sidebar">
    <ul class="nav">
        <li class="nav-item nav-profile">
            <div class="nav-link">
                {{-- <div class="profile-image">
                          <img src="images/faces/face5.jpg" alt="image" />
                      </div> --}}
                <div class="profile-name">
                    <p class="name">
                        Welcome Admin
                    </p>
                    {{-- <p class="designation">
                              Super Admin
                          </p> --}}
                </div>
            </div>
        </li>
        <li class="{{ request()->is('dashboard*') ? 'nav-item active' : 'nav-item' }}">
            <a class="{{ request()->is('dashboard*') ? 'nav-link active' : 'nav-link' }}"
                href="{{ route('/dashboard') }}">
                <i class="fa fa-home menu-icon"></i>
                <span class="menu-title">Dashboard</span>
            </a>
        </li>
        <li class="{{ request()->is('list-our-products*') ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" data-toggle="collapse" href="#master" aria-expanded="false" aria-controls="master">
                <i class="fa fa-th-large menu-icon"></i>
                <span class="menu-title">Master</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="master">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link"
                            href="{{ route('list-our-products') }}">List Product Categories</a></li>
                </ul>
            </div>
        </li>
        <li class="{{ request()->is('list-aboutus*') ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" data-toggle="collapse" href="#home" aria-expanded="false" aria-controls="home">
                <i class="fas fa-bars menu-icon"></i>
                <span class="menu-title">Home</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="home">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ route('list-animated-video') }}">Animated Video</a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link" href="{{ route('list-aboutus') }}">About Us</a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link"
                            href="{{ route('list-product') }}">Product</a></li>
                    <li class="nav-item d-none d-lg-block"><a class="nav-link"
                            href="{{ route('list-our-products-details') }}"> Our Product Details</a></li>
                </ul>
            </div>
        </li>
        <li class="{{ request()->is('list-vision-mission*') ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" data-toggle="collapse" href="#about" aria-expanded="false" aria-controls="about">
                <i class="fas fa-bars menu-icon"></i>
                <span class="menu-title">About</span>
                <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="about">
                <ul class="nav flex-column sub-menu">
                    <li class="nav-item d-none d-lg-block"><a class="nav-link"
                            href="{{ route('list-vision-mission') }}">Vision Mission</a></li>
                </ul>
            </div>
        </li>
        <li class="{{ request()->is('list-product-services*') ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" href="{{ route('list-product-services') }}">
                <i class="fas fa-newspaper menu-icon"></i>
                <span class="menu-title">Product Services</span>
            </a>
        </li>     
        <li class="{{ request()->is('list-media*') ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" href="{{ route('list-media') }}">
                <i class="fas fa-newspaper menu-icon"></i>
                <span class="menu-title">Media</span>
            </a>
        </li>
        <li class="{{ request()->is('list-contactus-form*') ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" href="{{ route('list-contactus-form') }}">
                <i class="fas fa-window-restore menu-icon"></i>
                <span class="menu-title">Contact Us</span>
            </a>
        </li>
        <li class="{{ request()->is('log-out*') ? 'nav-item active' : 'nav-item' }}">
            <a class="nav-link" href="{{ route('log-out') }}">
                <i class="fas fa-power-off menu-icon"></i>
                <span class="menu-title">Logout</span>
            </a>
        </li>



    </ul>
</nav>
<!-- partial -->

<script></script>
