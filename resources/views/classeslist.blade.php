<div class="card mb-3">
  <img src="https://www.quicksilvertranslate.com/wp-content/uploads/education-russia-1.jpg" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title">List of classes</h5>
    <p class="card-text">You can find here all the  classes </p>
    <table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">class name</th>
     
    
    </tr>
  </thead>
  <tbody>
      @foreach($classes as $classe)
    <tr>
      <td><a href="{{ url('t/'.$classe->id)}}">{{$classe->name}}</a></td>
      <td></td>
 
            
      <td>  
             <a href="{{ url('/edit/'.$classe->id)}}" class="btn btn-warning"><i class="fa fa-trash">Edit</i></a>
             
         </td>
          <td>
             
             
             <a href="{{ url('/destroy/'.$classe->id)}}" class= "btn btn-danger" onclick="return confirm('Do you want to delete?')"><i class="fa fa-trash">Delete</i></a>
             
         </td>
         
    </tr>
    @endforeach
   
  </tbody>
</table>



  </div>
</div>

