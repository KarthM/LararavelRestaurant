<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
    <style>

        tr, th,td{
            background-color:lightskyblue;
            padding:20px;
           border:1px solid white;
           align-items: center;
        }
        
    </style>
</head>
<body>
<x-app-layout>
    
    </x-app-layout>
    <!DOCTYPE html>
    <html lang="en">
      <head>
        
        @include('admin.admincss');
      </head>
      <body>
      <div class="container-scroller">

    @include('admin.adminNav');
 <div style="position:relative; top:30px, right:-150px;">
     <table style="border:1px solid white">
         <tr><th>Name</th>
             <th>Email</th>
             <th>Action</th>
         </tr>
         @foreach($data as $datas)
         <tr><td>{{$datas->name}}</td>
             <td>{{$datas->email}}</td>
             @if($datas->usertype=='1')
             <td><a style="cursor:not-allowed; color:blue;">Not-allowed</a></td>
             @else
             <td><a href="{{url('/deleteusers',$datas->id)}}">Delete</a></td>
             @endif
         </tr>
         @endforeach
     </table>

 </div>
  
      </div>
       
        @include('admin.adminscript');

       
      </body>
    </html>
</body>
</html>