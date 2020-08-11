<link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
<link href="{{ asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">

<div class="loginContainer">
    <div class="leftContainer">
        <div style="width: 100%;">
            <img src="{{asset('assets/images/rademLogo.png')}}" class="rademLogo">
        </div>
    </div>
    <div class="rightContainer">

        <div class="loginFormContainer">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label class="loginLabel" for="email">Email</label>
                    <div class="col-12">
                        <input id="email" type="email" class="usernameInput loginInput @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    @error('email')
                            <span class="loginAlert" role="alert">
                                <strong> * {{ $message }}</strong>
                            </span>
                    @enderror
                </div>

                <div class="form-group ">
                    <label class="loginLabel" for="password">Mot de passe</label>
                    <div class="col-12">
                        <input id="password" type="password" class="passwordInput loginInput @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="current-password">
                    </div>
                    @error('password')
                            <span class="loginAlert" role="alert">
                                <strong> * {{ $message }}</strong>
                            </span>
                    @enderror
                </div>

                <div class="form-group row">
                    <div class="col-12">
                        <div class="remember_row">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label class="Remember" for="remember">
                                Se souvenir de moi
                            </label>
                        </div>
                    </div>
                </div>

                <div class="form-group text-center row m-t-20">
                    <div class="col-12">
                        <button type="submit" class="loginButton">
                            {{ __('Login') }}
                        </button>
                    </div>
                </div>


            </form>
        </div>

        <div class="links">
            <div style="display: flex; justify-content: space-around;">
                <div>
                    @if (Route::has('password.request'))
                        <a class="loginLink" href="{{ route('password.request') }}">Mot de passe oublié ?</a>
                        @endif
                </div>
                <div><a class="loginLink" href="{{ route('register') }}">Créer un compte ?</a></div>
            </div>
            
        </div>

    </div>
</div>

<footer class="logimapfooter">
    <img src="{{asset('assets/images/logimapfooter.svg')}}">
</footer>
