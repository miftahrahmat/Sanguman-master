<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sanguman</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://unpkg.com/ionicons@4.4.8/dist/ionicons.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 15px;
                font-weight: 900;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            .m-b-md h5{
                margin-top:0px;
                font-family: algerian;
            }

           .m-b-md h3{
                font-family: times new roman;
                font-size: 80px;
                -webkit-transition:0.2s;
            }
            .m-b-md:hover h3{
                transform: translateY(-15px);
                -webkit-transform:translateY(-35px);
            }

        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">

            <div class="container">
                <h2 align="center">Sanguman Master Application</h2>

                <!-- Trigger the modal with a button -->
                <center>
                @guest
                    <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Run App</button>
                </center>
                @else
                @if (Route::has('login'))
                <button type="block" class="btn btn-default">
                    @auth
                        <a href="{{ url('/orders') }}">Beranda</a>
                    @endauth
                </button>
                @endif
                @endguest
                <!-- Modal -->
                <div class="modal fade" id="myModal" role="dialog">
                    <div class="modal-dialog">

                        <!-- Modal content-->
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title" align="center">Sanguman Master Application</h4>

                            </div>
                            <div class="modal-body">
                                <div style="margin-left: 200px;">
                                    <a href="{{ route('login') }}">
                                        <button type="block" class="btn btn-default">
                                         Login
                                        </button>
                                    </a>

                                    @if (Route::has('register'))
                                    <a href="{{ route('register') }}">
                                        <button type="block" class="btn btn-default">
                                        Daftar
                                        </button>
                                    </a>

                                    @endif
                                </div>
                            </div>

                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </body>
</html>
