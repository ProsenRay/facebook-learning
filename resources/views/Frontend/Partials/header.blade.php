<header class="header {{request()->routeIs('home') ? 'sticky-top' : ""}}" id="header" >
    <nav class="navbar container">
        <section class="navbar__left">
            <a href="#" class="brand">
                <img style="height: auto; width: 200px;" src="{{asset('Frontend/assets/images/logo.png')}}" alt="">
            </a>
            <div class="burger" id="burger">
                <span class="burger-line"></span>
                <span class="burger-line"></span>
                <span class="burger-line"></span>
            </div>
        </section>
        <section class="navbar__center">
            <span class="overlay"></span>
            <div class="menu" id="menu">
                <div class="menu__header">
                    <span class="menu__arrow"><i class="bx bx-chevron-left"></i></span>
                    <span class="menu__title"></span>
                </div>
                <ul class="menu__inner">
                    <li class="menu__item"><a href="{{route('home')}}" class="menu__link">Home</a></li>
                    <li class="menu__item menu__dropdown">
                        <a href="#" class="menu__link">
                            Courses
                            <i class="bx bx-chevron-right"></i>
                        </a>
                        <div class="submenu megamenu__normal">
                            <ul class="submenu__list">
                                <li><a href="#">Login</a></li>
                                <li><a href="#">Register</a></li>
                                <li><a href="#">Track Order</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </li>
                    <li class="menu__item"><a href="#" class="menu__link">Courses Dashboard</a></li>
                    <li class="menu__item"><a href="#" class="menu__link">Cart</a></li>
                </ul>
            </div>
        </section>
        <section class="navbar__right">
            <div class="whatsapp">

                <a href="#" class="btn solid"><i class="fa-brands fa-whatsapp me-2"></i> Whatsapp</a>
            </div>
            <button class="switch" id="switch">
                <span class="switch__light"><i class="bx bx-sun"></i></span>
                <span class="switch__dark"><i class="bx bx-moon"></i></span>
            </button>
        </section>
    </nav>
</header>
