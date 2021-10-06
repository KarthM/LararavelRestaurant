<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">
    <!-- Required meta tags -->
    @include('admin.admincss');
  </head>
  <body>
      
  <div class="container-scroller">
    @include('admin.adminNav');
   
    <div style="text-align:left; position:relative; top:60px; right:-150px;">
    
    <form action="{{url('/chefupdate',$data->id)}}" method="post" enctype="multipart/form-data">
    @csrf

    <div>

    <label>Name</label>
    <input type="text" name="name" value="{{$data->name}}" style="margin-left:50px; margin-bottom:2px;color:blue;"
     required/>
</div>
    <div>
    <label>Descriptiton</label>
    <input type="text" name="specialist" value="{{$data->specialist}}"style="color:blue;" required/>
   </div>
   
   <div> 
       <label>old Image</label>
    <img style="height:50px; width:50px; margin-left:50px;" src="/foodpicture/{{$data->image}}">
</div>

   <div> 
       <label>New Image</label>
    <input type="file" name="image"style="margin-left:30px; margin-bottom:2px;"/>
</div>
   
   <div> <input type="submit" name="add" style="margin-left:70px; margin-top:5px;color:blue; padding:10px;" 
         value="submit">
       </input>
    </div>
    </form>
    

</div>

  </div>
    <!-- plugins:js -->
    @include('admin.adminscript');
  </body>
</html>