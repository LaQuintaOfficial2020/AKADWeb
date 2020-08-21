@extends('layout.app')
@include('avatar')
@section('main_content')

  {{-- add role checker whether user is student or teacher --}}

  {{-- student side --}}
  <main class="col">
    <div class="row justify-content-left mt-2">
      <div class="col-11">
        
        @include('classworksCards')

      </div>
    </div>
  </main>
@endsection
