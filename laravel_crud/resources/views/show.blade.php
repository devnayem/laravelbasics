<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- css -->
    <link rel="stylesheet" type="text/css" href="{{asset("/css/bootstrap.min.css")}}">
</head>
<body>
    <div class="jumbotron">
        <div class="container text-center">
            <h1 class="display-4">LARAVEL USER'S INFO</h1>
        </div>
    </div>

    <form class="container">
        <div class="form-group">
        <input class="form-control" type="text" name="fname" value="{{$article->fname}}" disabled>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="lname" value="{{$article->lname}}" disabled>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="email" value="{{$article->email}}" disabled>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="position" value="{{$article->position}}" disabled>
        </div>

        <a href="{{ url('user') }}">Go to Home</a>
    </form>

    <!-- script -->
    <script src="{{asset("/js/bootstrap.min.js")}}"></script>
</body>
</html>
