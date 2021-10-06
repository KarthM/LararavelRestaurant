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
    <div class="container">
    <h3>Customer order Details</h3>
    <form method="get" action="{{url('/search')}}">
    @csrf
        <input type="text" name="search" placeholder="search"style="color:blue;">
        <button type="submit" class="btn btn-primary" style="padding:13px;"> Search</button>
    </form>
   
    
    <div style="position:static; top:30px, right:-150px;">
     <table style="border:1px solid white; margin-top:15px;">
            <tr>
                <th>Foodname</th>
                <th>Quantity</th>
                <th>price</th>
                <th>TotalAmount</th>
                <th>Name</th>
                <th>Phone</th>
                <th>Address</th>
                <th>Action</th>
            </tr>
            @foreach($data as $datas)

            <tr>
                
                <td>{{$datas->foodname}}</td>
                <td>{{$datas->quantity}}</td>
                <td>${{$datas->price}}</td>
                <td>${{$datas->price*$datas->quantity}}</td>
                <td>{{$datas->name}}</td>
                <td>{{$datas->phone}}</td>
                <td>{{$datas->address}}</td>

                 <td><a style="color:blue;" class="btn btn-primary"href="{{url('/deleteorders',$datas->id)}}">Delete</a>
          
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