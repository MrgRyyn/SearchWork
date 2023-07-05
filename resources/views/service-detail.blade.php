
@include('header')

<section id="prodetails">
    <div class="detail-box">
        <div class="single-pro-image">
            <h2>Project example</h2>
            <img src="{{asset('storage/images/'.$product->image)}}" width="100%" id="MainImg" alt="">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="{{asset('storage/images/'.$product->image)}}" width="100%" class="small-img" alt="" onclick='updateImage("{{asset('storage/images/'.$product->image)}}")'>
                </div>
                @if ($product->image2)
                    <div class="small-img-col">
                        <img src="{{asset('storage/images/'.$product->image2)}}" width="100%" class="small-img" alt="" onclick='updateImage("{{asset('storage/images/'.$product->image2)}}")'>
                    </div>
                @endif
                @if ($product->image3)
                    <div class="small-img-col">
                        <img src="{{asset('storage/images/'.$product->image3)}}" width="100%" class="small-img" alt="" onclick='updateImage("{{asset('storage/images/'.$product->image3)}}")'>
                    </div>
                @endif
                @if ($product->image4)
                    <div class="small-img-col">
                        <img src="{{asset('storage/images/'.$product->image4)}}" width="100%" class="small-img" alt="" onclick='updateImage("{{asset('storage/images/'.$product->image4)}}")'>
                    </div>
                @endif
            </div>
        </div>

        <!-- <div class="preview-detail">
            <div class="details">
                <span class="title">
                    image <p class="current-image">3</p>
                </span>
                <span class="icon fas fa-times"></span>
            </div>
            <div class="img-box">
                <div class="slide prev">
                    <i class="fas fa-angle-left"></i>
                </div>
                <div class="slide next">
                    <i class="fas fa-angle-right"></i>
                </div>
                <img src="img/gaming categories.jpg">
            </div>
        </div> -->

        <div class="single-pro-details">
            <h6>{{$product->service_method}} </h6>
            <h4>{{$product->title_service}}</h4>
            <h2>Rp{{ number_format($product->price) }}</h2>
            <h5>Estimated project time</h5>
            <h5>{{$product->service_time}}{{$product->service_units_time}}-{{$product->service_time2}}{{$product->service_units_time2}}</h5>
            <h3>Product Details</h3>
            <span>{{$product->service_description}} </span>
            <div class="user-prof">
                <img src="{{asset('/img/User-Profile-PNG-Clipart.png')}}" alt="user-profile" class="user-profile">
                <a href="" class="seller-username"><h1>{{$user->username}} </h1></a>
                <a href=""><i class="fa-solid fa-comment-dots"></i></a>
            </div>
        </div>

        <div class="package">
            <div class="package-name">
                <div id="basic" class="package-variant" type="button" onclick='updatePackage("{{$product->package_des}}", "Rp{{ number_format($product->price) }}")'>
                    <h2>Basic</h2>
                  </div>
                  <div id="standard" class="package-variant" type="button" onclick='updatePackage("{{$product->package_des2}}", "Rp{{ number_format($product->price2) }}")'>
                    <h2>Standard</h2>
                  </div>
                  <div id="premium" class="package-variant" type="button" onclick='updatePackage("{{$product->package_des3}}", "Rp{{ number_format($product->price3) }}")'>
                    <h2>Premium</h2>
                  </div>
            </div>
            <div class="des">
                <p id="des-package">{{$product->package_des}} </p>
            </div>
            <div class="variant">
                <p id="package-price">Rp{{ number_format($product->price) }}</p>
                <button class="btn-hire">Hire now</button>
                <form method="POST" action="/add_to_cart" >
                    @csrf
                    @auth
                    <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
                    @endauth
                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <input type="hidden" name="price2" value="{{ $product->price2 }}">
                    <input type="hidden" name="price3" value="{{ $product->price3 }}">
                    <input type="hidden" name="image" value="{{ $product->image }}">
                    <input type="hidden" name="service_method" value="{{ $product->service_method }}">
                    <input type="hidden" name="title_service" value="{{ $product->title_service }}">
                    @auth
                    <button class="btn-cart" type="submit">Add to cart</button>
                    @else
                    <a href="{{ route('login') }}" class="btn btn-success font-size-12"><button class="btn-cart">Add to cart</button></a>
                    @endauth
                </form>
                
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">

    function updatePackage(des, price) {
    document.getElementById("des-package").innerHTML = des;
    document.getElementById("package-price").innerHTML = price;
    document.getElementById("MainImg").innerHTML = image;
  }

  function updateImage(src) {
        document.getElementById("MainImg").src = src;
    }

        function togglePopup(){
            document.getElementById("popup-1").classList.toggle("active");
        }

</script>

@include('footer')