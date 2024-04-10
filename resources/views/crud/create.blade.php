<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Create page</h1> <br> 

    <a href="{{route('crud')}}">Back</a>
   <form action="{{route('crud.store')}}" method="post">
    @csrf
        Name: <input type="text" name="name" required><br>
        Age: <input type="text" name="age" required><br>
        Image: <input type="file" name="image">


        <button type="submit">Save</button>
   </form>
</body>
</html>