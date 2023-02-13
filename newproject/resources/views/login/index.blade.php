@extends ('layouts.app', ['title' => 'Login'])

@section('konten')
    <div class="row">
        <div class="col-md-5">
<div class="card">
    <div class="card-header">
        <div class="card-body">

            <main class="form-signin w-100 m-auto">
                <form>
        
                    <h1 class="h3 mb-3 fw-normal">Please Sign in</h1>
        
                    <div class="form-floating">
                        <input type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="floatingInput" placeholder="name@example.com">
                        <label for="floatingInput">Email address</label>
                        @error('email')

                        <span class="invalid-feedback">{{ $message }}</span>
                            

                        @enderror

                    </div>
                    <div class="form-floating mb-4">
                        <input type="password" value="{{ old('password') }}" class="form-control @error('password') is-invalid @enderror" id="floatingPassword" placeholder="Password">
                        <label for="floatingPassword">Password</label>

                        @error('password')

                        <span class="invalid-feedback">{{ $message }}</span>
                            

                        @enderror

                    </div>
        
        
                    <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        
                </form>
            </main>

        </div>
        <br>
        <p class="ms-4">Haven't Register? <a href="/register">Register Now!</a></p>

    </div>
</div>




        </div>

    </div>







@section('styles')
    <style>
        body {
            background-color: rgb(0, 130, 111);
        }
    </style>
@endsection
@endsection
