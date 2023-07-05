
@include('header')



@include('template._hero-area')


@include('template._popular-categories')

<section id="whosfor">
   <div class="whos-for">
       <div class="whos-for-text">
           <h4>Do you have a service but don't know where to advertise it? Are you looking for a service that fits your job? SearchWork will solve your problems!</h4>
       </div>
   </div>
       
</section>

@include('template._information')


@include('template/_categories')


@include('template/_banner')

<section id="feature-services">
   <h2>Feature Services</h2>
   <p>Take a look at our feature services</p>
   <div class="features">
      @include('template._product2')
   </div>
   <button class="explore-more">Explore More</button>
</section>




@include('footer')






<script>
         $(document).ready(function() {
         // Set up variables
         var slideCount = $('.slider-container .slide').length;
         var currentSlide = 1;
         
         // Show the first slide initially
         $('.slider-container .slide:first-child').addClass('active');
         
         // Start the slideshow
         var slideInterval = setInterval(nextSlide, 5000);
         
         // Define the nextSlide function
         function nextSlide() {
            // Update the slide variables
            currentSlide = (currentSlide < slideCount) ? currentSlide + 1 : 1;
            
            // Show the new slide and hide the old one
            $('.slider-container .slide.active').removeClass('active');
            $('.slider-container .slide:nth-child(' + currentSlide + ')').addClass('active');
         }
         });
</script>

</body>
</html>