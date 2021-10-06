<x-app-layout>
    
</x-app-layout>
<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.admincss');
    <style>
      table{
          width:900px;
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
    <div style="position:relative; top:30px, right:-150px;">
     <table style="border:1px solid white; margin-top:15px;">
            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Date</th>
                <th>Time</th>
                <th>Num_guest</th>
                <th>Message</th>
                
                <th>Action</th>
            </tr>
            @foreach($data as $datas)

            <tr>
                
                <td>{{$datas->name}}</td>
                <td>{{$datas->email}}</td>
                <td>{{$datas->phone}}</td>
                <td>{{$datas->date}}</td>
                <td>{{$datas->time}}</td>
                <td>{{$datas->num_guest}}</td>
                <td>{{$datas->message}}</td>
                
                <td><a style="color:blue;"href="{{url('',$datas->id)}}">Delete/</a>
                <a style="color:blue;"href="{{url('',$datas->id)}}">Edit</a>
                 </td>
            </tr>
 @endforeach
        </table>
    </div>
  </div>
    <!-- plugins:js -->
    @include('admin.adminscript');
  </body>
</html>