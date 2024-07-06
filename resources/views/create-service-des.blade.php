@include('header')

<section class="relative flex items-center justify-center flex-col">
    {{-- <div class="relative">
        <img src="{{asset('/img/desk-lamp.jpg')}}" alt="" class=" brightness-50 hero w-full h-2/3 object-cover">
        <div class=" absolute container flex flex-col items-center justify-center px-5">
            <h2 class=" text-5xl text-white text-lora font-bold md:text-7xl">Create a Service</h2>
            <p class=" text-white text-poppins text-center text-sm"> Take the skills that you have, and turn it into a service</p>
        </div>
    </div> --}}

    <div class="relative bg-blue-500 bg-image-lamp">
        <img src="{{asset('img/desk-lamp.jpg')}}" alt="" class=" h-96 brightness-50 w-screen object-cover md:brightness-75 lg:brightness-100">
        <div class=" absolute inset-0 px-6 flex justify-center items-center flex-col " data-aos="fade-in">
            <h2 class=" text-5xl text-white text-center text-lora font-bold md:text-7xl">Create a Service</h2>
            <p class=" text-white text-poppins text-center text-sm"> Take the skills that you have, and turn it into a service</p>
        </div>

    </div>

    {{-- <div class="banner-service-detail absolute">
        <h1>Create a Service</h1>
        <span>Take the skills that you have, and turn it into a service</span>
    </div> --}}

    <div class=" flex items-center justify-center flex-col mt-5 px-2">
        <h2 class=" font-bold text-2xl text-center mb-5">Creating your services</h2>
        <div class="flex items-center justify-center  px-3 my-5 gap-5 flex-col md:flex-row-reverse md:px-20" data-aos="fade-right" data-aos-duration="1800">
            <div class="flex-1 flex items-center justify-center">
                <img src="{{asset('img/make-service-des.avif')}}" alt="" class="rounded-md object-cover md:w-2/3">
            </div>
            <p class=" text-md flex-1">Welcome, service seller! We are thrilled to have you join our marketplace and create a new service to sell. This is an exciting opportunity for you to showcase your unique skills and expertise while offering valuable services to our community of buyers.</p>
        </div>
        <div class="flex items-center justify-center flex-col md:flex-row-reverse px-3 my-5 gap-5 md:px-20" data-aos="fade-up" data-aos-duration="1800">
            <p>Do some research to ensure that your pricing reflects the value of your service. Creating a service is a great way to showcase your skills and earn money doing what you love. With these simple steps, you'll be on your way to success in our marketplace!</p>
        </div>

    </div>
    <a href="/CreateService" data-aos="fade-up"><button class="get-started hover:bg-blue-400">Get Started</button></a>
</section>

@include('footer')
