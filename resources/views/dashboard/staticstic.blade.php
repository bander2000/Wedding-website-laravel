@extends('dashboard.layout')

@section('content')
<div class="content">
  <div class="row">
    <div class="col-lg-4">
      <div class="card card-chart">
        <div class="card-header">
          {{-- <h5 class="card-category">Global Sales</h5> --}}
          <h4 class="card-title">Total Of Comment</h4>
          {{-- <div class="dropdown">
            <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
              <i class="now-ui-icons loader_gear"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <a class="dropdown-item text-danger" href="#">Remove Data</a>
            </div>
          </div> --}}
        </div>
        <div class="card-body text-center">
          {{-- <div class="chart-area">
            <canvas id="lineChartExample"></canvas>
          </div> --}}
          {{ $commentCount }} comments
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card card-chart">
        <div class="card-header">
          {{-- <h5 class="card-category">2018 Sales</h5> --}}
          <h4 class="card-title">Total Of Money</h4>
          {{-- <div class="dropdown">
            <button type="button" class="btn btn-round btn-outline-default dropdown-toggle btn-simple btn-icon no-caret" data-toggle="dropdown">
              <i class="now-ui-icons loader_gear"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <a class="dropdown-item" href="#">Something else here</a>
              <a class="dropdown-item text-danger" href="#">Remove Data</a>
            </div>
          </div> --}}
        </div>
        <div class="card-body text-center">
          {{-- <div class="chart-area">
            <canvas id="lineChartExampleWithNumbersAndGrid"></canvas>
          </div> --}}
          {{ $sum }} $
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg-4 col-md-6">
      <div class="card card-chart">
        <div class="card-header">
          {{-- <h5 class="card-category">Email Statistics</h5> --}}
          <h4 class="card-title">Total of person attend</h4>
        </div>
        <div class="card-body text-center">
          {{-- <div class="chart-area">
            <canvas id="barChartSimpleGradientsNumbers"></canvas>
          </div> --}}
          {{ $peopleCount }} persons
        </div>
        <div class="card-footer">
          <div class="stats">
            <i class="now-ui-icons arrows-1_refresh-69"></i> Just Updated
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection