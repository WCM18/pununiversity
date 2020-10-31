<div class="card mb-3">
  <img src="https://www.quicksilvertranslate.com/wp-content/uploads/education-russia-1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of Students</h5>
    <p class="card-text">You can find hetre all the informations about the students in the systen</p>
    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">First Name</th>
      <th scope="col">Second Name</th>
      <th scope="col">Age</th>
      <th scope="col">courses</th>
      
    </tr>
  </thead>
  <tbody>
      @foreach($students as $student)
    <tr>
      <td><a href="{{ url('n/'.$student->id)}}">{{$student->firstName}}</a></td>
            <td>{{$student->secondName}}</td>
      <td>{{$student->age}}</td>
      <td>{{$student->courses_id}}</td>
     
         <td>
             
             <a href="{{ url('/b/edit/'.$student->id)}}" class="btn btn-warning"><i class="fa fa-trash">Edit</i></a>
             
         </td>
          <td>
             
             
             <a href="{{ url('b/destroy/'.$student->id)}}" class= "btn btn-danger" onclick="return confirm('Do you want to delete?')"><i class="fa fa-trash">Delete</i></a>
             
         </td>
         
    </tr>
    @endforeach
   
  </tbody>
</table>



  </div>
</div>

