@extends ('layouts.app', ['title' => 'Register'])

@section('konten')
<h1>Login</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-5">

                    <div class="card">

                            <div class="card-header">
                                <div class="card-body">

                                    <form action="/login" method="post" class= "mt-10">
                                    
                                    @csrf

                                            <div class="mb-6 mt-4">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" value="{{ old('email') }}" name="email " id="email" class="form-control @error('email') is-invalid @enderror" placeholder="Enter Email Adress" required>
                                                @error('email')

                                                <span class="invalid-feedback">{{ $message }}</span>
                                                    

                                                @enderror

                                        
                                            </div>

                                        </div>
                                        <div class="mb-6 mt-4">
                                        <label for="password" class="form-label">Password</label>
                                        <input type="password" value="{{ old('password') }}" name="password " id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter Password" required>
                                        @error('password')

                                        <span class="invalid-feedback">{{ $message }}</span>
                                                    

                                        @enderror

                                        </div>

                                            <button class="mt-4 btn btn-primary"type="submit">Login</button>

                                        </form>

                                        </div>
                                        <br>
                                        <p>Haven't Register? <a href="/login">Register Here</a></p>
                                        

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