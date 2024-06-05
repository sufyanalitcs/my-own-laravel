
<div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content model-gradient">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Login</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="login-message" class="my-3"></div>

                <form id="login-form" action="{{ route('login') }}">
                    <div class="mb-3">
                        <label for="login-email" class="form-label">Email address</label>
                        <input type="email" name="login-email" class="form-control" id="login-email"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="login-password" class="form-label">Password</label>
                        <input type="password" name="login-password" class="form-control" id="login-password">
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>

                <div class="separator">
                    <div class="line"></div>
                    <h6>Sign-up Now</h6>
                    <div class="line"></div>
                </div>

                <a type="submit" href="{{ route('auth.google') }}" class="btn btn-light">
                    <i class="fa-brands fa-google"></i> Google</a>
                    
                <button type="submit" class="btn btn-light">
                    <i class="fa-brands fa-square-facebook"></i> Facebook</button>


                <br>
                <p>Don’t have an account?
                    <a href="#" type="button"  data-bs-toggle="modal"
                    data-bs-target="#signupModal" > Sign Up Now</a></p>

            </div>

        </div>
    </div>
</div>
