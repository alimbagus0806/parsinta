@extends ('layouts.app', ['title' => 'Beranda'])

@section('konten')

@section ('styles')
<style>
    body {
        background-color: rgb(0, 130, 111);
    }
</style>
@endsection

    <h1>Beranda</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias aliquam, velit error dolor perferendis unde fuga nostrum adipisci dignissimos eos iste vero, sapiente sed, porro quae assumenda omnis voluptates quos!</p>      

@endsection 

{{-- <x-app-layouts></x-app-layouts> --}}

    {{-- <h1>Beranda</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias aliquam, velit error dolor perferendis unde fuga nostrum adipisci dignissimos eos iste vero, sapiente sed, porro quae assumenda omnis voluptates quos!</p> --}}


{{-- @section('blog')
    <h1>blog</h1>
    <div class="row align-items-md-stretch">
        <div class="col-md-6">
            <div
                class="h-100 p-5 text-white bg-primary border rounded-3">
                <h2>Change the background</h2>
                <p>Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then,
                    mix and match with additional component themes and more.</p>
                <button class="btn btn-outline-primary" type="button">Example button</button>
            </div>
        </div>
        <div class="col-md-6">
            <div
                class="h-100 p-5 bg-primary border rounded-3">
                <h2>Add borders</h2>
                <p>Or, keep it light and add a border for some added definition to the boundaries of your content. Be sure
                    to look under the hood at the source HTML here as we've adjusted the alignment and sizing of both
                    column's content for equal-height.</p>
                <button class="btn Swap the background-color utility and add a `.text-*` color utility to mix up the jumbotron look. Then,
                    mix and match with additional component themes and more." type="button">Example button</button>
            </div>
        </div>
    </div>
@endsection --}}