@extends('layout.app')
@include('avatar')
@section('main_content')

  {{-- add role checker whether user is student or teacher --}}

  {{-- student side --}}
  <main class="col">
    <div class="row justify-content-left mt-2">
      <div class="col-11">
        
      @include('classworksCards')
      @foreach($activities as $x)
        <div class="main-view" style="height:500px !important;">
        <div class="card mt-2">
          <div class="card-body" style="padding: 15px; padding-bottom: 0;">
            <div class="row">
              <div class="col-2">
                <p class="text-secondary" style="font-size: 14px; text-align: center;">No Score</p>
              </div>
              <div class="col">
                <h5>{{$x->name}}</h5>
                <p class="mb-1" style="font-size: 12px; margin:0;">{{$x->name}}</p>
                  <table class="table " style="font-size: 12px;">
                    <tr>
                      <td>Due Date: Aug 20 2020 1:00:00 AM</td>
                      <td class="text-muted">Not Graded</td>
                    </tr>
                    <tr>
                      <td>{{$x->duration}}</td>
                      <td>{{$x->items}} item/s</td>
                    </tr>
                  </table>
              </div>
            </div>
          </div>
        </div>
      @endforeach

      </div>
    </div>
  </main>
@endsection
