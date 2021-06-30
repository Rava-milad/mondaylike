@include('pages.adminheader')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">

                <div class="l-navbar" id="nav-bar">
                    <nav class="nav">
                        <div> <a href="{{ url('/home') }}" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i>
                                <span class="nav_logo-name">Home</span> </a>
                            <div class="nav_list"> <a href="{{ url('/admin/workspace') }}" class="nav_link active"> <i
                                        class='bx bx-grid-alt nav_icon'></i> <span class="nav_name">Workspace</span>
                                </a> <a href="#" class="nav_link" id="users"> <i class='bx bx-user nav_icon'></i> <span
                                        class="nav_name">Users</span> </a> <a href="#" class="nav_link"> <i
                                        class='bx bx-message-square-detail nav_icon'></i> <span
                                        class="nav_name">Messages</span> </a> <a href="#" class="nav_link"> <i
                                        class='bx bx-bookmark nav_icon'></i> <span class="nav_name">Bookmark</span> </a>
                                <a href="#" class="nav_link"> <i class='bx bx-folder nav_icon'></i> <span
                                        class="nav_name">Files</span> </a> <a href="#" class="nav_link"> <i
                                        class='bx bx-bar-chart-alt-2 nav_icon'></i> <span class="nav_name">Stats</span>
                                </a> </div>
                        </div>
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf

                            <a href="{{ url('/logout') }}" id="submit" class="nav_link"> <i
                                    class='bx bx-log-out nav_icon'></i> <span class="nav_name">SignOut</span> </a>
                        </form>
                    </nav>
                </div>
                <div class="container" id="manager">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="height-100 bg-light">
                                @yield("workspaces")


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--Container Main start-->

    <!--Container Main end-->


@include('pages.adminfooter')