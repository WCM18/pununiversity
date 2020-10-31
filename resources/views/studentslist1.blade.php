<div class="card mb-3">
  <img src="https://www.quicksilvertranslate.com/wp-content/uploads/education-russia-1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of students in a course</h5>
    @foreach($students as $student)
    <p class="card-text">You can find  the all students of  course ID : {{$student->courses_id}}</p>
    @endforeach
    <table class="table">
  <thead class="thead-light">
    <tr>
      
      <th scope="col">First Name</th>
      <th scope="col">Second Name</th>
      <th scope="col">Age</th>
      
    </tr>
      
    </tr>
  </thead>
  <tbody>
  @foreach($students as $student)
    <tr>
      
      <td>{{$student->firstName}}</a></td>
            <td>{{$student->secondName}}</td>
      <td>{{$student->age}}</td>
     
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

