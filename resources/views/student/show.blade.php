<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/jquery.dataTables.css" />
    <title>Student List</title>
</head>
<body>
@if ($message=Session::get('message'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
   @endif
    <div class="container">
    <h1>Data list</h1>
    <a href="{{url('students')}}"><button type="button" class="btn btn-warning ">HOME</button></a>
    <a href="{{url('students/create')}}"><button type="button" class="btn btn-warning ">ADD STUDENT</button></a>
    <table id="student-list" class="table table-striped">
        <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">NAME</th>
                    <th scope="col">COURSE</th>
                    <th scope="col">SECTION</th>
                    <th scope="col">EMAIL</th>
                    <th scope="col">ACTION</th>
                </tr>
        </thead>
    
   
     <tbody>     
        @foreach($students as $student)
       
            <tr>
                <td scope="row">{{$student->id}}</td>
                <td scope="row">{{$student->name}}</td>
                <td scope="row">{{$student->course}}</td>
                <td scope="row">{{$student->section}}</td>
                <td scope="row">{{$student->email}}</td>
                <td scope="row">
                    <a href="{{url('students/'.$student->id.'/edit')}}"><x-tabler-edit /></a>

                    <form action="{{url('students/'.$student->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button><x-tabler-trash style="color: red;"/></button>
                    </form>
                </td>
                
            </tr>
        
        @endforeach
        </tbody>
        
    </table>
    
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
    $('#student-list').DataTable();
} );
    </script>
</body>
</html>