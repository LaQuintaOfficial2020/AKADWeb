@section('class_notif_cards')

<div class="card" style="border:none;">
  <div class="card-body" style="padding: 15px; padding-bottom: 0;">
    <div style="background-color: red; height: 75px; width: 10px; border-radius: 10px; margin: 0; display: inline-block;"></div>
    <div style="position:relative; display: inline-block; top: 5px; left: 15px;">
      <h4 style="bottom: 15px; position: relative;">III - Fortitude</h4>
      <h6 style="bottom: 25px; position: relative;">Emmanuel Salazar</h6>
    </div>
    <hr style="position: relative; bottom: 10px;">
  </div>
</div>

<div class="main-view" style="height:500px !important;">
  <div class="card mt-2">
    <div class="card-body" style="padding: 15px; padding-bottom: 0;">
      <div class="row">
        <div class="col-2">
          <p class="text-secondary" style="font-size: 14px; text-align: center;">No Score</p>
        </div>
        <div class="col">
          <h5>Title 1</h5>
          <p class="mb-1" style="font-size: 12px; margin:0;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque voluptatem reiciendis in repellendus minus voluptatibus, enim velit quibusdam dignissimos maxime maiores facilis, eius sapiente ex culpa id est odio nam?</p>
            <table class="table " style="font-size: 12px;">
              <tr>
                <td>Due Date: Aug 20 2020 1:00:00 AM</td>
                <td class="text-muted">Not Graded</td>
              </tr>
              <tr>
                <td>15 minutes</td>
                <td>10 items</td>
              </tr>
            </table>
        </div>
      </div>
    </div>
  </div>

  <div class="card mt-2">
    <div class="card-body" style="padding: 15px; padding-bottom: 0;">
      <div class="row">
        <div class="col-2">
          <p class="text-success" style="font-size: 14px; text-align: center;">10/10</p>
        </div>
        <div class="col">
          <h5>Title 1</h5>
          <p class="mb-1" style="font-size: 12px; margin:0;">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque voluptatem reiciendis in repellendus minus voluptatibus, enim velit quibusdam dignissimos maxime maiores facilis, eius sapiente ex culpa id est odio nam?</p>
            <table class="table " style="font-size: 12px;">
              <tr>
                <td>Due Date: Aug 20 2020 1:00:00 AM</td>
                <td class="text-success">Graded</td>
              </tr>
              <tr>
                <td>15 minutes</td>
                <td>10 items</td>
              </tr>
            </table>
        </div>
      </div>
    </div>
  </div>

  <div class="card mt-2">
    <div class="card-body" style="padding: 15px; padding-bottom: 0;">
      <div class="row">
        <div class="col-2">
          <p class="text-danger" style="font-size: 14px; text-align: center;">1/10</p>
        </div>
        <div class="col">
          <h5>Title 1</h5>
          <p class="mb-1" style="font-size: 12px; margin:0; ">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Eaque voluptatem reiciendis in repellendus minus voluptatibus, enim velit quibusdam dignissimos maxime maiores facilis, eius sapiente ex culpa id est odio nam?</p>
            <table class="table " style="font-size: 12px;">
              <tr>
                <td>Due Date: Aug 20 2020 1:00:00 AM</td>
                <td class="text-warning">Pending</td>
              </tr>
              <tr>
                <td>15 minutes</td>
                <td>10 items</td>
              </tr>
            </table>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection
@yield('class_notif_cards')