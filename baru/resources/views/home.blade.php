{{-- @extends('layouts.app',['title'=>'Homepage']) --}}
{{-- @section('title','Homepage') --}}
@section('content')

{{-- @include('components.alert') --}}
{{-- @component('components.alert',['title'=>'Header component']) --}}
{{-- <x-alert> --}}
@component('components.alert')

{{-- <x-slot class="title"> --}}
@slot('title')
Header component with <strong>strong</strong> tag.
@endslot
{{-- </x-slot> --}}

sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.

@slot ('footer')

Footer Component

@endslot

@endcomponent
{{-- </x-alert> --}}

This is Home.
@endsection