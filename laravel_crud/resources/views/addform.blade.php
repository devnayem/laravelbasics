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
            <h1 class="display-4">LARAVEL CREATE USER</h1>
        </div>
    </div>

    <form action="/user" method="POST" class="container">
        @csrf
        <div class="form-group">
        <input class="form-control" type="text" name="fname" placeholder="First Name" value="{{old("fname")}}">
            @if ($errors->any())
                <div>
                    @foreach ($errors->get('fname') as $error)
                    <span class="font-italic text-danger">{{$error}}</span>
                    @endforeach
                </div>
            @endif
        </div>
        <div class="form-group">
            <input class="form-control" type="text" name="lname" placeholder="Last Name" value="{{old("lname")}}">
            @if ($errors->any())
                <div>
                    @foreach ($errors->get('lname') as $error)
                    <span class="font-italic text-danger">{{$error}}</span>
                    @endforeach
                </div>
            @endif
        </div>
        <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Email" value="{{old("email")}}">
            @if ($errors->any())
                <div>
                    @foreach ($errors->get('email') as $error)
                    <span class="font-italic text-danger">{{$error}}</span>
                    @endforeach
                </div>
            @endif
        </div>
        <div class="form-group">
            <select class="form-control" name="position" value="{{old("fname")}}">
            <option name="position" value="">Select Position</option>
            <option name="position" value="Director">Director</option>
            <option name="position" value="Manager">Manager</option>
            <option name="position" value="Supervisor">Supervisor</option>
            <option name="position" value="Senior Associate">Senior Associate</option>
            <option name="position" value="Associate">Associate</option>
            <option name="position" value="Admin">Admin</option>
            <option name="position" value="Intern">Intern</option>
            </select>
            @if ($errors->any())
                <div>
                    @foreach ($errors->get('position') as $error)
                    <span class="font-italic text-danger">{{$error}}</span>
                    @endforeach
                </div>
            @endif
        </div>
        <button type="submit" class="btn btn-primary" name="btnRegister" value="Register">Create</button><br><br>
        <a href="{{ url('user') }}">Go to Home</a>
    </form>



    <!-- script -->
    <script src="{{asset("/js/bootstrap.min.js")}}"></script>
</body>
</html>
