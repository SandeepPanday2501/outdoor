<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">


</head>

<body>
    <h1 class="text-center">Outdoor Company</h1>
    <div class="container">

        <form action="{{ route('saveCrud') }}" method="post">
            @csrf
            <label for="">Batch No</label>
            <input type="text" name="bno" class="form-control">
            <label for="">Quantity</label>
            <input type="number" name="qty" class="form-control">
            <label for="">Status</label>
            <input type="text" class="form-control" name="status">
            <label for="">Remarks</label>
            <input type="text" name="remarks" class="form-control">
            <input type="submit" value="Submit" class="btn btn-primary mt-3">




        </form>
    </div>


    </form>
</body>

</html>