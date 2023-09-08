<div class="side-nav my-auto h-94vh py-4 px-7 my-auto bg-white rounded-33">
    <div class="nav-btn h-92">
        <ul class="navbar-nav ">
            <li>
                <a href="{{ route('user.index') }}" class="nav-link d-flex my-auto">
                    <img class="me-3" src="{{ asset('img/home.svg') }}" alt="">
                    <span>Home</span>
                    <i class="fa-solid fa-chevron-right ms-auto my-auto"></i>
                </a>
            </li>
            <li>
                <a href="{{ route('user.latestCraze') }}" class="nav-link d-flex my-auto">
                    <img class="me-3" src="{{ asset('img/icon2.svg') }}" alt="">
                    <span>latest craze 🔥</span>
                    <i class="fa-solid fa-chevron-right ms-auto my-auto"></i>
                </a>
            </li>
            <li>
                <a href="{{route('user.heart_break')}}" class="nav-link d-flex my-auto">
                    <img class="me-3" src="{{ asset('img/heart.svg') }}" alt="">
                    <span>Heartbreak corner</span>
                    <i class="fa-solid fa-chevron-right ms-auto my-auto"></i>
                </a>
            </li>
            <li>
                <a href="{{route('user.location')}}" class="nav-link d-flex my-auto">
                    <img class="me-3" src="{{ asset('img/map.svg') }}" alt="">
                    <span>Locations</span>
                    <i class="fa-solid fa-chevron-right ms-auto my-auto"></i>
                </a>
            </li>
            <li>
                <a href="{{route('group.index')}}" class="nav-link d-flex my-auto">
                    <img class="me-3" src="{{ asset('img/user.svg') }}" alt="">
                    <span>Group therapy</span>
                    <i class="fa-solid fa-chevron-right ms-auto my-auto"></i>
                </a>
            </li>
            <li>
                <a href="help.html" class="nav-link d-flex my-auto">
                    <img class="me-3" src="{{ asset('img/icon5.svg') }}" alt="">
                    <span>Help</span>
                    <i class="fa-solid fa-chevron-right ms-auto my-auto"></i>
                </a>
            </li>
            <li>
                <a href="advertising.html" class="nav-link d-flex my-auto">
                    <img class="me-3" src="{{ asset('img/icon6.svg') }}" alt="">
                    <span>Advertising</span>
                    <i class="fa-solid fa-chevron-right ms-auto my-auto"></i>
                </a>
            </li>
            <li>
                <a href="aboutus.html" class="nav-link d-flex my-auto">
                    <img class="me-3" src="{{ asset('img/icon7.svg') }}" alt="">
                    <span>About Us</span>
                    <i class="fa-solid fa-chevron-right ms-auto my-auto"></i>
                </a>
            </li>
            <li>
                <a href="privacypolicy.html" class="nav-link d-flex my-auto">
                    <img class="me-3" src="{{ asset('img/icon8.svg') }}" alt="">
                    <span>Privacy Policy</span>
                    <i class="fa-solid fa-chevron-right ms-auto my-auto"></i>
                </a>
            </li>
        </ul>
    </div>
    <div class="mt-auto">
        <ul class="navbar-nav ">
            <li class="mt-auto">
                <form action="{{ route('user.logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="btn nav-link d-flex my-auto"><img class="me-3"
                            src="{{ asset('img/logout.svg') }}" alt=""><span>Logout</span><i
                            class="fa-solid fa-chevron-right ms-auto my-auto"></i></button>
                </form>
            </li>
        </ul>
    </div>
</div>
