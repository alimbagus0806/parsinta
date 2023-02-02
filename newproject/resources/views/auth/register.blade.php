@extends ('layouts.app', ['title' => 'Register'])

@section('konten')
<h1>Registration</h1>
        <div class="container">
            <div class="row">
                <div class="col-md-5">

                    <div class="card">

                            <div class="card-header">
                                <div class="card-body">

                                    <form action=" {{ route('register') }} " method="post"></form>
                                        
                                        <div class="mb-4">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" name="email " id="email" class="form-control">
                                        </div>
                                        <div class="mb-4">
                                            <label for="name" class="form-label">name</label>
                                            <input type="name" name="name" id="name" class="form-control">
                                    </div>
                                    <div class="mb-4">
                                        <label for="password" class="form-label">password</label>
                                        <input type="password" name="password " id="password" class="form-control">
                                </div>
                                <button type="submit" class="btn btn-primary">Register</button>
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