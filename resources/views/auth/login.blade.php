<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('assetsh/img/icon.png') }}" rel="icon">
    <link href="{{ asset('assetsh/img/apple-touch-icon.png') }}" rel="apple-touch-icon">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <style>
        body {
            background-repeat: no-repeat;
            background-size: cover;
            font-family: 'Great Vibes';
            font-size: 34px;
            background-position: center;
            background-attachment: fixed;
            background-image: url({{ asset('img/bgLogin.png') }})
        }
        
        .input {
            border: none;
            outline: none;
            position: relative;
            margin: 0 0 20px 0;
            padding: 0;
            box-sizing: border-box;
            color: black;
        }
        
        h1 {
            color: #97BCDB;
            font-size: 40px;
        }
        
        .column1 {
            font-size: 24px;
            float: left;
            width: 400px;
            text-align: left;
            margin-top: 100px;
            margin-left: 600px;
            border: 2px solid #97BCDB;
            padding: 30px 30px;
            color: #9c446d;
            border-radius: 50px 20px;
        }
        
        .container {
            text-align: center;
        }

        .logo {
    font-size: 32px;
    margin: 0;
    padding: 0;
    line-height: 0.5;
    font-weight: 700;
    letter-spacing: 1px;
    font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}

    </style>
        <link href='{{ asset('css/app.css') }}' rel='stylesheet'>

</head>
<body>
    <div class="container">
        <div style="margin-left: 20px;margin-top: 40px;font-family: Great Vibes;">
            <h1 class="logo"><a href="index1.html" style="color: #97bcdb">HappilyEver<br>
                <span style="font-family: 'Brush Script MT', cursive;color: #9c446d">for weddings</span></a></h1>
        </div>
       
        <div class="column1">
            {{-- <form action="{{ route('store.login') }}" style="margin-top: 100px;">
                <h2>Login</h2><br>
                <label>Email</label>
                <br>
                <input type="text" class="input mt-2" name="email">
                @error('email')
                {{ dd('bander') }}
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
                <br>
                <label>Password</label>
                <br>
                <input type="password" class="input mt-2" name="password">
                @error('password')
                <div class="alert alert-danger mt-2">{{ $message }}</div>
                @enderror
                <br>
                <input type="checkbox" value="lsRememberMe" id="rememberMe"> 
                <label for="rememberMe">Remember me</label>
                <br> 
                <button type="submit" style="background-color: #9c446d;color: 
                #97BCDB;margin-top: 20px;padding:5px 20px;border-radius: 10px" >Login</button>
             </p>

            </form> --}}
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="row mb-3">
                    <label for="email" >{{ __('E-Mail Address') }}</label>

                    <div class="col-md-6">
                        <input id="email" type="email" class="@error('email') is-invalid @enderror mt-2" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="row mb-3">
                    <label for="password">{{ __('Password') }}</label>

                    <div class="col-md-6">
                        <input id="password" type="password" class="@error('password') is-invalid @enderror mt-2" name="password" required autocomplete="current-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                               {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>

              
                            <input  type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                            <label  for="remember">
                                {{ __('Remember Me') }}
                            </label>
                  

                               <br />

                        <button type="submit" class="btn btn-primary mt-4">
                            {{ __('Login') }}
                        </button>

                                <br />

                        @if (Route::has('password.request'))
                            <a class="btn btn-link mt-4" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
            </form>
        </div>


    </div>
</body>
</html>