@extends ('layouts.app', ['title' => 'Register'])

@section('konten')
    <h1>Registration</h1>
    <div class="container">
        <div class="row">
            <div class="col-md-5">

                <div class="card">

                    <div class="card-header">
                        <div class="card-body">

                            <form action="/register" method="post" class="mt-10">

                                @csrf

                                <div class="mb-6">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="name" value="{{ old('name') }}" name="name" id="name"
                                        class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Enter Full Name" required>
                                    @error('name')
                                        <span class="invalid-feedback">{{ $message }}</span>
                                    @enderror

                                    <div class="mb-6 mt-4">
                                        <label for="email" class="form-label">Email</label>
                                        <input type="email" value="{{ old('email') }}" name="email" id="email"
                                            class="form-control @error('email') is-invalid @enderror"
                                            placeholder="Enter Email Adress" required>
                                        @error('email')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror


                                    </div>

                                    <div class="mb-6 mt-4">
                                        <label for="username" class="form-label">Username</label>
                                        <input type="username" value="{{ old('username') }}" name="username" id="username"
                                            class="form-control @error('username') is-invalid @enderror"
                                            placeholder="Enter Username" required>
                                        @error('username')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="mb-6 mt-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" value="{{ old('password') }}" name="password" id="password"
                                            class="form-control @error('password') is-invalid @enderror"
                                            placeholder="Enter Password" required>
                                        @error('password')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <div class="mb-6 mt-4">
                                        <label for="password_confirmation" class="form-label">Confirm Password</label>
                                        <input type="password" value="{{ old('password_confirmation') }}"
                                            name="password_confirmation" id="password_confirmation"
                                            class="form-control @error('password_confirmation') is-invalid @enderror"
                                            placeholder="Confirm Your Password" required>
                                        @error('password_confirmation')
                                            <span class="invalid-feedback">{{ $message }}</span>
                                        @enderror

                                    </div>
                                    <button class="mt-4 btn btn-primary" type="submit">Register</button>

                            </form>

                        </div>
                        <br>
                        <p>Already Registered? <a href="/login">Login Here</a></p>


                    </div>
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
