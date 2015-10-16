 <?php $Table = ucfirst($table->en) ;?>
 
 <h1>
 
 <ol>
 
     <li> <a href="{{ url("/admin/gen/controller/{$table->id}") }} " target="_blank">{{$Table}}Controller.php</a> </li>     
     
     <li> <a href="{{ url("/admin/gen/model/{$table->id}") }} " target="_blank">{{$Table}}.php</a>  </li>
 
      <li> <a href="{{ url("/admin/gen/routes/{$table->id}") }} " target="_blank">routes.php</a>  </li>
 
     
     <li> <a href="{{ url("/admin/gen/migrate/{$table->id}") }} " target="_blank">migrate.php</a>  </li>
     
     <li> <a href="{{ url("/admin/gen/list/{$table->id}") }} " target="_blank">list.blade.php</a>  </li>
    
     <li> <a href="{{ url("/admin/gen/create_edit/{$table->id}") }} " target="_blank">create_edit.blade.php</a>  </li>
  
 </ol>       
        
 </h1>