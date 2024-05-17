
<div class="modal fade" id="signupModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content model-gradient">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Sign up </h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>

                    <div class="mb-3">
                        <label for="Name" class="form-label">Name</label>
                        <input type="text" class="form-control" id="Name">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="text" class="form-control" id="phone">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1">
                    </div>
                    <a href="{{ route('dashboard') }}" class="btn btn-primary">Creat Account</a>
                </form>

                <br>
                <p>By continuing you agree to My Own Appointments
                    <a href="">Terms & Conditions</a> and <a href="">Privacy Policy</a>
                </p>

            </div>

        </div>
    </div>
</div>

