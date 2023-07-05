<div id="product2" class="section-p1">
    <div class="pro-container">
                @unless(count($products) == 0)
                    @foreach($products as $product)
                    <div class="pro-card item {{$product->service_category}}">
                        <a href="{{ route('service-detail', $product->id) }}">
                        <div class="product-image">
                            <img src="{{asset('storage/images/'.$product->image)}}" >
                        </div>
                        <div class="product-body">
                            <h3 class="product-title">{{$product->title_service}}</h3>
                            <span>Bandung</span>
                            <div class="rates-form">
                                <div class="product-rates">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                                <form method="POST" action="/add_to_cart" class="small-cart add-cart cart1">
                                    @csrf
                                    @auth
                                    <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
                                    @endauth
                                    <input type="hidden" name="product_id" value="{{ $product->id }}">
                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                    <input type="hidden" name="price2" value="{{ $product->price2 }}">
                                    <input type="hidden" name="price3" value="{{ $product->price3 }}">
                                    <input type="hidden" name="service_method" value="{{ $product->service_method }}">
                                    <input type="hidden" name="image" value="{{ $product->image }}">
                                    <input type="hidden" name="title_service" value="{{ $product->title_service }}">
                                    @auth
                                    <button type="submit" class="btn btn-success font-size-12"><img src="img/small cart.png" alt="small cart"></button>
                                    @else
                                    <a href="{{ route('login') }}" class="btn btn-success font-size-12"><img src="img/small cart.png" alt="small cart"></a>
                                    @endauth
                                </form>                                
                            </div>
                            <div class="product-price">
                                <h3>Start at</h3>
                                <h4>Rp{{ number_format($product->price) }} </h4>
                            </div>
                        </div>
                        </a>
                    </div>
                    @endforeach
                    @else 
                    <p>No service found</p>
                @endunless
             </div>             
</div>

