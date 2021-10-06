<section class="section" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="section-heading">
                        <h6>Our Menu</h6>
                        <h2>Our selection of cakes with quality taste</h2>
                    </div>
                </div>
            </div>
        </div>
        <div class="menu-item-carousel">
            <div class="col-lg-12">
                <div class="owl-menu-item owl-carousel">
                    @foreach($data as $datas)
                    <form method="post" action="{{url('/addcart',$datas->id)}}">
                    @csrf
                    <div class="item">
                        <div style="background-image:url('/foodpicture/{{$datas->image}}');" class='card'>
                            <div class="price"><h6>{{$datas->price}}</h6></div>
                            <div class='info'>
                              <h1 class='title'>{{$datas->title}}</h1>
                              <p class='description'>{{$datas->description}}.</p>
                              <div class="main-text-button">
                                  <div class="scroll-to-section"><a href="#reservation">Make Reservation <i class="fa fa-angle-down"></i></a></div>
                              </div>
                            </div>
                        </div>
                        <input type="number" name="quantity" min="1" value="1" style="width:234px;">
                        <input type="submit" name="addtocart" value="add to cart"
                         style="padding:10px; background-color:#f04242; width:234px;">
                    </div>
</form>
                   @endforeach
                </div>
            </div>
        </div>
    </section>