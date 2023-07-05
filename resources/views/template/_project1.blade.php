
<section id="product2" class="section-p1">
            <div class="pro-container">
                @unless(count($projects) == 0)
                    @foreach($projects as $project)
                    <div class="pro-card item {{$project->project_category}}">
                        <a href="{{ route('projectdetails', ['project' => $project->id]) }}">
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
                                <h4>Rp{{$project->price}} - {{$project->price3}} </h4>
                             </div>
                        </div>
                    </div>
                    @endforeach
                    @else 
                    <p>No service found</p>
                @endunless
             </div>             
</section>

