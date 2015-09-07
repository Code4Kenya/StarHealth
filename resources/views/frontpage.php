
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Starter Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
    <link href="<?php echo asset("bootstrap3/css/bootstrap.css");?>" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="<?php echo asset("bootstrap3/css/custom.css");?>" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="<?php echo asset('bootstrap3/js/ie8-responsive-file-warning.js');?>"></script><![endif]-->
    <script src="<?php echo asset('bootstrap3/js/ie-emulation-modes-warning.js');?>"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>


<div class="container">

    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div id="navbar" class="navbar-collapse collapse">

                <ul class="nav navbar-nav">
                    <li class="">
                        <a href="http://www.the-star.co.ke/sections/news" target="_blank">News</a>
                    </li>
                    <li class="">
                        <a href="http://www.the-star.co.ke/sections/business" target="_blank">Business</a>
                    </li>
                    <li class="">
                        <a href="http://www.the-star.co.ke/sections/sports" target="_blank">Sports</a>
                    </li>
                    <li class="">
                        <a href="http://www.the-star.co.ke/sections/entertainment" target="_blank">Entertainment</a>
                    </li>
                    <li class="">
                        <a href="http://www.the-star.co.ke/sections/opinions" target="_blank">Opinions</a>
                    </li>
                    <li class="">
                        <a href="http://www.the-star.co.ke/sections/starlife" target="_blank">StarLife</a>
                    </li>
                    <li class="">
                        <a href="http://starhealth.the-star.co.ke">StarHealth</a>
                    </li>
                    <li class="">
                        <a href="http://www.the-star.co.ke/sections/weekend-star" target="_blank">Weekend Star</a>
                    </li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </nav>
    <div class="starter-template">
        <h1>Bootstrap starter template</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a mostly barebones HTML document.</p>
    </div>

</div><!-- /.container -->


<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="<?php echo asset('bootstrap3/js/bootstrap.min.js');?>"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="<?php echo asset('bootstrap3/js/ie10-viewport-bug-workaround.js');?>"></script>
</body>
</html>
