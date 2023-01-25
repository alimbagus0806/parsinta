{{-- @extends('layouts.app',['title'=>'Homepage']) --}}
{{-- @section('title','Homepage') --}}
@section('content',['title'=>'Home'])

{{-- @include('components.alert') --}}
{{-- @component('components.alert',['title'=>'Header component']) --}}
{{-- <x-alert> --}}
<x-alert>

{{-- <x-slot class="title"> --}}
@slot('title')
Header component with <strong>strong</strong> tag.
@endslot
{{-- </x-slot> --}}

sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

@slot ('footer')

Footer Component

@endslot

</x-alert>
<x-navbar></x-navbar>
{{-- </x-alert> --}}

This is Home.
@endsection