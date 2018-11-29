@extends('layout.adminlayout')

@section('content')

<div class="row">
  <div class="col-md-6">
    <div class="card card-chart">
      <div class="card-header card-chart card-header-warning">
        <div class="ct-chart" id="websiteViewsChart"></div>
      </div>  
      <div class="card-body">
        <h4 class="card-title">Stok Bahan Baku</h4>
        @foreach($all as $item)
        @if($item->total <= 10)
        <p class="card-category">
        	<span class="text-danger">
        	<i class="material-icons">error</i>
        			{{$item->name}} tersisa {{$item->total}}
        	</span>
        </p>
        @endif
        @endforeach
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">access_time</i> updated 4 minutes ago
        </div>
      </div>
    </div>
  </div>
  <div class="col-md-6">
  <div class="card card-chart">
    <div class="card-header card-chart card-header-success">
      <div class="ct-chart" id="completedTasksChart"></div>
    </div>  
    <div class="card-body">
      <h4 class="card-title">Completed Tasks</h4>
      <p class="card-category">Last Campaign Performance</p>
    </div>
    <div class="card-footer">
      <div class="stats">
        <i class="material-icons">access_time</i> updated 2 minutes ago
      </div>
    </div>
  </div>
</div>
</div>
@endsection

@section('script')
<script>
	var url = "{{url('/admin/dashboard/chart')}}";
        var Name = new Array();
        var Total = new Array();
        $(document).ready(function(){
          $.get(url, function(response){
            response.forEach(function(data){
                Name.push(data.name);
                Total.push(data.total);
            });
        });
	});
setTimeout(function(){
    window.dispatchEvent(new Event('resize'));
}, 1000);
</script>

@endsection