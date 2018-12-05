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
        	<i class="material-icons text-danger">warning</i>
        			{{$item->name}} tersisa {{$item->total}}
        	</span>
        </p>
        @endif
        @endforeach
      </div>
      <div class="card-footer">
        <div class="stats">
          <i class="material-icons">access_time</i> dirubah 
          @php
          	$diff = strtotime(date('Y-m-d H:i:s')) - strtotime($all[0]->updated_at);
          	if($diff < 60)
          		echo $diff.' detik lalu.' ;
          	else if(intdiv($diff, 60) < 60)
          		echo intdiv($diff, 60).' menit lalu.';
          	else if(intdiv($diff, 3600) < 24)
          		echo intdiv($diff, 3600).' jam lalu.';
          	else if(intdiv($diff, 86400) < 30)
          		echo intdiv($diff, 86400).' hari lalu.';
          	else if(intdiv($diff, 2592000) < 12)
          		echo intdiv($diff, 2592000).' bulan lalu.';
          	else
          		echo '>1 tahun lalu.';
          @endphp
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

