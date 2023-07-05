<section id="payment">
    <div class="payment-box">
        <h1>Checkout</h1>
        <form method="POST" action="/add_to_order">
        @unless($carts->isEmpty())
        @foreach ($carts as $product)
        <div class="service-buy">
            <input type="hidden" name="product_id" value="{{ $product->id }}">
            <img src="{{asset('storage/images/'.$product->image)}}" alt="">
            <input type="hidden" name="image" value="{{ $product->image }}">
            <div class="service-buy-des">
                <a href=""><h2>{{$product->title_service}}</h2></a>
                <input type="hidden" name="title_service" value="{{ $product->title_service }}">
                <p>{{$product->service_method}}</p>
                <p>Bandung</p>
                <h2>Rp{{number_format($product->price)}}</h2>
                <input type="hidden" name="service_method" value="{{ $product->service_method }}">
                <input type="hidden" name="price" value="{{ $product->price }}">
            </div>
        </div>
        @endforeach
        @else 
            <p>No added to cart found</p>
        @endunless
        @csrf
        <div class="pay-address">
            <h2>Information</h2>
            <div class="input-pay">
                <span class="pay-name">Full name</span>
                <input type="text" placeholder="Enter your name" value="{{auth()->user()->name}}">
            </div>
            <div class="input-pay">
                <span class="pay-phone">Phone Number</span>
                <input type="number" placeholder="Enter your phone number" value="{{auth()->user()->phone_number}}">
            </div>
            <div class="input-pay">
                <span class="pay-city">City</span>
                <input type="text" placeholder="Enter your City" value="{{auth()->user()->city}}"> 
            </div>
            <div class="input-pay">
                <span>Complete location</span>
                <input type="text" placeholder="Enter your location" value="{{auth()->user()->address}}">
            </div>
        </div>

        <div class="total-pay">
            <h2>Total</h2>

            <div class="shipping-select">
                <span>Chose your delevery</span>
                <select name="shipping" id="shipping">
                    <option value="regular">regular</option>
                    <option value="next day">next day</option>
                    <option value="same day">same day</option>
                </select>
            </div>

            <div class="total-price">
                <p>Total Price:</p>
                <h3 id="package-price" name="price">Rp{{ number_format($product->price) }}</h3>
            </div>
        </div>

        @auth
            <input type="hidden" name="user_id" id="user_id" value="{{ auth()->user()->id }}">
        @endauth
        <button class="checkout-btn" type="submit">Checkout</button>
        </form>
    </div>
</section>