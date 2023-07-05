<section id="create-service">
    <div class="creating">
        <form method="POST" action="{{ route('products.store') }}" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="user_id" id="user_id" value="{{auth()->user()->id}}">
            <div class="input-create">
                <div class="create-text">
                    <h2>Title</h2>
                    <p>The title of your service is an important aspect that can influence potential customers to click on your service and learn more about what you offer. A great title should be descriptive, catchy, and unique. Make sure that it accurately reflects what your service provides, and try to use language that is attention-grabbing and memorable.</p>
                </div>
                <input type="text" name="title_service" value="{{old('title_service')}}" placeholder="Example: Jasa membuat website menggunakan html" class="input">
                @error('title_service')
                    <p class="text-red-500 text-xs t-1"> {{$message}} </p>
                @enderror
            </div>
            
            <div class="input-create">
                <div class="create-text">
                    <h2>Category</h2>
                    <p>Choosing the right category for your service is important because it can help potential customers find your service more easily. Make sure to select the category that best fits your service and be as specific as possible. This will help to ensure that your service is displayed to the right audience and increase the likelihood of generating interest and sales.</p>
                </div>
                <select name="service_category" id="service-cate" placeholder="Service category" name="service_category" value="{{old('service_category')}}">
                    <option>kategory jasa</option>
                    <option value="graphic">Graphic & Design</option>
                    <option value="photography">Photography & Videography</option>
                    <option value="editing">Video & Photo Editing</option>
                    <option value="gaming">Gaming</option>
                    <option value="web">Web Development</option>
                    <option value="business">Business</option>
                    <option value="music">Music & Audio</option>
                    <option value="other">Other</option>
                </select>
                @error('service_category')
                <p class="text-red-500 text-xs t-1"> {{$message}} </p>
                @enderror
            </div>

            <div class="input-create">
                <div class="create-text">
                    <h2>Portofolio Image</h2>
                    <p>Adding a portfolio of your previous projects is a great way to showcase your skills and give potential customers a better idea of what they can expect from your service. Make sure to select your best work and include a variety of examples that demonstrate your expertise in your chosen field.</p>
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
                    <p>This is where you get to really sell your service and convince potential buyers to choose you over your competitors. Write a clear and concise description of what your service offers, highlighting its unique features and benefits. Use persuasive language and be sure to address any pain points your target audience may have. Consider including a brief introduction of yourself and your qualifications, as well as any relevant experience or education you have in the field. The more information you can provide, the better your chances of attracting interested buyers. Don't be afraid to let your personality shine through and make a personal connection with your audience. Remember, the service description is often the first impression potential buyers have of your service, so make it count!</p>
                </div>
                <textarea
                    name="service_description"
                    value="{{old('service_description')}}"
                    rows="10"
                    placeholder="">
                    
                </textarea>
            </div>

            <div class="input-create">
                <div class="create-text">
                    <h2>Method</h2>
                    <p>The method in which you deliver your service is important to consider because it can impact the customer's experience and satisfaction with your service. You can choose from online, offline or shipping methods depending on the type of service you provide. Make sure to clearly indicate how you will deliver your service to customers, so they know what to expect.</p>
                </div>
                <select name="service_method" id="method" placeholder="Service Method" value="{{old('service_method')}}">
                    <option>Service Method</option>
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
                    <h2>Location</h2>
                    <p>If you offer a physical service that requires you to be present in a specific location, then adding your location can help potential customers determine whether your service is available in their area. This information is also important if you offer local pickup or delivery options. If your service is entirely online, you can simply state that your service is available worldwide or not limited by location.</p>
                </div>
                <div class="location-div">
                    <div class="location">
                        <span>Kota</span>
                        <input type="text" name="kota" value="{{old('kota')}}" placeholder="Example: Bandung" class="input">
                        @error('kota')
                            <p class="text-red-500 text-xs t-1"> {{$message}} </p>
                        @enderror
                    </div>
                    <div class="location">
                        <span>Kecamatan</span>
                        <input type="text" name="kecamatan" value="{{old('kecamatan')}}" placeholder="Example: Arcamanik" class="input">
                        @error('kecamatan')
                            <p class="text-red-500 text-xs t-1"> {{$message}} </p>
                        @enderror
                    </div>
                    <div class="location">
                        <span>Jalan</span>
                        <input type="text" name="jalan" value="{{old('jalan')}}" placeholder="Example: Jl. Olahraga No.5" class="input">
                        @error('jalan')
                            <p class="text-red-500 text-xs t-1"> {{$message}} </p>
                        @enderror
                    </div>
                </div>
                
            </div>

            <div class="input-create">
                <div class="create-text">
                    <h2>Basic Package</h2>
                    <p>These are different levels of service packages that you can offer, each with a different set of features and price points. Offering multiple packages can help to attract customers with varying budgets and needs. Make sure to clearly indicate what is included in each package and the corresponding price. This will help customers make an informed decision and select the package that best suits their needs.</p>
                </div>
                <textarea
                name="package_des"
                id="package_des"
                value="{{old('package_des')}}"
                rows="3"
                placeholder="">
            </textarea>
            </div>

            <div class="input-create">
                <div class="create-text">
                </div>
                <div class="input-price">
                    <span>Rp</span>
                    <input type="text" name="price_display" id="price_display" value="{{old('price')}}" oninput="formatInput(this, 'price')">
                    <input type="hidden" name="price" id="price" value="{{old('price')}}" >
                </div>
            </div>

            <div class="input-create">
                <div class="create-text">
                    <h2>Standard Package</h2>
                    <p>These are different levels of service packages that you can offer, each with a different set of features and price points. Offering multiple packages can help to attract customers with varying budgets and needs. Make sure to clearly indicate what is included in each package and the corresponding price. This will help customers make an informed decision and select the package that best suits their needs.</p>
                </div>
                <textarea
                name="package_des2"
                id="package_des2"
                rows="3"
                placeholder="Example: Html code only no css ">
                </textarea>
            </div>

            <div class="input-create">
                <div class="create-text">
                </div>
                <div class="input-price">
                    <span>Rp</span>
                    <input type="text" name="price2_display" id="price3_display" value="{{old('price2')}}" oninput="formatInput(this, 'price2')">
                    <input type="hidden" name="price2" id="price2" value="{{old('price2')}}" >
                </div>
            </div>

            <div class="input-create">
                <div class="create-text">
                    <h2>Premium Package</h2>
                    <p>These are different levels of service packages that you can offer, each with a different set of features and price points. Offering multiple packages can help to attract customers with varying budgets and needs. Make sure to clearly indicate what is included in each package and the corresponding price. This will help customers make an informed decision and select the package that best suits their needs.</p>
                </div>
                <textarea
                name="package_des3"
                id="package_des3"
                rows="3"
                placeholder="">
            </textarea>
            </div>
            <div class="input-create">
                <div class="create-text">
                </div>
                <div class="input-price">
                    <span>Rp</span>
                    <input type="text" name="price3_display" id="price3_display" value="{{old('price3')}}" oninput="formatInput(this, 'price3')">
                    <input type="hidden" name="price3" id="price3" value="{{old('price3')}}" >
                </div>
            </div>

            <div class="input-create">
                <div class="create-text">
                    <h2>Estimated Finish time</h2>
                    <p>Setting an estimated finish time is important because it gives customers an idea of when they can expect to receive their completed project. This information can also help you manage customer expectations and plan your workload accordingly. Make sure to be realistic with your estimated finish time and communicate any delays or changes to your customers as soon as possible.</p>
                </div>
                <div class="time-select">
                    <input type="number" placeholder="example: 1" class="password" name="service_time">
                    <select id="" class="select-time" name="service_units_time">
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
                </div>
                <div class="time-select">
                    <input type="number" placeholder="example: 1" class="password" name="service_time2"> 
                    <select  id="" class="select-time" name="service_units_time2">
                        <option value="Minute">Minute</option>
                        <option value="hour">hour</option>
                        <option value="days">days</option>
                        <option value="week">week</option>
                        <option value="month">Month</option>
                    </select>
                </div>
            </div>
                <button class="btn-create" type="submit">Make a Service</button>
            </div>
        </form>
    </div>
</section>