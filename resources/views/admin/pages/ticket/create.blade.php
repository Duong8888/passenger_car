@extends('admin.layouts.master')



@section('content')
    <div class="content">
        <?php
        $uniqueDepartures = [];
        $uniqueArrival = [];
        ?>
        <!-- Start Content-->
        <div class="container-fluid">

            <div class="row">

              
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="header-title mt-0 mb-3">Tickets Create</h4>
                            <a href="{{ route('admin.ticket.index') }}" class="btn btn-primary">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    class="bi bi-arrow-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M11.354 4.646a.5.5 0 0 1 0 .708L7.707 8l3.647 3.646a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 0 1 .708 0z" />
                                </svg>
                                Back
                            </a>
                            <div class="table-responsive">


              <form action="{{ route('admin.ticket.store') }}" method="post" enctype="multipart/form-data" id="create_ticket"
                class="row">
                @csrf
                <div class="col-6">
                  <div class="mb-3">
                    <label for="name" class="form-label">Username</label>
                    <input type="text" class="form-control" id="name" name="username">
                  </div>
                  <div class="mb-3">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="text" class="form-control" id="phone" name="phone">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Status</label>
                    <select name="status" class="form-control">
                      <option>Choosen status</option>
                      @foreach (json_decode('{"0":"Pending","1":"Success"}', true) as $key => $value)
                      <option value="{{ $key }}">{{ $value }}</option>
                      @endforeach
                    </select>
                  </div>
                  <div class="mb-3">
                    <label for="quantity" class="form-label">Quantity</label>
                    <input type="text" class="form-control" id="quantity" name="quantity">
                  </div>
                  <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control" id="email" name="email">
                  </div>
                  <div class="mb-3">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" class="form-control" id="price" name="total_price">
                  </div>
                </div>

                <div class="col-6">
                  <div class="mb-3">
                    <label class="form-label">Payment Method</label>
                    <input type="text" class="form-control" name="payment_method">
                  </div>
                  <div class="mb-3">
                    <label class="form-label">User</label>
                    <select name="user_id" class="form-control">

                      @foreach ($user as $key => $data)
                      <option value="{{ $key + 1 }}">{{ $data->name }}</option>
                      @endforeach
                    </select>
                  </div>

                  <div class="mb-3">
                    <label class="form-label">Departure</label>
                    <select name="departure" class="form-control departure">
                      <option>Choosen Departure</option>
                      @foreach ($route as $data)
                      @if (!in_array($data->departure, $uniqueDepartures))
                      <option value="{{ $data->departure }}">{{ $data->departure }}</option>
                      <?php $uniqueDepartures[] = $data->departure; ?>
                      @endif

                      @endforeach
                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Arrival</label>
                    <select name="arrival" class="form-control arrival">
                      <option>Choosen Arrival</option>
                      @foreach ($route as $data)
                      @if (!in_array($data->arrival, $uniqueArrival))
                      <option value="{{ $data->arrival }}">{{ $data->arrival }}</option>
                      <?php $uniqueArrival[] = $data->arrival; ?>
                      @endif

                      @endforeach
                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">Route</label>
                    <select name="" class="form-control route">

                    </select>
                  </div>
                  <div class="mb-3">
                    <label class="form-label">PassengerCar</label>
                    <select name="passenger_car_id" class="form-control PassengerCar">

                    </select>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
              </form>

            </div>
            <!-- end row -->

        </div> <!-- container -->

    </div> <!-- content -->
@endsection

@section('page-script')
    <script>
        $(document).ready(function() {
            $('.departure').change(function() {
                var departure = $(this).val();

                $.ajax({
                    url: '/admin/trip',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: "json",
                    data: {
                        departure: departure
                    },
                    success: function(response) {
                        var showTrip = '';

                        response.forEach(function(trip) {
                            showTrip += '<option class="trip" data-id="' + trip.id +
                                '" value="' + trip.id + '">' + trip.slug + '</option>';
                        });

                        $('.route').html(showTrip);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                })
            })

            $(document).on('click', '.route', function() {
                let id = $(this).val();

                $.ajax({
                    url: '/admin/passgenerCar/' + id,
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: "json",
                    data: {
                        id: id
                    },
                    success: function(response) {
                        let passengerCar = '';

                        response.forEach(function(Car) {
                            passengerCar += '<option data-id="' + Car.id + '" value="' +
                                Car.id + '">' + Car.license_plate + '</option>';
                        });

                        $('.PassengerCar').html(passengerCar);
                    }
                })
            })

            $('.arrival').change(function() {
                var arrival = $(this).val();

                $.ajax({
                    url: '/admin/trip',
                    method: 'POST',
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    dataType: "json",

                    data: {
                        arrival: arrival
                    },
                    success: function(response) {
                        var showTrip = '';

                        response.forEach(function(trip) {
                            showTrip += '<option class="trip" data-id="' + trip.id +
                                '" value="' + trip.id + '">' + trip.slug + '</option>';
                        });

                        $('.route').html(showTrip);
                    },
                    error: function(error) {
                        console.log(error);
                    }
                })
            })

        })
    </script>

    <!--Morris Chart-->
    <script src="admin/libs/morris.js06/morris.min.js"></script>
    <script src="admin/libs/raphael/raphael.min.js"></script>

    <!-- Dashboar init js-->
    <script src="admin/js/pages/dashboard.init.js"></script>
@endsection
