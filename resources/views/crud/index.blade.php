<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

@if(Session::has('status'))
    <h1>{{Session::get('status')}}</h1>
@endif

    <a href="{{route('crud.create')}}">Create</a>
    <table style="border: 2px solid red;">
        <thead>
            <tr>
                <th>Name</th>
                <th>Age</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data as $info)
                <tr>
                    <td>{{$info->name}}</td>
                    <td>{{$info->age}}</td>
                    <td><img src="{{Storage::url($info->image)}}" alt="img" style="padding:10px; height: 200px;"></td>
                    <td>
                        <a href="{{route('crud.edit',$info->id)}}">Edit</a>
                        <a onclick="return confirm('sure to delete??')" href="{{route('crud.delete',$info->id)}}">Delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>