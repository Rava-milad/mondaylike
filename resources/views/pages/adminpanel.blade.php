<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta http-equiv="X-UA-Compatible" content="ie=edge , chrome=1">

    <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@2.0.7/css/boxicons.min.css">
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="{{ asset('assets/image/hczKIze.jpg') }}" alt=""> </div>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="l-navbar" id="nav-bar">
                    <nav class="nav">
                        <div> <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span
                                    class="nav_logo-name">BBBootstrap</span> </a>
                            <div class="nav_list"> <a href="#" class="nav_link active"> <i
                                        class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Workspace</span>
                                </a> <a href="#" class="nav_link"> <i class='bx bx-user nav_icon'></i> <span
                                        class="nav_name">Users</span> </a> <a href="#" class="nav_link"> <i
                                        class='bx bx-message-square-detail nav_icon'></i> <span
                                        class="nav_name">Messages</span> </a> <a href="#" class="nav_link"> <i
                                        class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span> </a>
                                <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span
                                        class="nav_name">Files</span> </a> <a href="#" class="nav_link"> <i
                                        class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span>
                                </a> </div>
                        </div> <form action="{{ route('logout') }}" method="POST">
                            @csrf
                           
                            <a href="{{ url('/logout') }}" id="submit" class="nav_link"> <i class='bx bx-log-out nav_icon'></i> <span
                                class="nav_name">SignOut</span> </a>
                        </form>
                    </nav>
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="height-100 bg-light">
                                <h4 class="text-center">Main components</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>




        </div>
    </div>
    <!--Container Main start-->

    <!--Container Main end-->



    <script src="{{ asset("assets/js/jquery-3.6.0.min.js") }}"></script>
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
