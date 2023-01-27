@extends ('layouts.app', ['title' => 'Beranda'])

@section('konten')

@section ('styles')
<style>
    body {
        background-color: rgb(0, 130, 111);
    }
</style>
@endsection

    <h1>{{ $title?? 'Profile' }}</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Molestias aliquam, velit error dolor perferendis unde fuga nostrum adipisci dignissimos eos iste vero, sapiente sed, porro quae assumenda omnis voluptates quos!</p>      

@endsection

