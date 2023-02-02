


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
                
                <input type="text" name="list" class= "form-control @error('list') is-invalid @enderror me-2" placeholder="The name of the task">
                
                @error('list')

                <span class="invalid-feedback">{{ $message }}</span>
                    {{-- {{ $message }} --}}

                @enderror
            
                </div>
                
                <button class="btn btn-primary" type="submit">Add</button>

            </form>

      </div>
</div>

</div>