<!DOCTYPE html>

<html lang="en">

 <head>

   @include('layout.partials.head')

 </head>



 <body>



@include('layout.partials.nav')

@include('layout.partials.header')



@yield('content')



@include('layout.partials.footer')

@include('layout.partials.footer-scripts')


 @if(session()->has('info_contact'))
 <script>
 var element = document.getElementById("contact");
 element.scrollIntoView();
 </script>
 <script>alert("{{session()->get('info_contact')}}");</script>
 @endif
 @if(session()->has('info_kolegial'))
 <script>
 var element = document.getElementById("kolegial");
 element.scrollIntoView();
 </script>
 <script>alert("{{session()->get('info_kolegial')}}");</script>
 @endif
 </body>

</html>
