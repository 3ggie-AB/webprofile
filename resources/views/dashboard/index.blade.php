@extends('template.layar')
@section('body')
    @component('template.navbar-vertical', [
        'menu1' => 'on',
        'menu2' => '',
        'menu3' => ''
    ])
    
<h1 class="text-center">Hai Admin</h1>
    @endcomponent
@endsection