@include('header')

<section id="user-profile">
  <div class="profile">
      <div class="user-setting">
          <div class="profile-img">
              <img src="{{asset('img/blank-profile.webp')}}" alt="">
          </div>
          <div class="user-info">
              <h2>{{auth()->user()->username}}</h2>
              <div class="user-set">
                  <a href="user-setting"><i class="fa-solid fa-gear"></i> Setting</a>
                  <form class="logout-form" method="POST" action="/logout">
                    @csrf
                      <button type="submit">
                        <i class="fa-solid fa-door-closed"></i> Logout
                      </button>
                  </form>
                  <a href="/manage" class="store"><i class="fa-solid fa-store"></i> Manage</a>
                  <a href="/order" class="store"><i class="fa-solid fa-bag-shopping"></i> Order</a>
                  <a href="user-store" class="message"><i class="fa-solid fa-message"></i> Message</a>
                  <div id="theme-toggle">
                    <img src="img/moon.png" id="icon">
                    <span id="theme-text">Dark Mode</span>
                    </div>
              </div>
          </div>
      </div>
      <div class="user-service">
          <h2>{{auth()->user()->username}} Services</h2>
      </div>
  </div>
</section>

<section id="users-post">
    <div>
        <h2 class="user-h2">Services</h2>
        <div id="product2" class="section-p1">
            <div class="pro-container">
                        @unless(count($products) == 0)
                            @foreach($products as $product)
                            <div class="pro-card item {{$product->service_category}}">
                                <a href="{{ route('service-detail', $product->id) }}">
                                <div class="product-image">
                                    <img src="{{asset('storage/images/'.$product->image)}}" alt="product2">
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
                            <p class="user-h2">No service found</p>
                        @endunless
                     </div>             
        </div>
        
    </div>

    <div class="post-div">
        <h2 class="user-h2">Projects</h2>
        <section id="product2" class="section-p1">
            <div class="pro-container">
                @unless($projects->isEmpty())
                    @foreach($projects as $project)
                    <div class="pro-card item {{$project->project_category}}">
                        <a href="{{$project->id}}">
                        <div class="product-image">
                            <img src="img/3d-jallu.jpg" alt="product2">
                        </div>
                        </a>
                        <div class="product-body">
                            <h3 class="product-title">{{$project->project_name}}</h3>
                            <span>Bandung</span>
                            <div class="product-rates">
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                             <i class="fas fa-star"></i>
                        </div>
                            <div class="project-price">
                                <h3>Budget</h3>
                                <h4>Rp{{number_format($project->price)}} - {{number_format($project->price3)}} </h4>
                             </div>
                        </div>
                    </div>
                    @endforeach
                    @else 
                    <p class="user-h2">No service found</p>
                @endunless
             </div>             
        </section>
    </div>
</section>

@include('footer')
