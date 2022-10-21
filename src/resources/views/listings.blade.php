@extends('layout')

@section('content')

    <div
        class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
    >

@if(count($listings) == 0)
    <p>Ziadne ponuky</p>
@endif

@foreach ($listings as $listing)
    <h2>
        <a href="/listings/{{$listing['idPonuky']}}">{{$listing['Nazov']}}</a>
    </h2>
    <p>
        {{$listing['Napln_prace']}}
    </p>
@endforeach
    </div>
@endsection

