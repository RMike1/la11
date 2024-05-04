<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit page</h1> <br>

    <a href="{{route('crud')}}">Back</a>
    <form action="{{route('crud.update')}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{$data->id}}"><br>
        Name: <input type="text" name="name" value="{{$data->name}}"><br>
        Age: <input type="text" name="age" value="{{$data->age}}"><br>
        Age: <input type="file" name="image"><br>

        <button type="submit">Update</button>
    </form>
</body>

</html>