<!DOCTYPE html>
<html lang="en">

  <head>
      <base href="/public">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">

    <title>Klassy Cafe - Restaurant HTML Template</title>
<!--
    
TemplateMo 558 Klassy Cafe

https://templatemo.com/tm-558-klassy-cafe

-->
    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-klassy-cafe.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <style>
      table{
          width: 780px;
          height: auto;
      }
        tr, th,td{
            background-color:lightskyblue;
            padding:10px;
            align-items: center;
            margin:5px;
         
        }
        
    </style> 

    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/klassy-logo.png" align="klassy cafe html template">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="#top" class="active">Home</a></li>
                            <li class="scroll-to-section"><a href="#about">About</a></li>
                           	
                        <!-- 
                            <li class="submenu">
                                <a href="javascript:;">Drop Down</a>
                                <ul>
                                    <li><a href="#">Drop Down Page 1</a></li>
                                    <li><a href="#">Drop Down Page 2</a></li>
                                    <li><a href="#">Drop Down Page 3</a></li>
                                </ul>
                            </li>
                        -->
                            <li class="scroll-to-section"><a href="#menu">Menu</a></li>
                            <li class="scroll-to-section"><a href="#chefs">Chefs</a></li> 
                            <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a href="#">Features Page 4</a></li>
                                </ul>
                            </li>
                            <li class="scroll-to-section"><a href="#reservation">Contact Us</a></li> 
                            <li>
                            <li class="scroll-to-section">
                            @auth
                            <a style="color:red;" href="{{url('/showcart',Auth::user()->id)}}">
                            Cart[{{$count}}]
                        @endauth
                        @guest 
                         Cart[0]
                        @endguest
                     </a></li> 
                            <li>
                            @if (Route::has('login'))
                <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                     <li>
                     <x-app-layout>
    
                     </x-app-layout>
                     </li>
                    @else
                     <li> <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a></li>

                        @if (Route::has('register'))
                        <li> <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a></li>
                        @endif
                    @endauth
                </div>
            @endif

 </li>
                            <!-- <li class=""><a rel="sponsored" href="https://templatemo.com" target="_blank">External URL</a></li> -->
          
            </ul>        
                        
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->
    <div id="top">
    <div style="position:relative; top:30px, right:-150px;">
     <table align="center">
            <tr>
                <th>FoodName</th>
                <th>Quantity</th>
                <th>price</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
            <form method="post" action="{{url('/orderconfirm')}}">
                @csrf
  @foreach($data as $datas)

<tr>
<input type="text" name="foodname[]" value="{{$datas->title}}"hidden="">
    <td>{{$datas->title}}</td>
    <input type="text" name="quantity[]" value="{{$datas->quantity}}"hidden="">
    <td>{{$datas->quantity}}</td>
    <input type="text" name="price[]" value="{{$datas->price}}" hidden="">
    <td>${{$datas->price}}</td>
    <td> <img style="height:50px; width:50px;"src="/foodpicture/{{$datas->image}}"> </td>
    </tr>
@endforeach

 @foreach($data2 as $data21)
 <tr style="position:relative; top:-140px; right:-570px;padding:20px;">
    <td>
    <a style="padding:12px;"class="btn btn-warning" href="{{url('/removecart',$data21->id)}}">Remove</a>
    </td>
    
 </tr>
 @endforeach 
        </table>
        <div align="center" style="padding:10px; margin-top:-70px;" >
        <button class="btn btn-primary" type="button" id="order" >ordernow</button>
    </div>
    <div align="center" id="details" style="display:none;">
    <div>
        <label>Name</label>
        <input type="text"style="margin-top:5px;" name="name" placeholder="Name" required>
    </div>
    <div>
        <label>Phone</label>
        <input type="text" name="phone" style="margin-top:5px;"placeholder="Phone_number" required>
    </div>
    <div>
        <label style="top:-15px;">Address</label>
        <textarea type="text" name="address"style="margin-top:5px;" placeholder="Address" required> </textarea>
    </div>
    <div>
    
        <input type="submit" class="btn btn-success" name="ordernow" value="confirm-order">
        <button type="button" class="btn btn-danger" id="close" > close</button>
    </div>
    </div>
    </form>
    </div>
    
    </div>
    <!-- ***** Main Banner Area Start ***** -->
    
<script type="text/javascript">
$('#order').click(
    function()
    {
   $('#details').show();

}

);
$('#close').click(
    function()
    {
   $('#details').hide();

}

);
    </script>
    
    <!-- ***** Footer Start ***** -->
    

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>
    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>
  </body>
</html>