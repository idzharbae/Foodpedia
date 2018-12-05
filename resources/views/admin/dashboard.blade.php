@extends('layout.adminlayout')

@section('content')

@include('admin.dashboardMaterial.topCards')
@include('admin.dashboardMaterial.middleCards')
@include('admin.dashboardMaterial.bottomCards')

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