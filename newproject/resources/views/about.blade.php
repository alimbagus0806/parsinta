@extends ('layouts.app', ['title' => 'About',])

@section('konten')
    <h1>About</h1>
    <p>Lorem ipsum dolor sit <strong style= color:red>amet</strong> consectetur adipisicing elit. Molestias aliquam, velit error dolor perferendis unde fuga nostrum adipisci dignissimos eos iste vero, sapiente sed, porro quae assumenda omnis voluptates quos!</p>   
@endsection

@section ('styles')
<style>
    body {
        background-color: rgb(0, 130, 106);
    }
</style>
@endsection