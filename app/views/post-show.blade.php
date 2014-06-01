<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Curso</title>

    <!-- Bootstrap core CSS -->
  	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link href="{{ asset('assets/css/blog.css') }}" rel="stylesheet" type='text/css'>
</head>

<body>

 	<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Start Bootstrap</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav">
                    <li><a href="{{ URL::to('authors') }}">View All Authors</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">

        <div class="row">
            <div class="col-lg-8">

                <!-- the actual blog post: title/author/date/content -->
                <h1>{{$post->title}}</h1>
                <p class="lead">by {{$post->author->name}}
                </p>
                <hr>
                <p>
                    <span class="glyphicon glyphicon-time"></span> Posted on {{$post->date}}</p>
                <hr>
                <p class="lead">{{$post->content_short}}</p>
                <img src="{{$post->img}}" class="img-responsive">
                <hr>
                <p>{{$post->content}}</p>

                <hr>

            </div>

            <div class="col-lg-4">
                <!-- /well -->
                <div class="well">
                    <h4>Popular Blog Categories</h4>
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#parceiros">Parceiros</a></li>
                                <li><a href="#parceiros">Parceiros</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled">
                                <li><a href="#parceiros">Parceiros</a></li>
                                <li><a href="#parceiros">Parceiros</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <hr>

        <footer>
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright &copy; Company 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->

    <!-- JavaScript -->
	<script src="{{ asset('assets/js/jquery.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>

</body>

</html>
