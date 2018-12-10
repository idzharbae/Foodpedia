@extends('layout.adminlayout')

@section('content')

@include('admin.dashboardMaterial.topCards')
@include('admin.dashboardMaterial.middleCards')
@include('admin.dashboardMaterial.bottomCards')

@endsection

@section('script')
<script>
	var url1 = "{{url('/admin/dashboard/chart')}}";
        var Name = new Array();
        var Total = new Array();
        $(document).ready(function(){
          $.get(url1, function(response){
            response.forEach(function(data){
                Name.push(data.name);
                Total.push(data.total);
            });
        });
	});

    var url = "{{url('/admin/dashboard/visitor')}}";
        var IpCount = new Array();
        var HariCount = new Array();
        var idx = -1;
        $(document).ready(function(){
          $.get(url, function(response){
            response.forEach(function(data){
                if(HariCount.indexOf(data.created_at.substring(5,10)) == -1){
                        HariCount.push(data.created_at.substring(5,10));
                        IpCount.push(1);
                        idx += 1;
                    }else{
                        IpCount[idx] += 1;
                    }
            });
        });
    });
setTimeout(function(){
    window.dispatchEvent(new Event('resize'));
}, 1000);
</script>
<script>
  function foo (id) {
      $.ajax({
        url:"/admin/dashboard/check/"+id, //the page containing php script
        type: "GET", //request type
        success:function(result){
      setTimeout(function(){// wait for 5 secs(2)
           location.reload(); // then reload the page.(3)
      }, 1000); 
       }
     });
 }
</script>
@endsection