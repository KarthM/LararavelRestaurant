<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
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

    @include('admin.adminNav');
    <div style="text-align:left; position:relative; top:60px; right:-150px;">
    <form action="{{url('/insertchef')}}" method="POST" enctype="multipart/form-data">
@csrf
<div>
    <label>Title</label>
    <input type="text" name="name" placeholder="Name of the chef" style="margin-left:50px; margin-bottom:2px;color:blue;" required/>
</div>
    <div>
    <label>Specialist</label>
    <input type="text" name="specialist" style="color:blue; margin-left:17px;"placeholder="specialist" required/>
   </div>
   <div> <label>Image</label>
    <input type="file" name="image"style="margin-left:43px; margin-bottom:2px;" required/></div>
   
   <div> <input type="submit" name="add" style="margin-left:50px; margin-top:2px;color:red; padding:10px;" value="submit"></input>
    </div>
    </form>
    <div style="position:relative; top:30px, right:-150px;">
     <table style="border:1px solid white; margin-top:15px;">
            <tr>
                <th>Name</th>
                <th>specialist</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            @foreach($data as $datas)

            <tr>
                
                <td>{{$datas->name}}</td>
                <td>{{$datas->specialist}}</td>
                <td><img style="height:50px; width:50px;" src="/foodpicture/{{$datas->image}}"</td>
                   <td><a style="color:blue;"href="{{url('/deletechef',$datas->id)}}">Delete/</a>
                <a style="color:blue;"href="{{url('/updatechef',$datas->id)}}">Edit</a>
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


 