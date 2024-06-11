@extends('new.master')
@section('body')
   <div>
       <h1>Registration will be accepted very soon</h1>
       @if(session('message'))
           <p class="text-danger text-center bg-secondary">{{ session('message') }}</p>
       @endif
   </div>
@endsection
