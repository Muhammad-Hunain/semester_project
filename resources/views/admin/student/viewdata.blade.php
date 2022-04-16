@extends('master');
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
  <div class="row align-items-center py-4">
    <div class="col-lg-8 offset-lg-2 col-sm-12">
<table class="table">
  <thead>
    <tr>
    <th scope="id">ID</th>
      <th scope="id">Name</th>
      <th scope="col">Role</th>
      <th scope="col">Surename</th>
      <th scope="col">Email</th>
      <th scope="col">Contact No</th>
      <th scope="col">CNIC</th>
      <th scope="col">DEPARTMENT</th>
      <th scope="col">Roll No</th>  
      <th scope="col">CGPA</th>   
      <th scope="col">Operation</th>

      <!-- <th scope="col">Student_id</th> -->
      
    </tr>
  </thead>
  <tbody>
  
  @foreach($Users as $User)
  @if($User['role'] == 'student')
  <tr>
      <td>{{$User['id']}}</td>
      <td>{{$User['name']}}</td>
      <td>{{$User['role']}}</td>
      <td>{{$User['surname']}}</td>
      <td>{{$User['email']}}</td>
      <td>{{$User['contact']}}</td>
      <td>{{$User['CNIC']}}</td>
      <td>{{$User['department']}}</td>
      <td>{{$User['roll_no']}}</td>
      <td>{{$User['CGPA']}}</td>
            <td><a href="delete/{{$User['id']}}" class="btn btn-primary">Delete</a> 
      <a href="Edit/{{$User['id']}}" class="btn btn-primary">Edit</a> </td>
    </tr>
@endif  
@endforeach


</tbody>
</table>
</div>
</div>
</div>
</div>



</body>
</html>