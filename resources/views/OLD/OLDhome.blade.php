@extends('layouts.app', [
'title' => 'Home',
'title2' => 'Laravel 1',])
@section('content')
<x-app-layout></x-app-layout>

{{-- NOTE ini adalah fitur footer untuk memanggil component alert --}}
{{-- <x-alert>
    <x-slot name='title'>
        Header component with <strong>strong</strong> tag
    </x-slot>
    ini adalah slot / children
    @slot('footer')
    ini adalajh footer
    @endslot
</x-alert>
<h1>Halo</h1>
Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea, <strong style="color: yellow">Lorem.</strong>praesentium!
--}}
@endsection