<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content model-gradient">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Sign up </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div id="register-message" class="mt-3"></div>

                <form id="register-form" action="{{ route('register') }}" method="POST">
                    <div class="mb-3">
                        <label for="signup-email" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="signup-email" aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="signup-name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="signup-name">
                    </div>
                    <div class="mb-3">
                        <label for="signup-password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="signup-password">
                    </div>

                    <div class="mb-3">
                        <label for="signup-password_confirmation" class="form-label">Password Confirmation</label>
                        <input type="password" class="form-control" id="signup-password">
                    </div>
                    <button type="submit" class="btn btn-primary">Creat Account</button>
                </form>

                <br>
                <p>By continuing you agree to My Own Appointments
                    <a href="">Terms & Conditions</a> and <a href="">Privacy Policy</a>
                </p>

            </div>

        </div>
    </div>
</div>
