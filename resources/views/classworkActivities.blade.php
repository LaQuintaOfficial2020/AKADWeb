@extends('layout.app')
@section('main_content')
{{-- @include('avatar') --}}
  {{-- add role checker whether user is student or teacher --}}

  {{-- student side --}}
  <main class="col">
    <div class="row justify-content-left mt-2">
      <div class="col">
        <div class="form-group">
          <button class="btn btn-primary">Add Activity</button>
        </div>
        <table class="table table-bordered">
          <tr>
            <th>Names</th>
            <th>Classroom</th>
            <th>Category</th>
            <th>Action</th>
            <th>Status</th>
          </tr>
          @for($i=1; $i<=10;$i++)
          <tr>
            <td>Exam {{$i}}</td>
            <td>III - Fortitude</td>
            <td>Quiz</td>
            <td>
              <button class="btn btn-primary mr-1" type="button">Copy</button>
              <button class="btn btn-primary mr-1" type="button">Edit</button>
              <button class="btn btn-primary mr-1" type="button">Delete</button>
            </td>
            <td>
              <button class="btn btn-primary mr-1" type="button">Show</button>
              <button class="btn btn-primary mr-1" type="button">Hide</button></td>
          </tr>
          @endfor
        </table>
      </div>
    </div>
  </main>
@endsection
