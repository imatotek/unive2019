@extends('layouts.masterprimjer')

@section('title', 'Page Title')

@section('sidebar')
    @parent

     <p>This is appended to the master sidebar.</p>
@endsection

@section('content')
    <p>This is my body content.</p>
    @isset($predmets)
    @component('components.top10predmeta',['pred' => $predmets])
    @endcomponent
    @endisset
    
    @component('components.alert',['varijabla' => 'neka moja poruka'])
    
    @slot('slot')
        Forbiden
    @endslot
    
    <strong>Whoops!</strong> Something went wrong!
     @slot('footer_komponente')
     <div style='font-size: 50px'>Ovo je krajnji tekst.</div>
    @endslot
    
@endcomponent
@endsection
