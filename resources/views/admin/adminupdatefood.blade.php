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
    
    <form action="{{url('/update',$data->id)}}" method="post" enctype="multipart/form-data">
    @csrf

    <div>

    <label>Title</label>
    <input type="text" name="title" value="{{$data->title}}" style="margin-left:50px; margin-bottom:2px;color:blue;"
     required/>
</div>
    <div>
    <label>Descriptiton</label>
    <input type="text" name="description" value="{{$data->description}}"style="color:blue;" required/>
   </div>
   
   <div> 
       <label>old Image</label>
    <img style="height:50px; width:50px; margin-left:50px;" src="/foodpicture/{{$data->image}}">
</div>

   <div> 
       <label>New Image</label>
    <input type="file" name="image"style="margin-left:30px; margin-bottom:2px;" required/>
</div>
   <div>
        <label>Price</label>
    <input type="text" name="price"  value="{{$data->price}}" style="margin-left:50px; margin-bottom:2px;color:blue;"required/>
</div>
   <div> <input type="submit" name="add" style="margin-left:50px; margin-top:2px;color:red; padding:10px;" 
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