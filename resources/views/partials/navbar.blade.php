<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container d-flex justify-content-end">
        <a class="navbar-brand text-uppercase fw-bold" href="#">Gobobo</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
            <ul class="navbar-nav d-flex gap-3">
                <li class="nav-item">
                    <a class="nav-link disabaled" href="/categories">Category</a>
                </li>
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Welcome back, {{ auth()->user()->name }}
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="/dashboard">My Dashboard</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li>
                                <form action="/logout" method="POST">
                                    @csrf
                                    <button type="submit" class="dropdown-item">Logout</button>
                                </form>
                            </li>
                        </ul>
                    </li>
                @else
                    <li class="nav-item">
                        <a class="nav-link text-white" href="/signin">Sign In</a>
                    </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>


<!-- {{-- <script>
    let nav = document.querySelector("nav");

    window.addEventListener("scroll", function() {
        if(window.pageYOfset > 500) {
            nav.classList.add("bg-dark", "shadow");
        } else {
            nav.classList.add("", "shadow");
        }
    })
</script> --}} -->
