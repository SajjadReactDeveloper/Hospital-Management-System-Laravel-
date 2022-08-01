<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shaukat Khanum Hospital</title>
    <link rel="stylesheet" href="{{ url('Css/home.css') }}">
    <script src="{{ url('JS/home.js') }}" type="text/javascript"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/charts.css/dist/charts.min.css">
    <link rel="stylesheet" href="https://unpkg.com/charts.css/dist/charts.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
</head>
<body>
    <x-sidebar />
    <div class="widgets container">
        <div class="row">
            <div class="col-3">
                <div class="item">
                    <div class="icons">
                        <i class="fa fa-user-md icon fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="itemDetail">
                        <h3 class="value">{{ $data3 }}</h3>
                        <div class="text" style="background-color: rgb(37, 158, 37)">
                            Doctors
                            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="item">
                    <div class="icons" style="background-color: peru">
                        <i class="fa fa-wheelchair icon fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="itemDetail">
                        <h3 class="value">{{ $data4 }}</h3>
                        <div class="text" style="background-color: peru">
                            Patients
                            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="item">
                    <div class="icons" style="background-color: orangered">
                        <i class="fa fa-stethoscope icon fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="itemDetail">
                        <h3 class="value">{{ $data6 }}</h3>
                        <div class="text" style="background-color: orangered">
                            Attend
                            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="item">
                    <div class="icons" style="background-color: lightcoral">
                        <i class="fa fa-heartbeat icon fa-2x" aria-hidden="true"></i>
                    </div>
                    <div class="itemDetail">
                        <h3 class="value">{{ $data5 }}</h3>
                        <div class="text" style="background-color: lightcoral">
                            Pending
                            <i class="fa fa-check-circle-o" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Charts --}}
    <div class="container mt-5">
        <div class="row">
            <div class="col-6">
                <canvas id="myChart" style="width:100%;max-width:700px"></canvas>
            </div>
            <div class="col-6">
                <canvas id="myChart1" style="width:100%;max-width:700px"></canvas>
            </div>
        </div>
    </div>

    {{-- Appointments --}}
    <div class="container">
        <div class="row mt-5 gx-5">
            <div class="col-8">
                <div class="row">
                    <div class="col-12 appointments">
                        <h4 class="mb-5">Appointments</h4>
                        @if (!$data1->isEmpty())
                            @foreach ($data1 as $appointments)
                                <h6>Patient Name:  {{ $appointments['pName'] }}</h6>
                                <h6>Doctor Name: Dr. {{ $appointments['dName'] }}</h6>
                                <h6>Time: {{ $appointments['time'] }}</h6>
                                <hr>
                            @endforeach
                        @else
                            <h5 class="text-center">0 Appointments</h5>
                        @endif
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 appointments mt-5 mb-5">
                        <h4 class="mb-3">New Patients</h4>
                        @if (!$data2->isEmpty())
                            @foreach ($data2 as $patients)
                                <h6>{{ $patients['name'] }}</h6>
                                <hr>
                            @endforeach
                        @else
                            <h5 class="text-center">0 Patients</h5>
                        @endif
                    </div>
                </div>
            </div>
            <div class="col-4 appointment">
                <h4 class="mb-5">Doctors</h4>
                @if (!$data->isEmpty())
                    @foreach ($data as $doctors)
                        {{-- <img src="{{ url('storage/app/public/ezzAiRIVT97cW5Flq3qImggix3lp4O3UXmWWlzu2.png') }}" style="width: 100px; height: 100px;" alt=""> --}}
                        <h6>Dr. {{ $doctors['name'] }}</h6>
                        <hr>
                    @endforeach
                @else
                    <h4>No Doctors</h4>
                @endif
            </div>
        </div>
    </div>

    <script>
        var xyValues = [
          {x:50, y:7},
          {x:60, y:8},
          {x:70, y:8},
          {x:80, y:9},
          {x:90, y:9},
          {x:100, y:9},
          {x:110, y:10},
          {x:120, y:11},
          {x:130, y:14},
          {x:140, y:14},
          {x:150, y:15}
        ];

        new Chart("myChart", {
          type: "scatter",
          data: {
            datasets: [{
              pointRadius: 4,
              pointBackgroundColor: "rgb(0,0,255)",
              data: xyValues
            }]
          },
          options: {
            legend: {display: false},
            scales: {
              xAxes: [{ticks: {min: 40, max:160}}],
              yAxes: [{ticks: {min: 6, max:16}}],
            }
          }
        });

        var xValues = ["Italy", "France", "Spain", "USA", "Argentina"];
var yValues = [55, 49, 44, 24, 15];
var barColors = ["red", "green","blue","orange","brown"];

new Chart("myChart1", {
  type: "bar",
  data: {
    labels: xValues,
    datasets: [{
      backgroundColor: barColors,
      data: yValues
    }]
  },
  options: {
    legend: {display: false},
    title: {
      display: true,
      text: "World Wine Production 2018"
    }
  }
});
        </script>


    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
</body>
</html>
