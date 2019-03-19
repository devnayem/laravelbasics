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
            <h1 class="display-4">LARAVEL CRUD</h1>
        </div>
    </div>

    <a href="/user/create">
        <button class="btn btn-primary btn-lg btn-block">Add new user</button>
    </a>

    <hr>

    <table class="table">
        <thead class="thead-light">
        <tr>
            <th scope="col">ID</th>
            <th scope="col">First Name</th>
            <th scope="col">Last Name</th>
            <th scope="col">Email</th>
            <th scope="col">Position</th>
            <th scope="col">Action</th>
        </tr>
        </thead>

        <tbody>
        @foreach ($articles as $article)
        <tr>
            <td>{{$article->id}}</td>
            <td>{{$article->fname}}</td>
            <td>{{$article->lname}}</td>
            <td>{{$article->email}}</td>
            <td>{{$article->position}}</td>
            <td>
                <a href="/user/{{$article->id}}"><button class="btn btn-light">View</button></a>
                <a href="/user/{{$article->id}}/edit"><button class="btn btn-secondary">Edit</button></a>
                <form action="/user/{{$article->id}}" method="POST" >
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger" name="btnDelete">Delete User</button><br><br>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>

    </table>

    <ul class="pagination justify-content-center">
        {{$articles->links()}}
    </ul>



    <!-- script -->
    <script src="{{asset("/js/bootstrap.min.js")}}"></script>
</body>
</html>
