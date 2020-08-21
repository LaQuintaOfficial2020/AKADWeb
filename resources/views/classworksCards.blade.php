@section('class_notif_cards')

<div class="card" style="border:none;">
  <div class="card-body" style="padding: 15px; padding-bottom: 0;">
    <div style="background-color: red; height: 75px; width: 10px; border-radius: 10px; margin: 0; display: inline-block;"></div>
    <div style="position:relative; display: inline-block; top: 5px; left: 15px;">
      <h4 style="bottom: 15px; position: relative;">{{Session::get('className')}}</h4>
    </div>
    <hr style="position: relative; bottom: 10px;">
  </div>
</div>


@endsection
@yield('class_notif_cards')