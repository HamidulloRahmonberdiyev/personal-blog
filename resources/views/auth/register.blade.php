<x-layouts.auth.auth>
    <div class="card-body">
    <div class="card-content p-2">
        <div class="card-title text-uppercase text-center py-3">Registration</div>
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="form-group mb-4">
                <label for="exampleInputName" class="sr-only">Name</label>
                <div class="position-relative has-icon-right">
                    <input type="text" name="name" id="exampleInputName" class="form-control input-shadow"
                        placeholder="Enter Your Name">
                    <div class="form-control-position">
                        <i class="icon-user"></i>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label for="exampleInputEmailId" class="sr-only">Email</label>
                <div class="position-relative has-icon-right">
                    <input type="text" name="email" id="exampleInputEmailId" class="form-control input-shadow"
                        placeholder="Enter Your Email ID">
                    <div class="form-control-position">
                        <i class="icon-envelope-open"></i>
                    </div>
                </div>
            </div>
            <div class="form-group mb-4">
                <label for="exampleInputPassword" class="sr-only">Password</label>
                <div class="position-relative has-icon-right">
                    <input type="password" name="password" id="exampleInputPassword" class="form-control input-shadow"
                        placeholder="Choose Password">
                    <div class="form-control-position">
                        <i class="icon-lock"></i>
                    </div>
                </div>
            </div>

            <div class="form-group mb-4">
                <label for="exampleInputPassword" class="sr-only">Confiramtion password</label>
                <div class="position-relative has-icon-right">
                    <input type="password" name="password_confirmation" id="exampleInputPassword" class="form-control input-shadow"
                        placeholder="Confiramtion password">
                    <div class="form-control-position">
                        <i class="icon-lock"></i>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-light text-success btn-block waves-effect waves-light">Sign Up</button>

        </form>
    </div>
</div>
<div class="card-footer text-center py-3">
    <p class="mb-0">Already have an account? <a href="{{ route('login') }}" class="text-info"> Login</a></p>
</div>
</div>

</x-layouts.auth.auth>
