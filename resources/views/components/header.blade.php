<div class="header">
    <div class="header__main">
        <div class="header__main__card header__main__card--logo">
           <a href="/"> <img  src="{{ asset('images/logo.svg') }}" alt=""> </a>
        </div>
        <div class="header__main__card header__main__card--emergency">
           <a href=""> <div>
                <img src="{{ asset('images/Icons/emergency.png') }}" alt="">
                <p>Emergency HelpLine
                    <span>18001027827</span>
                </p>
            </div> </a>
        </div>
        <div class="header__main__card header__main__card--mob-hide">
            <p>Request a Call Back</p>
        </div>
        <div class="header__main__card header__main__card--mob-hide">
            <p>Get a Second Medical Opinion</p>
        </div>
        <div class="header__main__card header__main__card--web-search header__main__card--mob-hide">
            <form action="">
                <div class="filter__fields-wrapper">

                    <img src="{{ asset('images/Icons/search.png') }}" alt="">

                    <input type="text" placeholder="Search">

                </div>
            </form>
        </div>
        <div class="header__main__card header__main__card--desk-hide header__main__card--mob-nav">
            <img src="{{asset('images/Icons/search.png')}}" alt="">
            <img  id="nav-toggle" src="{{asset('images/Icons/nav.png')}}" alt="">
        </div>
    </div>
    <div class="header__nav " id="star-navbar">
        <ul class="header__nav__options">
            <li class="header__nav__option header__nav__option--dropdown">
                <a href="#">Centers of Excellence</a>
                <ul class="header__nav__option--dropdown__options">
                    <li class="header__nav__option--dropdown header__nav__option--nested-dropdown"><a
                            href="#">sjjksfkslfh sdfh</a>
                        <ul>
                            <li><a href="#">Abc</a>
                            </li>
                            <li><a href="#">Abc</a></li>
                            <li><a href="#">Abc</a></li>
                        </ul>
                    </li>
                    <li class="header__nav__option--dropdown header__nav__option--nested-dropdown"><a href="#">Test 2</a>
                        <ul>
                            <li><a href="#">Shibli</a></li>
                            <li><a href="#">Abc</a></li>
                            <li><a href="#">Abc</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Abc</a></li>
                    <li><a href="#">Abc</a></li>
                </ul>
            </li>
            <li class="header__nav__option">
                <a href="#">Doctors</a>
            </li>
            <li class="header__nav__option">
                <a href="#">Procedures</a>
            </li>
            <li class="header__nav__option">
                <a href="#">International Patients</a>
            </li>
            <li class="header__nav__option">
                <a href="#">Health Checkups</a>
            </li>
            <li class="header__nav__option">
                <a href="#">About</a>
            </li>
            <li class="header__nav__option">
                <a href="#">Contact Us</a>
            </li>
        </ul>
    </div>
</div>
<div class="header-gap"></div>