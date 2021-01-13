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
                                <h3 class="login-heading mb-4">Selamat Datang!</h3>
                                <form action="user" method="POST">
                                    <div class="form-label-group">
                                        <input type="text" id="inputName" class="form-control"
                                            placeholder="Nama Lengkap" required autofocus>
                                        <label for="inputName">Nama Lengkap</label>
                                    </div>

                                    <div class="form-label-group">
                                        <input type="text" id="inputUsername" class="form-control"
                                            placeholder="Username" required>
                                        <label for="inputUsername">Username</label>
                                    </div>

                                    <div class="row">
                                        <div class="form-label-group col-lg-6">
                                            <input type="password" id="inputPassword" class="form-control"
                                                placeholder="Password" required>
                                            <label for="inputPassword" style="margin-left: 11px;">Password</label>
                                        </div>

                                        <div class="form-label-group col-lg-6">
                                            <input type="password" id="inputRePassword" class="form-control"
                                                placeholder="RePassword" required>
                                            <label for="inputRePassword" style="margin-left: 11px;">Repeat Password</label>
                                        </div>
                                    </div>


                                    <div class="custom-control custom-checkbox mb-3">
                                        <input type="checkbox" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Remember password</label>
                                    </div>
                                    <button
                                        class="btn btn-lg btn-primary btn-block btn-login text-uppercase font-weight-bold mb-2"
                                        type="submit">Sign in</button>
                                    <div class="text-center">
                                        <a class="small" href="#">Forgot password?</a></div>
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
