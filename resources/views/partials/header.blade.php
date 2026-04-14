<!-- HEADER -->
<header id="header-bar" class="header-1">
    <div class="container">
        <div class="header-wrap header-wrap1">
            <div class="logo logo-1"><a href="{{route('home')}}"><img class="img-fluid" src="{{ asset('assets/images/logo.png') }}" alt="Lawyers"></a></div>
            <div class="header-contact">
                <div class="header-info"><span class="info-circle"><i class="fa fa-phone"></i></span> 1-800-000-111</div>
                <div class="header-info"><span class="info-circle"><i class="fa fa-envelope"></i></span> contact@example.com</div>
            </div>
            <div class="nav-button-holder"> <button type="button" class="nav-button"> <span class="icon-bar"></span> </button></div>
        </div>
        <div class="nav-holder nav-holder-1">
            <ul class="menu-nav  menu-nav-1">
                <li class="menu-item current-menu-item">
                    <a href="{{ route('home') }}" >Home</a>
                </li>
                <li class="menu-item ">
                    <a href="{{ route('practice.index') }}">Practice Areas</a>
                </li>
                <li class="menu-item ">
                    <a href="{{ route('attorney.index') }}">Attorneys</a>
                </li>
                <li class="menu-item ">
                    <a href="{{ route('cases.index') }}">Case Studies</a>
                </li>
                <li class="menu-item ">
                    <a href="{{ route('blog.index') }}">Blog</a>
                </li>
                <li class="menu-item ">
                    <a href="{{ route('contact.index') }}">Contact</a>
                </li>
                <li class="menu-item menu-item-has-children">
                    <a href="#">Pages</a>
                    <ul class="sub-menu">
                        <li class="menu-item"><a href="{{ route('about.index') }}">About Us</a></li>
                        <li class="menu-item"><a href="{{ route('gallery.index') }}">Gallery</a></li>
                        <li class="menu-item"><a href="{{ route('faq.index') }}">FAQ</a></li>
                        <li class="menu-item"><a href="{{ route('testimonial.index') }}">Testimonials</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</header>
<!-- /HEADER -->