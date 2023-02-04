@extends ('layouts.app', ['title' => 'Register'])

@section('konten')
<h1>Registration</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-5">

                    <div class="card">

                            <div class="card-header">
                                <div class="card-body">

                                    <form action=" {{ route('register') }} " method="post">
                                    
                                    @csrf
                                        
                                        <div class="mb-4">
                                            <label for="name" class="form-label">Name</label>
                                            <input type="name" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                                            @error('name')

                                            <span class="invalid-feedback">{{ $message }}</span>
                                                    

                                            @enderror

                                            <div class="mb-4 mt-4">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" name="email " id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                                                @error('email')

                                                <span class="invalid-feedback">{{ $message }}</span>
                                                    

                                                @enderror

                                        
                                        </div>

                                        <div class="mb-4">
                                            <label for="username" class="form-label">Username</label>
                                            <input type="username" name="username" id="username" class="form-control @error('username') is-invalid @enderror" value="{{ old('username') }}">
                                            @error('username')

                                            <span class="invalid-feedback">{{ $message }}</span>
                                                

                                            @enderror

                                    
                                    </div>
                                        <div class="mb-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" name="password " id="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}">
                                        @error('password')

                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    

                                        @enderror

                                        </div>

                                            <button type="submit" class="btn btn-primary">Register</button>

                                        </form>

                                        </div>


                            </div>
                        </div>
                    </div>

                </div>

            </div>



@section ('styles')
<style>
    body {
        background-color: rgb(0, 130, 111);
    }
</style>
@endsection

   

@endsection