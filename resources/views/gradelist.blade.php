<div class="card mb-3">
  <img src="https://www.quicksilvertranslate.com/wp-content/uploads/education-russia-1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">Grades</h5>
    <p class="card-text">List all the Grade of the students in the courses </p>
    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">grade</th>
      <th scope="col">student_id</th>
      <th scope="col">courses_id</th>
     
    
    </tr>
  </thead>
  <tbody>
      @foreach($grades as $grades)
   
    <tr>
      <td>{{$grades->name}}</td>
      <td>{{$grades->students_id}}</td>
      <td>{{$grades->courses_id}}</td>
      
 
            
      <td>  
             <a href="{{ url('c/edit/'.$grades->id)}}" class="btn btn-warning"><i class="fa fa-trash">Edit</i></a>
             
         </td>
          <td>
             
          <a href="{{ url('c/destroy/'.$grades->id)}}" class= "btn btn-danger" onclick="return confirm('Do you want to delete?')"><i class="fa fa-trash">Delete</i></a>
            
             
         </td>
         
    </tr>
    @endforeach
  
  </tbody>
</table>



  </div>
</div>

