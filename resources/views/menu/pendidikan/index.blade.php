@extends('template.layar')
@section('body')
    @component('template.sambutan',[
        'sambutan_title' => 'Pendidikan',
        'sambutan_head' => 'Pendidikan adalah',
        'sambutan_foot' => '',
    ])
        Cara untuk Menambah Kepintaran dan Intelektualis <br>
        Karena itu Mari kita Medidik anak kita degan baik
    @endcomponent
@endsection