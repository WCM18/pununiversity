<div class="card mb-3">
  <img src="https://www.quicksilvertranslate.com/wp-content/uploads/education-russia-1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of courses in Class</h5>
    <p class="card-text">You can find  the all courses in each classes</p>
    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Name</th>
      
    </tr>
  </thead>
  <tbody>
      @foreach($courses as $course)
    <tr>
      <td>{{$course->name}}</td>
            
         <td>
             
             <a href="{{ url('p/edit/'.$course->id)}}" class="btn btn-warning"><i class="fa fa-trash">Edit</i></a>
             
         </td>
          <td>
             
             
             <a href="{{ url('p/destroy/'.$course->id)}}" class= "btn btn-danger" onclick="return confirm('Do you want to delete?')"><i class="fa fa-trash">Delete</i></a>
             
         </td>
         
    </tr>
    @endforeach
   
  </tbody>
</table>



  </div>
</div>

