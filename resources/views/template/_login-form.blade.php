<section class="login-container forms" id="login">
            <div class="login-form login">
                <div class="form-content">
                    <h3 class="login-header">Login</h3>
                    <form method="POST" action="/users/authenticate">
                        @csrf
                        <div class="field input-field">
                            <input type="email" placeholder="Email" class="input" name="email" value="{{old('email')}}">
                            
                            @error('email')
                                <p>{{$message}}</p>
                            @enderror
                        </div>

                        <div class="field input-field">
                            <input type="password" placeholder="Password" class="password" name="password" value="{{old('password')}}">
                            <i class='bx bx-hide eye-icon'></i>
                            @error('password')
                            <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="form-link">
                            <a href="#" class="forgot-pass">Forgot password?</a>
                        </div>

                        <div width="100%" class="field button-field">
                            <button type="submit">Login</button>
                        </div>
                    </form>
                </div>

                <div class="form-link">
                        <span>Don't have an account? <a href="/register">Signup</a> </span>
                    </div>
                <div class="line"></div>

                <div class="media-options">
                    <a href="#" class="field facebook">
                        <i class='bx bxl-facebook facebook-icon'></i>
                        <span>Login with Facebook</span>
                    </a>
                </div>

                <div class="media-options">
                    <a href="google.com" class="field google">
                        <img src="img/google-logo.png" alt="" class="google-img">
                        <span>Login with Google</span>
                    </a>
                </div>

            </div>
</section>