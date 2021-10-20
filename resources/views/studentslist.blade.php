<div class="card mb-3">
  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQYiqrl4TOveGuSyrAHqXhyqT03tVhTs98hRA&usqp=CAU" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of all Student</h5>
    <p class="card-text">you can find information about all student here.</p>



    <table class="table table-success table-striped">

  <thead>
    <tr>
      <th scope="col">one</th>
      <th scope="col">First Name</th>
      <th scope="col">Second Name</th>
      <th scope="col">Age</th>
      <th scope="col">Speciality</th>
      <th scope="col">Operation</th>


    </tr>
  </thead>
  <tbody>
    @foreach($students as $student)
    <tr>
      <td>{{ $student->one }}</td>
      <td>{{ $student->firstName }}</td>
      <td>{{ $student->secondName }}</td>
      <td>{{ $student->age }}</td>
      <td>{{ $student->speciality }}</td>
      <td><a href="#" class="btn btn-sm btn-info"> Show </a>
      <a href="{{ url('/edit/'.$student->id) }}" class="btn btn-sm btn-warning"> Edit </a>
      <a href="{{ url('/delete/'.$student->id)}}" class="btn btn-sm btn-danger">Delete</a></td>

    </tr>
    @endforeach
   
  </tbody>
</table>


    
  </div>
</div>









