


<div class="card">
    <div class="card-header"> Create New Task</div>    
      <div class="card-body"> 
                
        {{-- @foreach ($errors->all() as $error) --}}
        {{-- @if ($errors->all())
            <div class="alert alert-danger">

                your data was invalid

                </div>
        
        @endif --}}


            <form action="/tasks" method="post">
    
                @csrf
                
                <div class= "mb-2" >
                
                    @include ('tasks._form',[
                        'submit' => 'Create'
                    ] )
    
                </form>

      </div>
</div>

</div>