<link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">

<div class="registerContainer">
    <div class="leftContainer">
        <div style="width: 100%;">
            <img src="{{asset('assets/images/rademLogo.png')}}" class="rademLogo">
        </div>
    </div>
    <div class="registerRightContainer">

        <div class="loginFormContainer">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="form-group">
                    <label class="loginLabel" for="nom">Nom</label>
                    <div class="col-12">
                        <input id="nom" type="text" class="registerInput @error('nom') is-invalid @enderror" name="nom" value="{{ old('nom') }}" required autocomplete="nom" autofocus>
                    </div>
                    @error('nom')
                            <span class="loginAlert" role="alert">
                                <strong> * {{ $message }}</strong>
                            </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="loginLabel" for="prenom">Prénom</label>
                    <div class="col-12">
                        <input id="prenom" type="text" class="registerInput @error('prenom') is-invalid @enderror" name="prenom" value="{{ old('prenom') }}" required autocomplete="prenom" autofocus>
                    </div>
                    @error('prenom')
                            <span class="loginAlert danger" role="alert">
                                <strong> * {{ $message }}</strong>
                            </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="loginLabel" for="telephone">Téléphone</label>
                    <div class="col-12">
                        <input id="telephone" type="tel" class="registerInput @error('telephone') is-invalid @enderror" name="telephone" value="{{ old('telephone') }}" required autocomplete="telephone" autofocus>
                    </div>
                    @error('telephone')
                            <span class="loginAlert" role="alert">
                                <strong> * {{ $message }}</strong>
                            </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="loginLabel" for="email">Email</label>
                    <div class="col-12">
                        <input id="email" type="email" class="registerInput @error('email') is-invalid @enderror" name="email"  value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    @error('email')
                            <span class="loginAlert" role="alert">
                                <strong> * {{ $message }}</strong>
                            </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="loginLabel" for="password">Mot de passe</label>
                    <div class="col-12">
                        <input id="password" type="password" class="registerInput @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    </div>
                    @error('password')
                            <span class="loginAlert" role="alert">
                                <strong> * {{ $message }}</strong>
                            </span>
                    @enderror
                </div>

                <div class="form-group">
                    <label class="loginLabel" for="password-confirm">Confirmer mot de passe</label>
                    <div class="col-12">
                        <input id="password-confirm" type="password" class="registerInput" name="password_confirmation" required autocomplete="new-password">
                    </div>
                    @error('password')
                            <span class="loginAlert" role="alert">
                                <strong> * {{ $message }}</strong>
                            </span>
                    @enderror
                </div>

                
                <div class="form-group text-center row m-t-20">
                    <div class="col-12">
                        <button type="submit" class="loginButton">
                            Register
                        </button>
                    </div>
                </div>


            </form>
        </div>

        <div class="links">
            <div style="display: flex; justify-content: space-around;">
                <div><a class="loginLink" href="{{ route('login') }}">Tu a déjà un compte ?</a></div>
            </div>
            
        </div>

    </div>
</div>

<footer class="logimapfooter">
    <img src="{{asset('assets/images/logimapfooter.svg')}}">
</footer>
