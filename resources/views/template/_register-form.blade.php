<section id="registration">
        <div class="container">
           <h3>Signup Form</h3>
           <div class="progress-bar">
              <div class="step">
                 <p>
                    Name
                 </p>
                 <div class="bullet">
                    <span>1</span>
                 </div>
                 <div class="check fas fa-check"></div>
              </div>
              <div class="step">
                 <p>
                    Contact
                 </p>
                 <div class="bullet">
                    <span>2</span>
                 </div>
                 <div class="check fas fa-check"></div>
              </div>
              <div class="step">
                 <p>
                    Location
                 </p>
                 <div class="bullet">
                    <span>3</span>
                 </div>
                 <div class="check fas fa-check"></div>
              </div>
              <div class="step">
                 <p>
                    Submit
                 </p>
                 <div class="bullet">
                    <span>4</span>
                 </div>
                 <div class="check fas fa-check"></div>
              </div>
           </div>

           <div class="form-outer">
               <form method="POST" action="{{ route('users.store') }}">
               @csrf 
                 <div class="page slide-page">
                    <div class="title">
                       Basic Info:
                    </div>
                    <div class="field">
                       <div class="label">
                          Full Name
                       </div>
                       <input type="text" placeholder="enter your full name" name="name" value="{{old('name')}}" >

                       @error ('name') 
                        <p> {{$message}} </p>
                       @enderror
                    </div>
                    {{-- <div class="field">
                       <div class="label">
                          Birth Date
                       </div>
                       <input type="text" placeholder="enter your birth date" name="birthdate" value="{{old('birthdate')}}">

                     @error ('birthdate') 
                       <p> {{$message}} </p>
                     @enderror
                    </div> --}}
                    <div class="field">
                       <button class="firstNext next">Next</button>
                    </div>
                 </div>
                 <div class="page">
                    <div class="title">
                       Contact Info:
                    </div>
                    <div class="field">
                       <div class="label">
                          Email Address
                       </div>
                       <input type="text" placeholder="enter your email" name="email" value="{{old('email')}}">

                       @error ('email') 
                       <p> {{$message}} </p>
                      @enderror
                    </div>
                    <div class="field">
                       <div class="label">
                          Phone Number
                       </div>
                       <input type="Number" placeholder="enter your phone number" name="phone_number" value="{{old('phone_number')}}">

                       @error ('phone_number') 
                       <p> {{$message}} </p>
                      @enderror
                    </div>
                    <div class="field btns">
                       <button class="prev-1 prev">Previous</button>
                       <button class="next-1 next">Next</button>
                    </div>
                 </div>
                 <div class="page">
                    <div class="title">
                       Location:
                    </div>
                    <div class="field">
                       <div class="label">
                          City
                       </div>
                       <input type="text" placeholder="enter your City" name="city" value="{{old('city')}}">

                       @error ('city') 
                       <p> {{$message}} </p>
                      @enderror
                    </div>
                    <div class="field">
                      <div class="label">
                         Complete address
                      </div>
                      <input type="text"placeholder="enter your complete address" name="address" value="{{old('address')}}">

                      @error ('address') 
                      <p> {{$message}} </p>
                     @enderror
                   </div>
                    <div class="field btns">
                       <button class="prev-2 prev">Previous</button>
                       <button class="next-2 next">Next</button>
                    </div>
                 </div>
                 <div class="page">
                    <div class="title">
                       User Details:
                    </div>
                    <div class="field">
                       <div class="label">
                          Username
                       </div>
                       <input type="text" placeholder="enter your username" name="username" value="{{old('username')}}">
                       @error ('username') 
                       <p> {{$message}} </p>
                      @enderror
                    </div>
                    <div class="field">
                       <div class="label">
                          Password
                       </div>
                       <input type="password" id="password" placeholder="enter your password" name="password" value="{{old('password')}}">
                       <span class="eye-pass"><i class="fa-solid fa-eye" id="eye" onclick="toggle()"></i></span>

                       @error ('password') 
                       <p> {{$message}} </p>
                      @enderror
                    </div>
                    <div class="field">
                       <div class="label">
                          Confirm Password
                       </div>
                       <input type="password" id="password2" placeholder="confirm your password" name="password_confirmation" value="{{old('password')}}">
                       <span class="eye-pass"><i class="fa-solid fa-eye" id="eye2" onclick="toggle()"></i></span>

                       @error ('password_confirmation') 
                       <p> {{$message}} </p>
                      @enderror
                    </div>
                    <div class="field btns">
                       <button class="prev-3 prev">Previous</button>
                       <button class="submit" type="submit">Submit</button>
                    </div>
                 </div>
              </form>
              <p class="checking">Already have an account? <a href="/login">Log In</a></p>
           </div>
        </div>
    </section>