<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>New Customer</title>
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
<form action="{{route('customers.add')}}" method="post">
    @csrf
    <div class="outer" style="margin: 50px 0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" placeholder="slman" name="name" id="name">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="addresss">Address</label>
                        <input type="text" placeholder="Colombo" class="form-control" name="addresss" id="addresss">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="desigination">Desigination</label>
                        <input type="text" placeholder="Developer" class="form-control" name="desigination" id="desigination">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" placeholder="23"  class="form-control" name="age" id="age">
                    </div>
                </div>
                <br>
                <div class="col-12">
                    <br>
                    <div class="form-group">
                        <input type="submit" value="Save Customer" class="btn btn-primary col-12" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>
