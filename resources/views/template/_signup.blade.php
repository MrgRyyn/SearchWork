<form method="POST" action="{{ route('users.store') }}" class=" pt-20 md:pt-40">
    @csrf
    <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto lg:py-0">
      <div class="w-full bg-white rounded-lg shadow border md:mt-0 sm:max-w-md xl:p-0">
        <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
          <p class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl">
            Create an account
          </p>

            <div>
              <label class="block mb-2 text-sm font-medium text-gray-900">
                Your Name
              </label>
              <input placeholder="Enter your name" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5" id="name" type="text" name="name" value="{{old('name')}}">
              @error ('name')
                        <p> {{$message}} </p>
              @enderror
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900">
                  Your Email
                </label>
                <input placeholder="Enter your email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5" id="email" type="text"  name="email" value="{{old('email')}}">
                @error ('email')
                       <p> {{$message}} </p>
                @enderror
            </div>

            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900">
                  Your username
                </label>
                <input placeholder="Enter your username" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5" id="username" type="text" name="username" value="{{old('username')}}">
                @error ('username')
                       <p> {{$message}} </p>
                @enderror
            </div>

            <div>
              <label class="block mb-2 text-sm font-medium text-gray-900">
                Password
              </label>
              <div class="flex flex-row relative">
                <input class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5" placeholder="••••••••" id="password" type="password" name="password">
                <span class="eye-pass"><i class="fa-solid fa-eye" id="eye" onclick="toggle()"></i></span>
              </div>

              @error ('password')
                       <p> {{$message}} </p>
              @enderror
            </div>

            <div>
              <label class="block mb-2 text-sm font-medium text-gray-900">
                Confirm password
              </label>
              <div class="flex flex-row relative">
                <input class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg block w-full p-2.5" placeholder="••••••••" id="password2" type="password" name="password_confirmation">
                <span class="eye-pass"><i class="fa-solid fa-eye" id="eye2" onclick="toggle2()"></i></span>
              </div>

              @error ('password_confirmation')
              <p> {{$message}} </p>
              @enderror

            </div>

            <div class="flex items-start">
              <div class="flex items-center h-5">
                <input class="w-4 h-4 border border-gray-300 rounded  focus:ring-3 focus:ring-primary-300 bg-gray-700 focus:ring-primary-600 ring-offset-gray-800" type="checkbox" aria-describedby="terms" id="terms">
              </div>

              <div class="ml-3 text-sm">
                <label class="font-light text-gray-500">
                  I accept the
                  <a href="#" class="font-medium text-primary-600 hover:underline text-primary-500">
                    Terms and Conditions
                  </a>
                </label>
              </div>
            </div>

            <button class="w-full bg-blue-500 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center  focus:ring-blue-800 text-white" type="submit">
              Create an account
            </button>

            <div class="flex items-center justify-center">
                <span class=" text-center text-gray-500 text-sm"> -Or Sign up with-</span>
            </div>

            <button class="w-full bg-white border flex flex-row items-center justify-center gap-5 border-gray-200 shadow-md hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center  focus:ring-blue-800 text-black" type="submit">
                <svg viewBox="0 0 48 48" class=" w-1/12">
                    <title>Google Logo</title>
                    <clipPath id="g">
                      <path d="M44.5 20H24v8.5h11.8C34.7 33.9 30.1 37 24 37c-7.2 0-13-5.8-13-13s5.8-13 13-13c3.1 0 5.9 1.1 8.1 2.9l6.4-6.4C34.6 4.1 29.6 2 24 2 11.8 2 2 11.8 2 24s9.8 22 22 22c11 0 21-8 21-22 0-1.3-.2-2.7-.5-4z"/>
                    </clipPath>
                    <g class="colors" clip-path="url(#g)">
                      <path fill="#FBBC05" d="M0 37V11l17 13z"/>
                      <path fill="#EA4335" d="M0 11l17 13 7-6.1L48 14V0H0z"/>
                      <path fill="#34A853" d="M0 37l30-23 7.9 1L48 0v48H0z"/>
                      <path fill="#4285F4" d="M48 48L17 24l-4-3 35-10z"/>
                    </g>
                  </svg>
                Sign up with Google
              </button>

            <div class="flex items-center justify-center">
                <p class="checking">Already have an account? <a href="/login">Log In</a></p>
            </div>
        </div>
      </div>
    </div>
</form>
