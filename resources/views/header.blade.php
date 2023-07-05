<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SearchWork</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css"/>
    <script src="https://kit.fontawesome.com/10d55a3023.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" integrity="sha512-n/4gHW3atM3QqRcbCn6ewmpxcLAHGaDjpEBu4xZd47N0W2oQ+6q7oc3PXstrJYXcbNU1OHdQ1T7pAP+gi5Yu8g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>



</head>
<body>
   <header>

      <nav>
           <div class="menu-icon">
              <span class="fas fa-bars"></span>
           </div>
           <div class="logo">
              <a href="/"><img src="{{asset('/img/searchwork logo ver2.png')}}" alt="searchwork-logo" class="nav-logo"></a>
           </div>
           <div class="searchbar">
              <div class="search-icon">
                 <span class="fas fa-search"></span>
              </div>
              <div class="cancel-icon">
                 <span class="fas fa-times"></span>
              </div>
              <form action="/explore">
               <input type="search" name="search" class="search-data" placeholder="Search" required value="{{ $search ?? '' }}">
                 <button type="submit" class="fas fa-search"></button>
              </form>
           </div>
           <div class="nav-items">
                 <div class="nav-leftside">
                       <li><a href="/">Home</a></li>
                       <li><a class="active" href="/explore">Explore</a></li>
                       <li><a href="/CreatingProduct">Create a Service</a></li>
                       <li><a href="/project">Project</a></li>
                       <li><a href="/CreatingProject">Create a Project</a></li>
                 </div>
                 <div class="nav-rightside">
                    <div class="shoppingcart">
                       <a href="/cart"><i class="fa-solid fa-cart-shopping"></i></a>
                    </div>
                    @auth
                    <li>
                      <span class="username">
                       <a class="nav-link" href="/profile">
                          <img src="{{asset('img/blank-profile.webp')}}" alt="">
                          {{auth()->user()->username}}</a>
                    </span>
                    </li>
  
                    @else
                    <div id="join">
                       <li><a href="/register">Join</a></li>
                    </div>
                    {{-- @endif --}}
                    @endauth
                 </div>
              </div>
      </nav>
   </header>
    <script>
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
