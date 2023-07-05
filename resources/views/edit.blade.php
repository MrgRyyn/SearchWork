@include('header')

<section id="create-service">
    <div class="creating">
        <form method="POST" action="{{ route('products.update', $product->id) }}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <input type="hidden" name="user_id" id="user_id" value="{{auth()->user()->id}}">
            <div class="input-create">
                <div class="create-text">
                    <h2>Title</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
                </div>
                <input type="text" name="title_service" value="{{ $product->title_service }}" placeholder="Example: Jasa membuat website menggunakan html" class="input">
                @error('title_service')
                    <p class="text-red-500 text-xs t-1"> {{$message}} </p>
                @enderror
            </div>
            
            <div class="input-create">
                <div class="create-text">
                    <h2>Category</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
                </div>
                <select name="service_category" id="service-cate" placeholder="{{$product->service_category}}" name="service_category">
                    <option value="{{$product->service_category}}">{{$product->service_category}}</option>
                    <option value="graphic">Graphic & Design</option>
                    <option value="photography">Photography & Videography</option>
                    <option value="editing">Video & Photo Editing</option>
                    <option value="gaming">Gaming</option>
                    <option value="web">Web Development</option>
                    <option value="business">Business</option>
                    <option value="music">Music & Audio</option>
                    <option value="other">Other</option>
                </select>
                @error('logo')
                <p class="text-red-500 text-xs t-1"> {{$message}} </p>
                @enderror
            </div>

            <div class="input-create">
                <div class="create-text">
                    <h2>Portofolio Image</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
                </div>
                <div class="insert-img">
                    <div class="img-input-box">
                        <span>Image 1</span>
                        <input type="file" class="img-input" name="image" id="image">
                    </div>
                    <div class="img-input-box">
                        <span>Image 2</span>
                        <input type="file" class="img-input" name="image2" id="image2">
                    </div>
                    <div class="img-input-box">
                        <span>Image 3</span>
                        <input type="file" class="img-input" name="image3" id="image3" >
                    </div>
                    <div class="img-input-box">
                        <span>Image 4</span>
                        <input type="file" class="img-input" name="image4" id="image4">
                    </div>
                </div>
            </div>

            <div class="input-create">
                <div class="create-text">
                    <h2>Description</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
                </div>
                <textarea
                    name="service_description"
                    value="{{old('service_description')}}"
                    rows="10"
                    placeholder="">
                    {{$product->service_description}}
                </textarea>
            </div>

            <div class="input-create">
                <div class="create-text">
                    <h2>Location</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
                </div>
                <div class="location-div">
                    <div class="location">
                        <span>Kota</span>
                        <input type="text" name="kota" value="{{$product->kota}}" placeholder="Example: Bandung" class="input">
                        @error('kota')
                            <p class="text-red-500 text-xs t-1"> {{$message}} </p>
                        @enderror
                    </div>
                    <div class="location">
                        <span>Kecamatan</span>
                        <input type="text" name="kecamatan" value="{{$product->kecamatan}}" placeholder="Example: Arcamanik" class="input">
                    </div>
                    <div class="location">
                        <span>Jalan</span>
                        <input type="text" name="jalan" value="{{$product->jalan}}" placeholder="Example: Jl. Olahraga No.5" class="input">
                    </div>
                </div>
                
            </div>

            <div class="input-create">
                <div class="create-text">
                    <h2>Method</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
                </div>
                <select name="service_method" id="method" placeholder="Service Method" value="{{old('service_method')}}">
                    <option value="{{$product->service_method}}">{{$product->service_method}}</option>
                    <option value="Offline">Offline</option>
                    <option value="Online">Online</option>
                    <option value="Shipp">Shipp package</option>
                </select>
                @error('service_ethod')
                <p class="text-red-500 text-xs t-1"> {{$message}} </p>
                @enderror
            </div>

            <div class="input-create">
                <div class="create-text">
                    <h2>Basic Package</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
                </div>
                <textarea
                name="package_des"
                id="package_des"
                rows="3"
                placeholder="Fix html file">{{$product->package_des}}
            </textarea>
            </div>

            <div class="input-create">
                <div class="create-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
                </div>
                <div class="input-price">
                    <span>Rp</span>
                    <input type="text" name="price_display" id="price_display" value="{{number_format($product->price)}}" oninput="formatInput(this, 'price')">
                    <input type="hidden" name="price" id="price" value="{{($product->price)}}" >
                </div>
            </div>

            <div class="input-create">
                <div class="create-text">
                    <h2>Standard Package</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
                </div>
                <textarea
                name="package_des2"
                id="package_des2"
                rows="3"
                placeholder="Example: Html code only no css ">{{$product->package_des2}}
                </textarea>
            </div>

            <div class="input-create">
                <div class="create-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
                </div>
                <div class="input-price">
                    <span>Rp</span>
                    <input type="text" name="price2_display" id="price2_display" value="{{number_format($product->price2)}}" oninput="formatInput(this, 'price2')">
                    <input type="hidden" name="price2" id="price2" value="{{($product->price2)}}" >
                </div>
            </div>

            <div class="input-create">
                <div class="create-text">
                    <h2>Premium Package</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
                </div>
                <textarea
                name="package_des3"
                id="package_des3"
                rows="3"
                placeholder="">{{$product->package_des3}}
            </textarea>
            </div>
            <div class="input-create">
                <div class="create-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
                </div>
                <div class="input-price">
                    <span>Rp</span>
                    <input type="text" name="price3_display" id="price3_display" value="{{number_format($product->price3)}}" oninput="formatInput(this, 'price3')">
                    <input type="hidden" name="price3" id="price3" value="{{($product->price3)}}" >
                </div>
            </div>

            <div class="input-create">
                <div class="create-text">
                    <h2>Estimated Finish time</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
                </div>
                <div class="time-select">
                    <input type="text" placeholder="example: 1" class="password" name="service_time" value="{{$product->service_time}}">
                    <select id="" class="select-time" name="service_units_time">
                        <option value="{{$product->service_units_time}}">{{$product->service_units_time}}</option>
                        <option value="Minute">Minute</option>
                        <option value="hour">hour</option>
                        <option value="days">days</option>
                        <option value="week">week</option>
                        <option value="month">Month</option>
                    </select>
                </div>
            </div>

            <div class="input-create">
                <div class="create-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
                </div>
                <div class="time-select">
                    <input type="text" placeholder="example: 1" class="password" name="service_time2" value="{{$product->service_time2}}"> 
                    <select  id="" class="select-time" name="service_units_time2">
                        <option value="{{$product->service_units_time2}}">{{$product->service_units_time2}}</option>
                        <option value="Minute">Minute</option>
                        <option value="hour">hour</option>
                        <option value="days">days</option>
                        <option value="week">week</option>
                        <option value="month">Month</option>
                    </select>
                </div>
            </div>
                <button class="btn-create" type="submit">Edit Service</button>
            </div>
        </form>
    </div>
</section>

@include('footer')

<script>
    function formatInput(inputElement, targetInputId) {
            let currentValue = inputElement.value;
            let formattedValue = currentValue.replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            let numericValue = parseInt(formattedValue.replace(/,/g, ""));
            
            if (numericValue > 99999999999) {
                formattedValue = "99,999,999,999";
                numericValue = 99999999999;
            }
            
            inputElement.value = formattedValue;
            document.getElementById(targetInputId).value = numericValue;
        }
</script>