<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{route('customers.customer')}}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('customers.new')}}">Save Customer</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

    <h1 style="text-align: center"> Customer Page</h1>
<div class="container">
    <table class="table table-hover">
        <thead>
        <tr>
            <th>Index</th>
            <th>Name</th>
            <th>Address</th>
            <th>Designation</th>
            <th>Age</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>
        </thead>
            <tbody>
            @foreach($customers as $customer)
            <tr>
                <td>{{$customer->id}}</td>
                <td>{{$customer->name}}</td>
                <td>{{$customer->addresss}}</td>
                <td>{{$customer->desigination}}</td>
                <td>{{$customer->age}}</td>
                <td><a href="{{route('customers.modify',['customer'=>$customer])}}" class="btn btn-warning btn-sm">Update</a></td>
                <td><a href="{{route('customers.delete',['customer'=>$customer])}}" class="btn btn-danger btn-sm">Delete</a></td>
            </tr>
            @endForeach
            </tbody>
    </table>
</div>
</body>
</html>
