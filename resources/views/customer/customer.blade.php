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
                <td><a href="" class="btn btn-warning btn-sm">Update</a></td>
                <td><a href="" class="btn btn-danger btn-sm">Delete</a></td>
            </tr>
            @endForeach
            </tbody>
    </table>
</div>
</body>
</html>
