@extends('layout.app')

@section('page-title', 'comics')

@section('cotent')
    <div class="products">

      <h1>dc-comics</h1>

      <div class="container">
        @foreach ($fumetti as $fumetto)

          <div class="card">

            <img src="{{$fumetto['thumb']}}" alt="copertina di{{$fumetto['title']}}"/>

            <h3>{{$fumetto['title']}}</h3>

          </div> 
        @endforeach    
      </div>
    </div>
      
    

@endsection