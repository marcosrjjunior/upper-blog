<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        
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
                    
                    <div class="post">
                        <hr>
                        
                        <!-- Blog entry -->
                        <h1><a href="#">A Blog Home Template for Bootstrap 3</a>
                        </h1>
                        <p class="lead">by <a href="index.php">Start Bootstrap</a>
                        </p>
                        <hr>
                        <p>
                            <span class="glyphicon glyphicon-star"></span> Star Posted on August 28, 2013 at 10:00 PM</p>
                        <img src="http://placehold.it/900x300" class="img-responsive">
                        <hr>
                        <p>This is a very basic starter template for a blog homepage. It makes use of Glyphicons that are built into Bootstrap 3, and it makes use of the Pager at the bottom of the page. Make sure you get the Glyphicons files by downloading the entire
                            <code>/fonts</code>directory that you can download in the source files or at <a href="http://getbootstrap.com">getbootstrap.com</a>. That directory has all of the web fonts in it which makes Glyphicons work.</p>
                        <a class="btn btn-primary" href="#">Read More <span class="glyphicon glyphicon-chevron-right"></span></a>
                        
                    </div>
                    
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
                        <p>Copyright &copy; Company 2013</p>
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