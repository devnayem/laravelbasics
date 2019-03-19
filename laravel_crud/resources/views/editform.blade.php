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
            <h1 class="display-4">LARAVEL EDIT USER</h1>
        </div>
    </div>

    <form action="/user/{{$article->id}}" method="POST" class="container">
        @csrf
        @method('PUT')
        <div class="form-group">
            <input class="form-control" type="text" name="fname" placeholder="First Name" value="{{$article->fname}}">
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="lname" placeholder="Last Name" value="{{$article->lname}}">
        </div>
        <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Email" value="{{$article->email}}">
        </div>
        <div class="form-group">
            <select class="form-control" name="position">
            <option name="position" value="{{$article->position}}">{{$article->position}}</option>
            <option name="position" value="Director">Director</option>
            <option name="position" value="Manager">Manager</option>
            <option name="position" value="Supervisor">Supervisor</option>
            <option name="position" value="Senior Associate">Senior Associate</option>
            <option name="position" value="Associate">Associate</option>
            <option name="position" value="Admin">Admin</option>
            <option name="position" value="Intern">Intern</option>
            </select>
        </div>
        <button type="submit" class="btn btn-primary" name="btnEdit">Edit</button><br><br>

    </form>

    <!-- script -->
    <script src="{{asset("/js/bootstrap.min.js")}}"></script>
</body>
</html>
