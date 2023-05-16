<div class="fixed-top">
    <header class="d-flex flex-column">
        @yield('navbar-class')
        <div class="d-none d-md-block"><a class="navbar-brand brand-size" href="{{ route('home') }}">
            <img alt="Le jobbing avec MonDomiService"
                   class="logo-brand-fr" src="{{ asset('img/logo/yoojo-youpijob-logo.svg') }}" /></a>
        </div>
      
        <div class="position-absolute mx-auto left-0 right-0 top-0 header-button-placement" id="main-search">
            <div class="d-none d-md-block"><button
                    class="btn btn-primary my-lg-0 rounded-circle-box askService d-flex align-items-center px-3 mx-auto py-2"
                    id="ServiceRequest" data-toggle="modal" data-target="#ServiceModal"><i
                        class="icon-plus-circle-solid mr-2 d-none d-sm-block"></i>Demander un service</button></div>
        </div><button class="d-flex d-lg-none btn btn-sm align-items-center justify-content-center w-s h-s p-0"
            data-target="#nav-youpijob" data-toggle="collapse" type="button"><i
                class="icon icon-bars icon-lg"></i></button>
        <div class="collapse navbar-collapse" id="nav-youpijob">
            <ul class="navbar-nav ml-auto">
                @if (Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->first_name }} {{ Auth::user()->last_name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <form method="GET" action="{{ route('profile') }}">
                            <button type="submit" class="dropdown-item">
                                <i class="fa-solid fa-user"></i> Profil
                            </button>
                        </form>
                            <form action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" class="dropdown-item">
                                    <i class="fas fa-sign-out-alt"></i> Se déconnecter
                                </button>
                            </form>
                        </div>
                    </li>
                @else
                    <li class="nav-item d-flex align-items-center"><a class="nav-link"
                            href="https://yoojo.fr/devenez-prestataire">Devenir prestataire</a></li>
                    <li class="nav-item d-flex align-items-center"><a id="loginMenuBtn" class="nav-link"
                            data-toggle="modal" data-target="#loginModal" href="#">Connexion</a></li>
                    <li class="nav-item d-flex align-items-center"><a class="nav-link"
                            href="{{ route('register') }}">Inscription</a></li>
            </ul>
            @endif
        </div>
        </nav>
    </header>
</div>
<!-- Connexion Modal -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title" id="loginModalLabel">Content de vous revoir !</h1>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Connectez-vous pour accéder à votre compte.</p>
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="far fa-envelope" style="color: #8a939e;"></i>
                                </span>
                            </div>
                            <input type="email" class="form-control @error('email','loginErrors') is-invalid @enderror"
                                name="email" placeholder="Adresse e-mail">
                        </div>
                        @error('email', 'loginErrors')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="input-group-prepend">
                                <span class="input-group-text">
                                    <i class="fas fa-lock" style="color: #8a939e;"></i>
                                </span>
                            </div>
                            <input type="password"
                                class="form-control @error('password', 'loginErrors') is-invalid @enderror"
                                name="password" placeholder="Mot de passe">
                        </div>
                        @error('password', 'loginErrors')
                            <div style="color: red;">{{ $message }}</div>
                        @enderror
                    </div>
                    @error('invalid', 'loginErrors')
                        <div style="color: red;">{{ $message }}</div>
                    @enderror
                    <div class="form-group form-row align-items-center">
                        <div class="col-auto">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" name="remember_token">
                                <label class="form-check-label" for="remember_token">Se souvenir de moi</label>
                            </div>
                        </div>
                        <div class="col-auto ml-auto">
                            <a href="#" class="forgot-password-link">Mot de passe oublié ?</a>
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Se connecter</button>
                    </div>
                </form>


            </div>
            <div class="modal-footer d-flex justify-content-center">
                <span>Pas encore membre ? <a href="#" class="register-link">Créez un compte</a></span>
            </div>
        </div>
    </div>
</div>
<!-- End Connexion Modal -->
<!-- Service Modal -->
<div id="ServiceModal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Demander un Service</h1>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">
                            <i class="fas fa-search" style="color: #8a939e;"></i>
                        </span>
                    </div>
                    <input type="text" class="form-control" placeholder="Rechercher un service...">
                </div>
                <div class="button-container">
                    @forelse ($serviceCategories as $serviceCategory)
                        <div class="Block">
                            <a class="elevated-button"
                                href="{{ route('services.show', ['serviceCategory' => $serviceCategory->slug]) }}">
                                <div class="button-content">
                                    <div class="image-container">
                                        <img src="{{ asset('img/services/' . $serviceCategory->image) }}"
                                            alt="{{ $serviceCategory->name }}">
                                    </div>
                                    <span class="label">{{ $serviceCategory->name }}</span>
                                </div>
                                <i class="fas fa-angle-right"></i>
                            </a>
                        </div>
                    @empty
                        nothing font
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</div>

<!-- End Service Modal -->
@if ($errors->loginErrors->any())
    <script>
        //wait a sectond before showing the modal
        setTimeout(function() {
            $('#loginModal').modal('show');
        }, 1000);
    </script>
@endif
