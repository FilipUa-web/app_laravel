<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">


    <title>Admin</title>

    <!-- Styles -->
    @yield('styles')
    <link href="http://bootstrap-3.ru/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="{{url('css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{url('css/blog-post.css')}}" rel="stylesheet">
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body{margin-top:50px;}
        .glyphicon { margin-right:10px; }
        .panel-body { padding:0px; }
        .panel-body table tr td { padding-left: 15px }
        .panel-body .table {margin-bottom: 0px; }
        .dropdown-menu {min-width: 87px; text-align: center; }
        .btn-group {margin: 10px 10px 0 15px}
        .avatar {margin: 10px 10px 0 10px ; height: 30px; width: 40px;}
    </style>
    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>


</head>

<body>
<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{url('/')}}"><span class="glyphicon glyphicon-home"></span> Home</a>

        </div>
        <div>

                <div class="btn-group navbar-right">
                    <button class="btn btn-default btn-sm dropdown-toggle" type="button" data-toggle="dropdown">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </button>
                    <ul class="dropdown-menu">
                        <a href="{{url('/logout')}}">Logout</a>
                    </ul>
                </div>
            <img src="{{url(Auth::user()->photo->file)}}" class="img-circle navbar-right avatar">
        </div>
    </div>
</div>


<div class="container">
            <div class="row">
                <div class="col-sm-3 col-md-3">
                    <div class="panel-group" id="accordion">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
                            </span>Content</a>
                                </h4>
                            </div>
                            <div id="collapseOne" class="panel-collapse collapse in">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-pencil text-primary"></span><a href="{{url('admin/posts')}}">All Posts</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <span class="glyphicon glyphicon-flash text-success"></span><a href="{{url('admin/posts/create')}}">Create Post</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo"><span class="glyphicon glyphicon-th">
                            </span>Categories</a>
                                </h4>
                            </div>
                            <div id="collapseTwo" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a href="{{url('admin/categories')}}">All Categories</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree"><span class="glyphicon glyphicon-user">
                            </span>Users</a>
                                </h4>
                            </div>
                            <div id="collapseThree" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a href="{{url('admin/users')}}">All users</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{url('admin/users/create')}}">Create user</a>
                                            </td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour"><span class="glyphicon glyphicon-file">
                            </span>Media</a>
                                </h4>
                            </div>
                            <div id="collapseFour" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a href="{{url('admin/media')}}">All Media</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <a href="{{url('admin/media/create')}}">Upload Media</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>

                        </div>
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <h4 class="panel-title">
                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive"><span class="glyphicon glyphicon-comment">
                            </span>Comments</a>
                                </h4>
                            </div>
                            <div id="collapseFive" class="panel-collapse collapse">
                                <div class="panel-body">
                                    <table class="table">
                                        <tr>
                                            <td>
                                                <a href="{{url('admin/comments')}}">All Comments</a>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-md-8">
                    @yield('content')
                </div>
            </div>
</div>

    @yield('scripts')


<!-- Scripts -->

</body>
</html>
