<nav class=" navbar-service-page hidden md:flex flex-col">
    @include('header')
    <section class=" fixed pt-20 pb-2 shadow-md service-direction w-screen gap-4 bg-white hidden items-center justify-center">
        <a href="#service-des"><li class=" border-b border-blue-500 px-2 py-2 list-none">Service Description</li></a>
        <a href="#service-des"><li class=" list-none px-2 py-2">Review</li></a>
        <a href="#service-des"><li class=" list-none px-2 py-2">Recomendation</li></a>
    </section>
</nav>

<div class=" fixed left-5 top-5 flex items-center justify-center w-14 h-14 rounded-full opacity-50 bg-black md:hidden">
    <a href="javascript:history.back()"><i class="fa-solid fa-arrow-left text-white text-xl"></i></a>
</div>

<section id="service-des" class="flex items-center justify-center flex-col">

    <div class="flex md:container md:pt-20 md:px-20">
        <h6 class=" hidden md:flex">{{$product->service_method}} </h6>
    </div>


    <div class="flex flex-col items-start justify-center md:gap-10 md:flex-wrap md:flex-row md:container md:pt-10">
        <div class="">

            <a href="{{asset('storage/images/'.$product->image)}}" data-lightbox="mainImage" data-title="mainImage" >
                <img src="{{asset('storage/images/'.$product->image)}}" width="100%" id="MainImg" class=" md:h-96 md:w-96 object-cover md:rounded-md border border-gray-100" alt="">
            </a>


            <div class=" w-full flex items-center justify-start flex-row md:mt-2">
                <div class="">
                    <img src="{{asset('storage/images/'.$product->image)}}" width="100%" class="small-img md:w-20 md:h-20 object-cover md:mr-2  md:rounded-md" alt="" onclick='updateImage("{{asset('storage/images/'.$product->image)}}")'>
                </div>
                @if ($product->image2)
                    <div class="">
                        <img src="{{asset('storage/images/'.$product->image2)}}" width="100%" class="small-img md:w-20 md:h-20 object-cover md:mx-2 md:rounded-md" alt="" onclick='updateImage("{{asset('storage/images/'.$product->image2)}}")'>
                    </div>
                @endif
                @if ($product->image3)
                    <div class="">
                        <img src="{{asset('storage/images/'.$product->image3)}}" width="100%" class="small-img md:w-20 md:h-20 object-cover md:mx-2 md:rounded-md" alt="" onclick='updateImage("{{asset('storage/images/'.$product->image3)}}")'>
                    </div>
                @endif
                @if ($product->image4)
                    <div class="">
                        <img src="{{asset('storage/images/'.$product->image4)}}" width="100%" class="small-img md:w-20 md:h-20 object-cover md:ml-2 md:rounded-md" alt="" onclick='updateImage("{{asset('storage/images/'.$product->image4)}}")'>
                    </div>
                @endif
            </div>
        </div>

        {{-- <div class="md:hidden">
            <h6>{{$product->service_method}} </h6>
        </div> --}}

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

        <div class=" px-5 md:w-96  md:px-0">
            <h4 class=" font-bold text-2xl">{{$product->title_service}}</h4>
            <p><span class=" text-sm text-gray-500">(0) Orders</span> | <i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i><i class="fa-solid fa-star"></i></p>

            <div class=" mt-5">
                <span class=" text-sm text-gray-500">Start at</span>
                <h2 class=" text-3xl font-semibold">Rp{{ number_format($product->price) }}</h2>
            </div>

            <div class=" mt-10">
                <p class="text-sm text-gray-500">Estimated service time</p>
                <h5 class="text-2xl font-bold">{{$product->service_time}} {{$product->service_units_time}} - {{$product->service_time2}} {{$product->service_units_time2}}</h5>
            </div>

            <div class=" mt-20">
                <h3 class=" w-32 border-b-4 flex items-center justify-center border-sky-600 pb-1 mb-2 text-gray-500">Product Details</h3>
                <p class="mt-4 mb-2 text-sm text-gray-500 font-normal">Service Method: <span class=" font-semibold text-blue-500 text-md">{{$product->service_method}}</span> </p>
                <span class=" text-sm">{{$product->service_description}} </span>
            </div>

            <div class="mt-10 flex items-center justify-around py-4 flex-row border-y-2 border-gray-300">
                <div class=" flex items-center justify-center gap-5">
                    <img src="{{asset('/img/User-Profile-PNG-Clipart.png')}}" alt="user-profile" class="user-profile">
                    <a href="" class="seller-username ml-3"><h1>{{$user->username}} </h1></a>
                </div>
                <a href=""><i class="fa-solid fa-comment-dots"></i></a>
            </div>
        </div>

        <div class="flex items-center justify-center px-5 mt-5 md:mt-0">
            <div class=" w-80 md:w-96 relative shadow-md z-0">
                <div class="flex items-center justify-center bg-gray-100">
                      <div id="basic packagess" class="clickable-div w-32 py-4 flex items-center justify-center border border-gray-400 bg-white border-b-4 border-b-black font-bold" type="button" onclick='updatePackage("{{$product->package_des}}", "Rp{{ number_format($product->price) }}")'>
                        <h2 class=" text-black cursor-pointer">Basic</h2>
                      </div>
                      <div id="standard packagess" class="clickable-div w-32 py-4 flex items-center justify-center border border-gray-400" type="button" onclick='updatePackage("{{$product->package_des2}}", "Rp{{ number_format($product->price2) }}")'>
                        <h2 class=" text-black cursor-pointer">Standard</h2>
                      </div>
                      <div id="premium packagess" class="clickable-div w-32 py-4 flex items-center justify-center border border-gray-400" type="button" onclick='updatePackage("{{$product->package_des3}}", "Rp{{ number_format($product->price3) }}")'>
                        <h2 class=" text-black cursor-pointer">Premium</h2>
                      </div>
                </div>
                <div class=" px-3 py-5">
                    <div class="flex flex-col items-start justify-start mb-20">
                        <p id="des-package" class=" text-sm">{{$product->package_des}} </p>
                        <h2 id="package-price" class="font-bold text-2xl mt-5">Rp{{ number_format($product->price) }}</h2>
                    </div>

                    {{-- button --}}
                    <div class=" ">
                        <button class="border border-sky-500 w-full py-2 flex items-center justify-center duration-100 ease-in mb-5 hover:text-white hover:bg-sky-500">Hire now</button>
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
                            <button class="border border-sky-500 w-full py-2 flex items-center justify-center duration-100 ease-in hover:text-white hover:bg-sky-500" type="submit">Add to cart</button>
                            @else
                            <a href="{{ route('login') }}" class="btn btn-success font-size-12"><button class="border border-sky-500 w-full py-2 flex items-center justify-center duration-100 ease-in hover:text-white hover:bg-sky-500">Add to cart</button></a>
                            @endauth
                        </form>

                    </div>
                </div>

            </div>
        </div>

    </div>
</section>

{{-- <div class="flex items-center justify-center bg-gray-200">
    <div id="basic packagess" class="clickable-div w-32 py-4 flex items-center justify-center border border-gray-400 bg-white border-b-4 border-b-black" onclick='changeColor(this)'>
        <h2 class="text-black cursor-pointer">Div 1</h2>
    </div>
    <div id="standard packagess" class="clickable-div w-32 py-4 flex items-center justify-center border border-gray-400" onclick='changeColor(this)'>
        <h2  class="text-black cursor-pointer">Div 2</h2>
    </div>
    <div id="premium packagess" class="clickable-div w-32 py-4 flex items-center justify-center border border-gray-400" onclick='changeColor(this)'>
        <h2 class="text-black cursor-pointer">Div 3</h2>
    </div>
</div> --}}

<script type="text/javascript">

    // service direction
    window.addEventListener('scroll', function() {
            let header = document.querySelector('.service-description');
            if(window.pageYOffset > 50) {
                header.classList.remove('hidden');
            } else {
                header.classList.add('hidden');
            }
    });

    function updatePackage(des, price) {
    document.getElementById("des-package").innerHTML = des;
    document.getElementById("package-price").innerHTML = price;
    document.getElementById("MainImg").innerHTML = image;
    document.getElementById("lightbox").innerHTML = image;
    }

  function updateImage(src) {
        document.getElementById("MainImg").src = src;
    }

    function updateLightbox(href) {
        document.getElementById("lightbox").href = href;
    }

        function togglePopup(){
            document.getElementById("popup-1").classList.toggle("active");
        }

        const navbar = document.querySelector('.service-direction');

        function toggleNavbarBackground() {
        if (window.scrollY > 0) {
            navbar.classList.remove('hidden');
            navbar.classList.add('block');
        } else {
            navbar.classList.remove('block');
            navbar.classList.add('hidden');
        }
        }

        function changeColor(element) {
        const clickableDivs = document.querySelectorAll('.clickable-div');

        clickableDivs.forEach(div => {
            div.classList.remove('bg-white', 'border-b-4', 'border-b-black', 'font-bold');
        });

        element.classList.add('bg-white', 'border-b-4', 'border-b-black', 'font-bold');
        }

        document.addEventListener('DOMContentLoaded', function() {
            const clickableDivs = document.querySelectorAll('.clickable-div');

            clickableDivs.forEach(div => {
                div.addEventListener('click', function() {
                    changeColor(this);
                });
            });
        });




</script>

<script src="{{asset('js/lightbox-plus-jquery.js')}}"></script>



