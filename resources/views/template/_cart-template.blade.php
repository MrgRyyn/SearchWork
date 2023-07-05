<section id="cart" class="py-3">
    <div class="cart-item">
        <div class="cart-boxx">
            @unless($carts->isEmpty())
            @php
            $subtotal = 0;
            $itemCount = count($carts);
            @endphp
            @foreach ($carts as $product)
            <!-- cart item -->
            <div class="cart-detail">
                <div class="col-sm-2">
                    <img src="{{asset('storage/images/'.$product->image)}}" class="img-fluid">
                </div>
                <div class="cart-text">
                    <h5>{{$product->title_service}}</h5>
                    <small>Bandung</small>
                    <!-- product rating -->
                    <div class="d-flex">
                        <div class="rating">
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                        </div>
                    </div>
                    <!--  !product rating-->
    
                    <!-- product qty -->
                    <div class="cart-option">
                        <select id="package-select">
                            <option value="Rp{{ number_format($product->price) }}">Select package</option>
                            <option value="Rp{{ number_format($product->price) }}">Basic</option>
                            <option value="Rp{{ number_format($product->price2) }}">Standard</option>
                            <option value="Rp{{ number_format($product->price3) }}">Premium</option>
                        </select>
                        <form method="POST" action="{{ route('cart.destroy', $product->id) }}">
                            @csrf
                            @method('DELETE')
                            <button class="text-red-500 delete"><i class="fa-solid fa-trash"></i> Delete</button>
                            <button type="submit" class="btn font-baloo text-danger">Save for Later</button>
                        </form>
                    </div>
                    <!-- !product qty -->
                </div>
    
                <div class="col-sm-2 text-right">
                    <div class="price">
                        <p id="package-price">Rp{{ number_format($product->price) }}</p>
                    </div>
                </div>
            </div>
            <!-- !cart item -->
            @php
            $subtotal += $product->price;
            @endphp
            @endforeach           
        </div>
        <!-- subtotal section-->
        <div class="total">
            <div class="sub-total">
                <div class="all-total">
                    <h5 class="font-baloo font-size-20">
                        Subtotal ({{ $itemCount }} item)
                        <span class="text-danger">
                            <span class="text-danger" id="deal-price">Rp{{ number_format($subtotal) }}</span>
                        </span>
                    </h5>
                    <a href="/pay"><button>Proceed to Buy</button></a>
                </div>
            </div>
        </div>
        @else
        <p>No added to cart found</p>
        <div class="total">
            <div class="sub-total">
                <div class="all-total">
                    <h5 class="font-baloo font-size-20">
                        Subtotal (0 item)
                        <span class="text-danger">
                            <span class="text-danger" id="deal-price">Rp 0</span>
                        </span>
                    </h5>
                    <button>Proceed to Buy</button>
                </div>
            </div>
        </div>
        @endunless
    </div>
</section>