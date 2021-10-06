<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
   
    @include('admin.admincss');
    <style>
      table{
          width:700px;
          height: auto;
      }
        tr, th,td{
            background-color:lightskyblue;
            padding:10px;
           border:1px solid white;
           align-items: center;
         
        }
        
    </style> 
  </head>
  <body>
  <div class="container-scroller">   

    @include('admin.adminNav')
    <div style="text-align:left; position:relative; top:60px; right:-150px;">
    <form action="{{url('/insertfood')}}" method="POST" enctype="multipart/form-data">
@csrf
<div>
    <label>Title</label>
    <input type="text" name="title" placeholder="title" style="margin-left:50px; margin-bottom:2px;color:blue;" required/>
</div>
    <div>
    <label>Descriptiton</label>
    <input type="text" name="description" style="color:blue;"placeholder="description" required/>
   </div>
   <div> <label>Image</label>
    <input type="file" name="image"style="margin-left:43px; margin-bottom:2px;" required/></div>
   <div> <label>Price</label>
    <input type="text" name="price" placeholder="price" style="margin-left:50px; margin-bottom:2px;color:blue;"required/>
</div>
   <div> <input type="submit" name="add" style="margin-left:50px; margin-top:2px;color:red; padding:10px;" value="submit"></input>
    </div>
    </form>

    <div style="position:relative; top:30px, right:-150px;">
     <table style="border:1px solid white; margin-top:15px;">
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @foreach($data as $datas)

            <tr>
                
                <td>{{$datas->title}}</td>
                <td>{{$datas->description}}</td>
                <td>${{$datas->price}}</td>
                <td> <img style="height:50px; width:50px;"src="/foodpicture/{{$datas->image}}"> </td>
                <td><a style="color:blue;"href="{{url('/deletefood',$datas->id)}}">Delete/</a>
                <a style="color:blue;"href="{{url('/updatefood',$datas->id)}}">Edit</a>
                 </td>
            </tr>
 @endforeach
        </table>
    </div>
  </div>
  </div>
    <!-- plugins:js -->
    @include('admin.adminscript')
  </body>
</html>