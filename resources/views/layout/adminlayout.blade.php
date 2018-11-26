<!doctype html>
<html lang="en">
<head>
	@include('layout.admin.head')
	<style>
		.modal-header{
		    background-color:#8e24aa; 
		    color: white; 
		    border-color: #8e24aa;
		}
		.modal-body{
		    background-color: #212529;
		}
	</style>
</head>

<body class="dark-edition">
  <div class="wrapper ">
    @include('layout.admin.sidebar')
    @include('layout.admin.mainpanel')
  </div>
  @include('layout.admin.script')
</body>

</html>
