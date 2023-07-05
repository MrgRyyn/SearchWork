
<section id="prodetails">
    <div class="detail-box">
        <div class="single-pro-image">
            <h2>Project example</h2>
            <img src="img/looking at pc.jpg" width="100%" id="MainImg" alt="">

            <div class="small-img-group">
                <div class="small-img-col">
                    <img src="img/looking at pc.jpg" width="100%" class="small-img" alt="" onclick=" imgSlider('img/looking at pc.jpg');">
                </div>
                <div class="small-img-col">
                    <img src="img/editing categories 2.jpg" width="100%" class="small-img" alt="" onclick=" imgSlider('img/editing categories 2.jpg');">
                </div>
                <div class="small-img-col">
                    <img src="img/business categories.jpg" width="100%" class="small-img" alt="" onclick=" imgSlider('img/business categories.jpg');">
                </div>
                <div class="small-img-col">
                    <img src="img/gaming categories.jpg" width="100%" class="small-img" alt="" onclick=" imgSlider('img/gaming categories.jpg');">
                </div>
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
            <h6>Offline</h6>
            <h4>{{$product->title_service}}</h4>
            <h2>{{ number_format($product->price) }}</h2>
            <h5>Estimated project time</h5>
            <h5>3hrs-8hrs</h5>
            <h3>Product Details</h3>
            <span>{{$product->service_description}}</span>
            <div class="user-prof">
                <img src="img/User-Profile-PNG-Clipart.png" alt="user-profile" class="user-profile">
                <h1>{{$user->username}} </h1>
                <i class="fa-solid fa-comment-dots"></i>
            </div>
        </div>

        <div class="package">
            <div class="package-name">
                <div id="basic" class="package-variant" type="button" onclick='document.getElementById("des-package").innerHTML = "this is the first package"'><h2>Basic</h2></div>
                <div id="standard" class="package-variant" type="button" onclick='document.getElementById("des-package").innerHTML = "this is the second package"'><h2>Standard</h2></div>
                <div id="premium" class="package-variant" type="button" onclick='document.getElementById("des-package").innerHTML = "this is the third package"'><h2>Premium</h2></div>
            </div>
            <div class="des">
                <p id="des-package">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolore optio asperiores explicabo repellendus excepturi minima nulla ullam molestiae ducimus similique. Cumque voluptas eum architecto culpa, doloribus corporis explicabo fugiat unde veritatis sequi minus, esse assumenda aliquam provident facilis nobis rem officia voluptatibus reprehenderit quo quibusdam recusandae? </p>
            </div>
            <div class="variant">
                <select  id="package-select">
                    <option value="Rp{{ number_format($product->price) }}">Select package</option>
                    <option value="Rp{{ number_format($product->price) }}">Basic</option>
                    <option value="Rp{{ number_format($product->price2) }}">Standard</option>
                    <option value="Rp{{ number_format($product->price3) }}">Premium</option>
                </select>
                <p id="package-price">Rp{{ number_format($product->price) }}</p>
                <button class="btn-hire">Hire now</button>
                <button class="btn-cart" href="cart.html">Add to cart</button>
            </div>
        </div>
    </div>
</section>


