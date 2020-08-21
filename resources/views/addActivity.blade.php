@extends('layout.app')
@section('main_content')
{{-- @include('avatar') --}}
  {{-- add role checker whether user is student or teacher --}}

  {{-- student side --}}
  <main class="col">
    <div class="row justify-content-between mt-2">
      <div class="col mt-4">
        <div class="row">
          <div class="col-8">
            <div class="form-group">
              <button class="btn btn-primary">Add Question</button>
            </div>

            <div class="card">
              <div class="card-body">
                <div class="row">
                  <div class="col-9">
                    <div class="form-group">
                      <label for="first-name">Activity Name</label>
                      <input type="text" class="form-control input-sm" id="first-name">
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="" id="1" value="option1" checked>
                      <label class="form-check-label" for="1">
                        A. Default radio
                      </label>
                    </div>
                    <div class="form-check">
                      <input class="form-check-input" type="radio" name="" id="1" value="option1" checked>
                      <label class="form-check-label" for="1">
                        A. Default radio
                      </label>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-primary">Add Choice</button>
                    </div>
                    
                  </div>
                  <div class="col-3">
                    <div class="form-group">
                      <label for="category">Classroom</label>
                      <select class="form-control input-sm" id="category">
                        <option selected>Category</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <button class="btn btn-danger">Delete</button>
                    </div>
                  </div>
                </div>
                <hr>
                <div class="row">
                  <div class="col">
                    <label for="inputEmail3" class="col-12 col-form-label">Email</label>
                    <select class="form-control col-3" id="category">
                      <option selected>Category</option>
                      <option value="1">One</option>
                      <option value="2">Two</option>
                      <option value="3">Three</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-4">
            <div class="form-group">
              <label for="first-name">Activity Name</label>
              <input type="text" class="form-control input-sm" id="first-name">
            </div>
            <div class="form-group">
              <label for="first-name">Instructions</label>
              <textarea class="form-control"></textarea>
            </div>
            <div class="form-group">
              <label for="category">Classroom</label>
              <select class="form-control input-sm" id="category">
                <option selected>Category</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="form-group">
              <label for="category">Classroom</label>
              <select class="form-control input-sm" id="category">
                <option selected>Category</option>
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="form-group">
              <label for="first-name">Start Date and Time</label>
              <input type="date" class="form-control input-sm" id="first-name">
            </div>
            <div class="form-group">
              <label for="first-name">End Date and Time</label>
              <input type="date" class="form-control input-sm" id="first-name">
            </div>
            <div class="form-group">
              <label for="first-name">Timer</label>
              <input type="text" class="form-control input-sm" id="first-name">
            </div>
            <div class="form-group">
              <button class="btn btn-primary">Submit</button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
@endsection
