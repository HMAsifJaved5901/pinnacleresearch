<!-- MOBILE MENU HOLDER -->
<div class="mobile-menu-holder">
    <div class="modal-menu-container">
        <div class="exit-mobile"> <span class="icon-bar1"></span> <span class="icon-bar2"></span></div>
        <ul class="menu-mobile">
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
    <div class="menu-contact">
        <ul>
            <li><i class="fa fa-map-marker"></i><span>40 Park Ave, Brooklyn, New York</span></li>
            <li><i class="fa fa-mobile"></i><span>1-800-111-2222</span></li>
            <li><i class="fa fa-envelope"></i><span>contact@example.com</span></li>
        </ul>
        <ul class="social-media">
            <li><a class="social-facebook" href="#" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
            <li><a class="social-twitter" href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
            <li><a class="social-linkedin" href="#" target="_blank"><i class="fab fa-linkedin"></i></a></li>
        </ul>
    </div>
</div>
<!-- /MOBILE MENU HOLDER -->