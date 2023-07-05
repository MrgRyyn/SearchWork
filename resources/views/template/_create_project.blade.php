<section id="create-project">
    <div class="creating">
        <form method="POST" action="{{ route('projects.store') }}">
            @csrf
            <input type="hidden" name="user_id" id="user_id" value="{{auth()->user()->id}}">
            <div class="input-create">
                <div class="create-text">
                    <h2>Title</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
                </div>
                <input type="text" name="project_name" value="{{old('project_name')}}" placeholder="Example: Jasa membuat website menggunakan html" class="input">
            </div>
            
            <div class="input-create">
                <div class="create-text">
                    <h2>Category</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
                </div>
                <select name="project_category" id="service-cate" placeholder="project category" name="project_category" value="{{old('project_category')}}">
                    <option value="kategory">kategory jasa</option>
                    <option value="graphic">Graphic & Design</option>
                    <option value="photography">Photography & Videography</option>
                    <option value="editing">Video & Photo Editing</option>
                    <option value="gaming">Gaming</option>
                    <option value="web">Web Development</option>
                    <option value="business">Business</option>
                    <option value="music">Music & Audio</option>
                    <option value="other">Other</option>
                </select>
            </div>

            <div class="input-create">
                <div class="create-text">
                    <h2>Reference Image</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
                </div>
                <div class="insert-img">
                    <div class="img-input-box">
                        <span>Image 1</span>
                        <input type="file" value="" class="img-input" name="image" value="{{old('image')}}">
                    </div>
                    <div class="img-input-box">
                        <span>Image 2</span>
                        <input type="file" value="" class="img-input" name="image2" value="{{old('image2')}}">
                    </div>
                    <div class="img-input-box">
                        <span>Image 3</span>
                        <input type="file" value="" class="img-input" name="image3" value="{{old('image3')}}">
                    </div>
                    <div class="img-input-box">
                        <span>Image 4</span>
                        <input type="file" value="" class="img-input" name="image4" value="{{old('image4')}}">
                    </div>
                </div>
            </div>

            <div class="input-create">
                <div class="create-text">
                    <h2>Description</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
                </div>
                <textarea
                    name="item_description"
                    value="{{old('item_description')}}"
                    rows="10"
                    placeholder="">
                    
                </textarea>
            </div>

            <!-- <div class="input-create">
                <div class="create-text">
                    <h2>Basic Package</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
                </div>
                <textarea
                name="description"
                value="{{old('description')}}"
                rows="3"
                placeholder="">
            </textarea>
            </div> -->

            <div class="input-create">
                <div class="create-text">
                    <h2>Starting Price</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
                </div>
                <div class="input-price">
                    <span>Rp</span>
                    <input type="text" name="price_display" id="price_display" value="{{old('price')}}" oninput="formatInput(this, 'price')">
                    <input type="hidden" name="price" id="price" value="{{old('price')}}" >
                </div>
            </div>

            <!-- <div class="input-create">
                <div class="create-text">
                    <h2>Standard Package</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
                </div>
                <textarea
                name="description"
                rows="3"
                placeholder="Example: Html code only no css ">
                </textarea>
            </div>

            <div class="input-create">
                <div class="create-text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
                </div>
                <textarea
                name="description"
                rows="3"
                placeholder="">
            </textarea>
            </div> -->
            <div class="input-create">
                <div class="create-text">
                    <h2>Maximum Price</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
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
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ducimus veniam dolorem, nulla quaerat distinctio nostrum aut id iste quisquam a nobis quas aspernatur beatae accusantium quam voluptatibus, velit magni alias.</p>
                </div>
                <div class="time-select">
                    <input type="text" placeholder="example: 1" class="password" name="service_time">
                    <select name="time" id="" class="select-time" name="service_units_time">
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
                    <input type="text" placeholder="example: 1" class="password" name="service_time2"> 
                    <select name="time" id="" class="select-time" name="service_units_time2">
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