@extends('layout.app')
@section('main_content')
{{-- @include('avatar') --}}
  {{-- add role checker whether user is student or teacher --}}

  {{-- student side --}}
  <main class="col">
    <div class="row justify-content-left mt-2">
      <div class="col-11 mt-4">
        <h4>Calendar of Activities</h4>
        <table class="table table-bordered text-center">
          @for ($i=1; $i<=6; $i++)
          <tr>
            @for ($j=1; $j<=6; $j++)
            <td>
              {{$i * $j}}
            </td>
            @endfor
          </tr>
          @endfor
        </table>
        </div>
      </div>
    </div>
  </main>
@endsection
