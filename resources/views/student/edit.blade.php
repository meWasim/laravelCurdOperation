<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
        <!-- @if($errors->any())
            <ul class="alert alert-warning">
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach

            </ul>

        @endif -->
        
    <div class="container-sm">
   
        <h1>Create User</h1>

        <a href="{{url('/students')}}"><button type="button" class="btn btn-warning ">Home</button></a>
            

        <form action="{{url('students/'.$student->id)}}" method="POST">
            @csrf
            @method('PUT');
            <div class="mb-3">
                <label  class="form-label">Name :</label>
                @error('name')
                    <br><span class="alert-danger" >{{$message}}</span>
                @enderror
                <input type="text" name="name"  value="{{$student->name}}" class="form-control">
                
            </div>
            <div class="mb-3">
                <label  class="form-label">Course :</label>
                @error('email')
                    <br><span class="alert-danger">{{$message}}</span>
                @enderror
                <input type="text" name="course" value="{{$student->course}}" class="form-control">
            </div>
            <div class="mb-3">
                <label  class="form-label">Section :</label>
                @error('password')
                    <br><span class="alert-danger">{{$message}}</span>
                @enderror
                <input type="text" name="section" value="{{$student->section}}" class="form-control">
            </div>
            
            <div class="mb-3">
                <label  class="form-label">Email :</label>
                @error('address')
                    <br><span class="alert-danger">{{$message}}</span>
                @enderror
                <input type="email" name="email" value="{{$student->email}}" class="form-control">
            </div>
            
            <button type="submit" value="submit"  class="btn btn-primary">SAVE</button>
            
        </form>
    </div>
</body>
</html>