<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <script src="/js/jquery-3.5.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

    <script>
        $(document).ready(function () {
            $(".menu-icon").on("click", function () {
                $("nav ul").toggleClass("showing");
            });
        });

        // Scrolling Effect

        $(window).on("scroll", function () {
            if ($(window).scrollTop()) {
                $('nav').addClass('black');
            } else {
                $('nav').removeClass('black');
            }
        })

    </script>

    

    <title>Hello, world!</title>
</head>

<body>
    <!-- home -->
    <section class="home" id="home">
        <header>
            <nav>
                <div class="menu-icon">
                    <i class="fa fa-bars fa-2x"></i>
                </div>
                <div class="logo">
                    <a href="#home" class="page-scroll"><img src="/img/klinikku3.png" alt="" style="width: 200px; height:200px;"></a>
                </div>
                <div class="menu">
                    <ul>
                        <li><a href="#home" class="page-scroll">Home</a></li>
                        <li><a href="#about" class="page-scroll">About us</a></li>
                        <li><a href="#services" class="page-scroll">Services</a></li>
                        <li><a href="#contacts" class="page-scroll">Contacts</a></li>
                        <li><a href="#team" class="page-scroll">Team</a></li>
                        <li><a href="#"><button type="button" class="btn"
                                    style="color:white; background-color: #65CFBB; margin-left:100px;">Login</button></a>
                        </li>
                        <li><a href="#register" class="page-scroll"><button type="button" class="btn"
                                    style="color:white; background-color: #65CFBB; margin-left:-70px;">Register</button></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
    </section>

    <!-- About us -->
    <section class="about" id="about">
        <div class="content">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">About us</h2>
                    <center>
                        <hr>
                    </center>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio consequatur a, amet aut ab quos ipsa?
                Maiores beatae numquam voluptates voluptatibus, perspiciatis, consequatur, porro explicabo quisquam nemo
                totam quia sit.
                Nisi cupiditate repellendus et accusamus doloremque. Minus et, sed suscipit cum, ducimus non maiores
                eligendi quae aliquam aperiam vitae eveniet voluptatibus. Provident soluta pariatur nesciunt odio
                deserunt fuga, ab repudiandae.
                Dicta iure ipsa laborum odio autem mollitia? Aspernatur eius, asperiores cupiditate dignissimos adipisci
                illo accusamus, quam quasi placeat aliquam vero impedit labore repudiandae voluptatibus autem
                architecto, quia similique. Sequi, recusandae?</p>
        </div>
    </section>

    <!-- Services -->
    <section class="services" id="services">
        <div class="content">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">Services</h2>
                    <center>
                        <hr>
                    </center>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio consequatur a, amet aut ab quos ipsa?
                Maiores beatae numquam voluptates voluptatibus, perspiciatis, consequatur, porro explicabo quisquam nemo
                totam quia sit.
                Nisi cupiditate repellendus et accusamus doloremque. Minus et, sed suscipit cum, ducimus non maiores
                eligendi quae aliquam aperiam vitae eveniet voluptatibus. Provident soluta pariatur nesciunt odio
                deserunt fuga, ab repudiandae.
                Dicta iure ipsa laborum odio autem mollitia? Aspernatur eius, asperiores cupiditate dignissimos adipisci
                illo accusamus, quam quasi placeat aliquam vero impedit labore repudiandae voluptatibus autem
                architecto, quia similique. Sequi, recusandae?</p>
        </div>
    </section>

    <!-- Contacts -->
    <section class="contacts" id="contacts">
        <div class="content">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">Contacts</h2>
                    <center>
                        <hr>
                    </center>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio consequatur a, amet aut ab quos ipsa?
                Maiores beatae numquam voluptates voluptatibus, perspiciatis, consequatur, porro explicabo quisquam nemo
                totam quia sit.
                Nisi cupiditate repellendus et accusamus doloremque. Minus et, sed suscipit cum, ducimus non maiores
                eligendi quae aliquam aperiam vitae eveniet voluptatibus. Provident soluta pariatur nesciunt odio
                deserunt fuga, ab repudiandae.
                Dicta iure ipsa laborum odio autem mollitia? Aspernatur eius, asperiores cupiditate dignissimos adipisci
                illo accusamus, quam quasi placeat aliquam vero impedit labore repudiandae voluptatibus autem
                architecto, quia similique. Sequi, recusandae?</p>
        </div>
    </section>

    <!-- Team -->
    <section class="team" id="team">
        <div class="content">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">Team</h2>
                    <center>
                        <hr>
                    </center>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio consequatur a, amet aut ab quos ipsa?
                Maiores beatae numquam voluptates voluptatibus, perspiciatis, consequatur, porro explicabo quisquam nemo
                totam quia sit.
                Nisi cupiditate repellendus et accusamus doloremque. Minus et, sed suscipit cum, ducimus non maiores
                eligendi quae aliquam aperiam vitae eveniet voluptatibus. Provident soluta pariatur nesciunt odio
                deserunt fuga, ab repudiandae.
                Dicta iure ipsa laborum odio autem mollitia? Aspernatur eius, asperiores cupiditate dignissimos adipisci
                illo accusamus, quam quasi placeat aliquam vero impedit labore repudiandae voluptatibus autem
                architecto, quia similique. Sequi, recusandae?</p>
        </div>
    </section>

    <!-- Register -->
    <section class="register" id="register">
        <div class="content">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">Register</h2>
                    <center>
                        <hr>
                    </center>
                </div>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odio consequatur a, amet aut ab quos ipsa?
                Maiores beatae numquam voluptates voluptatibus, perspiciatis, consequatur, porro explicabo quisquam nemo
                totam quia sit.
                Nisi cupiditate repellendus et accusamus doloremque. Minus et, sed suscipit cum, ducimus non maiores
                eligendi quae aliquam aperiam vitae eveniet voluptatibus. Provident soluta pariatur nesciunt odio
                deserunt fuga, ab repudiandae.
                Dicta iure ipsa laborum odio autem mollitia? Aspernatur eius, asperiores cupiditate dignissimos adipisci
                illo accusamus, quam quasi placeat aliquam vero impedit labore repudiandae voluptatibus autem
                architecto, quia similique. Sequi, recusandae?</p>
        </div>
    </section>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"
        integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js"
        integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous">
    </script>
    <script>
        $('.page-scroll').on('click', function (e) {

            var tujuan = $(this).attr('href');

            var elemenTujuan = $(tujuan);

            $('html , body').animate({
                scrollTop: elemenTujuan.offset().top - 40
            }, 1200, 'swing');

            e.preventDefault();
        });

    </script>

</body>

</html>
