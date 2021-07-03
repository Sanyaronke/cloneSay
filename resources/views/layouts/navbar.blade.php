<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ URL::to('/') }}"><img src="{{ asset('images/logo/logo.png') }}" alt=""></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="col d-flex justify-content-end  navbar-nav me-auto mb-2 mb-lg-0">
                <li class="mx-3 nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Nos Solution
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{ URL::to('lanea') }}">Lanea</a></li>
                        <li><a class="dropdown-item" href="{{ URL::to('wekiKap') }}">WekiKap</a></li>
                    </ul>
                </li>
                <li class="mx-3 nav-item">
                    <a class="nav-link" href="{{ URL::to('about') }}">À Propos</a>
                </li>
                <li class="mx-3 nav-item">
                    <a class="nav-link" href="{{ URL::to('deployment') }}">Déployement</a>
                </li>
                <li class="mx-3 nav-item">
                    <a class="nav-link" href="{{ URL::to('contact') }}">Contact</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
