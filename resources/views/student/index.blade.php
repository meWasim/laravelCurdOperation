<!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Index</title>
 </head>
 <body>
   
   @if ($message=Session::get('message'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
   @endif
    <div class="container w-50">
        <h1>Student validation Form</h1>
        <div class="card">
            <div class="card-body">
               
                <a href="{{url('students/create')}}"> <button type="button" class="btn btn-primary " >ADD</button></a>
                TO ADD DATA IN DATABASE
            </div>
        </div>
        <div class="card">
            <div class="card-body">
                
                <a href="{{url('students/students')}}"><button type="button" class="btn btn-info ">VIEW</button></a>
                TO VIEW THE DATA FROM DATABASE
            </div>
        </div>

    </div>

 </body>
 </html>
 <script>
   
 </script>