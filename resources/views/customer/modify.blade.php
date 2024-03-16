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
<form action="{{route('customers.update',['customer'=>$customer])}}" method="put">
    @csrf
    @method('put')
    <div class="outer" style="margin: 50px 0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" placeholder="slman" name="name" id="name" value="{{$customer->name}}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="addresss">Address</label>
                        <input type="text" placeholder="Colombo" class="form-control" name="addresss" id="addresss" value="{{$customer->addresss}}">
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="desigination">Desigination</label>
                        <input type="text" placeholder="Developer" class="form-control" name="desigination" id="desigination" value="{{$customer->desigination}}" >
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="age">Age</label>
                        <input type="text" placeholder="23"  class="form-control" name="age" id="age" value="{{$customer->age}}">
                    </div>
                </div>
                <br>
                <div class="col-12">
                    <br>
                    <div class="form-group">
                        <input type="submit" value="Update Customer" class="btn btn-warning col-12" >
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
</body>
</html>
