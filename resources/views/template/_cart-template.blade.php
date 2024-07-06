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

<div class="bg-gray-100 h-screen py-8">
    <div class="container mx-auto px-4">
        <h1 class="text-2xl font-semibold mb-4">Shopping Cart</h1>
        <div class="flex flex-col md:flex-row gap-4">
            <div class="md:w-3/4">
                <div class="bg-white rounded-lg shadow-md p-6 mb-4">
                    <table class="w-full">
                        <thead>
                            <tr>
                                <th class="text-left font-semibold">Product</th>
                                <th class="text-left font-semibold">Price</th>
                                <th class="text-left font-semibold">Quantity</th>
                                <th class="text-left font-semibold">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="py-4">
                                    <div class="flex items-center">
                                        <img class="h-16 w-16 mr-4" src="https://via.placeholder.com/150" alt="Product image">
                                        <span class="font-semibold">Product name</span>
                                    </div>
                                </td>
                                <td class="py-4">$19.99</td>
                                <td class="py-4">
                                    <div class="flex items-center">
                                        <button class="border rounded-md py-2 px-4 mr-2">-</button>
                                        <span class="text-center w-8">1</span>
                                        <button class="border rounded-md py-2 px-4 ml-2">+</button>
                                    </div>
                                </td>
                                <td class="py-4">$19.99</td>
                            </tr>
                            <!-- More product rows -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="md:w-1/4">
                <div class="bg-white rounded-lg shadow-md p-6">
                    <h2 class="text-lg font-semibold mb-4">Summary</h2>
                    <div class="flex justify-between mb-2">
                        <span>Subtotal</span>
                        <span>$19.99</span>
                    </div>
                    <div class="flex justify-between mb-2">
                        <span>Taxes</span>
                        <span>$1.99</span>
                    </div>
                    <div class="flex justify-between mb-2">
                        <span>Shipping</span>
                        <span>$0.00</span>
                    </div>
                    <hr class="my-2">
                    <div class="flex justify-between mb-2">
                        <span class="font-semibold">Total</span>
                        <span class="font-semibold">$21.98</span>
                    </div>
                    <button class="bg-blue-500 text-white py-2 px-4 rounded-lg mt-4 w-full">Checkout</button>
                </div>
            </div>
        </div>
    </div>
</div>