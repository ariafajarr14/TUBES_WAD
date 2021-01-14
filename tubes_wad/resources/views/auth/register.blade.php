<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Klinik-Ku</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/css/loginstyle.css">
</head>

<body>
    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="d-none d-md-flex col-md-4 col-lg-6 bg-image"></div>
            <div class="col-md-8 col-lg-6">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9 col-lg-8 mx-auto">
                                <h3 class="login-heading mb-4">Ayo Gabung Bersama Kami!</h3>
                                <form action="{{ route('register') }}" method="POST">
                                    @csrf

                                    <div class="form-label-group">
                                        <input type="text" name="name" id="inputNama"
                                            class="form-control  @error('name') is-invalid @enderror"
                                            placeholder="Nama Lengkap" value="{{ old('name') }}" required autofocus>
                                        <label for="inputNama">Nama Lengkap</label>
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="form-label-group">
                                        <input type="email" name="email" id="inputEmail"
                                            class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Email" value="{{ old('email') }}" required>
                                        <label for="inputEmail">Email</label>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>

                                    <div class="row">
                                        <div class="form-label-group col-lg-12">
                                            <input type="password" name="password" id="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Password" value="{{old('password')}}" required
                                                autocomplete="new-password">
                                            <label for="password" style="margin-left: 11px;">Password</label>
                                            @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-label-group col-lg-12">
                                            <input type="password" name="password_confirmation" id="password-confirm"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Password" value="{{old('password')}}" required
                                                autocomplete="new-password">
                                            <label for="password-confirm" style="margin-left: 11px;">Konfirmasi Password</label>
                                            
                                        </div>
                                    </div>

                                    <button
                                        class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2 mt-2"
                                        type="submit">Sign Up</button>
                                    <hr class="mt-2">
                                    <div class="text-center">
                                        Sudah punya akun ?<a href="login">Sign In</a></div>
                                    <div class="text-center">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
