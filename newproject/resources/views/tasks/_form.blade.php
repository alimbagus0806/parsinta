<input type="text" name="list" class= "form-control @error('list') is-invalid @enderror" value="{{ old('list') }}" placeholder="The name of the task">
                
@error('list')

<span class="invalid-feedback">{{ $message }}</span>
    {{-- {{ $message }} --}}

@enderror

</div>

<button class="btn btn-primary" type="submit">{{ $submit }}</button>

