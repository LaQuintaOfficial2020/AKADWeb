@extends('layout.app')
@section('main_content')
{{-- @include('avatar') --}}
  {{-- add role checker whether user is student or teacher --}}

  {{-- student side --}}
  <main class="col-12">
    <div class="row justify-content-left mt-2">
      <div class="col-10">
        <div class="card">
          <div class="card-body">
            <span style="background-color: red; height: 100px; width: 100px;"></span>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
