<!DOCTYPE html>
<html lang="en" class="overflow-x-hidden">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SearchWork</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://kit.fontawesome.com/10d55a3023.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <link href="{{asset('css/lightbox.css')}}" rel="stylesheet" />

</head>
<body>

      {{-- nav --}}
    <nav class=" fixed inset-x-0 top-0 z-50 px-5 py-5 bg-SwBlue md:px-10 lg:px-20">
        <div class="flex items-center justify-between ">
            <!-- logo -->
            <div class="pt-1">
                <a href="/"><img src="{{asset('img/searchwork logo ver2.png')}}" class=" w-28 md:w-36" alt=""></a>
            </div>
            <!-- menu -->
            <div class="hidden md:flex space-x-6">
                <a href="/" class="text-white duration-100 ease-out  text-poppins text-xs  hover:text-blue-700 font-medium lg:text-sm">Home</a>
                <a href="/explore" class="text-white duration-100 ease-out  text-poppins text-xs  hover:text-blue-700 font-medium lg:text-sm">Explore Services</a>
                <a href="/CreatingProduct" class="text-white duration-100 ease-out  text-poppins text-xs hover:text-blue-700 font-medium lg:text-sm">Create Service</a>
                <a href="/project" class="text-white duration-100 ease-out  text-poppins text-xs hover:text-blue-700 font-medium lg:text-sm">Project</a>
                <a href="/CreatingProject" class="text-white duration-100 ease-out  text-poppins text-xs hover:text-blue-700 font-medium lg:text-sm">Create Project</a>
            </div>

            <div class="hidden  md:flex md:flex-row">
                @auth
                    <li class=" list-none">
                      <span class="username">
                       <a class="nav-link" href="/profile">
                          <img src="{{asset('img/blank-profile.webp')}}" alt="">
                          {{auth()->user()->username}}</a>
                    </span>
                    </li>

                    @else
                <a href="/login"><button class=" px-8 py-1 bg-blue-600 text-white border-blue-500 rounded-full text ease-in-out duration-300 hover:text-cyan-600 hover:bg-white">Join</button></a>
                @endauth
            </div>


             <!-- Hamburger Icon -->
                <button
                id="menu-btn"
                class="block hamburger md:hidden focus:outline-none"
            >
                <span class="hamburger-top"></span>
                <span class="hamburger-middle"></span>
                <span class="hamburger-bottom"></span>
            </button>
            </div>

            <!-- Mobile Menu -->
            <div class="md:hidden">
            <div
                id="menu"
                class="absolute flex-col items-center hidden self-end py-8 mt-10 space-y-6 font-bold bg-white sm:w-auto sm:self-center left-6 right-6 drop-shadow-md"
            >
            <a href="/" class=" text-poppins">Home</a>
            <a href="/explore" class=" text-poppins">Explore Services</a>
            <a href="/CreatingProduct" class=" text-poppins">Create Service</a>
            <a href="/project" class=" text-poppins">Project</a>
            <a href="/CreatingProject" class=" text-poppins">Create Project</a>
            @auth
                    <li class=" list-none">
                      <span class=" text-black">
                       <a class="nav-link" href="/profile">
                          <img src="{{asset('img/blank-profile.webp')}}" alt="">
                          {{auth()->user()->username}}</a>
                    </span>
                    </li>

                    @else
                <a href="/login"><button class=" px-8 py-1 bg-blue-600 text-white border-blue-500 rounded-full text ease-in-out duration-300 hover:text-cyan-600 hover:bg-white">Join</button></a>
                @endauth
            </div>
            </div>
    </nav>

    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true,
            duration: 2000,
        });

        const btn = document.getElementById('menu-btn')
        const nav = document.getElementById('menu')

        btn.addEventListener('click', () => {
        btn.classList.toggle('open')
        nav.classList.toggle('flex')
        nav.classList.toggle('hidden')
        })

         const menuBtn = document.querySelector(".menu-icon span");
         const searchBtn = document.querySelector(".search-icon");
         const cancelBtn = document.querySelector(".cancel-icon");
         const items = document.querySelector(".nav-items, #join");
         const form = document.querySelector("form");
         menuBtn.onclick = ()=>{
           items.classList.add("active");
           menuBtn.classList.add("hide");
           searchBtn.classList.add("hide");
           cancelBtn.classList.add("show");
         }
         cancelBtn.onclick = ()=>{
           items.classList.remove("active");
           menuBtn.classList.remove("hide");
           searchBtn.classList.remove("hide");
           cancelBtn.classList.remove("show");
           form.classList.remove("active");
           cancelBtn.style.color = "#ff3d00";
         }
         searchBtn.onclick = ()=>{
           form.classList.add("active");
           searchBtn.classList.add("hide");
           cancelBtn.classList.add("show");
         }

        document.addEventListener("DOMContentLoaded", function() {
        var icon = document.getElementById("icon");
        var text = document.getElementById("theme-text");

        // check local storage for dark mode preference and apply it if found
        if (localStorage.getItem("darkMode") === "on") {
            document.body.classList.add("dark-theme");
            icon.src = "img/sun.png";
            text.textContent = "Light Mode";
        }

        var dark = document.getElementById("theme-toggle");
        dark.onclick = function() {
            document.body.classList.toggle("dark-theme");
            if (document.body.classList.contains("dark-theme")) {
            icon.src = "img/sun.png";
            text.textContent = "Light Mode";
            localStorage.setItem("darkMode", "on"); // store dark mode preference
            } else {
            icon.src = "img/moon.png";
            text.textContent = "Dark Mode";
            localStorage.setItem("darkMode", "off"); // store light mode preference
            }
        }
});
    </script>
