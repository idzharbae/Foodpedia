<!DOCTYPE html>

<html lang="en">

 <head>

   @include('layout.partials.head')
<style>
  
.modal {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  margin-top: 30px;
  z-index: 1050;
  display: none;
  overflow: hidden;
  outline: 0;
}



.modal-open .modal {
  overflow-x: hidden;
  overflow-y: auto;
}

.modal-dialog {
  position: relative;
  width: auto;
  height: auto;
  margin: 0.5rem;
  pointer-events: none;
}

.modal.fade .modal-dialog {
  transition: transform 0.3s ease-out;
  transform: translate(0, -25%);
}

.modal.show .modal-dialog {
  transform: translate(0, 0);
}

.modal-dialog-centered {
  display: flex;
  align-items: center;
  min-height: calc(100% - (0.5rem * 2));
}

.modal-content {
  position: relative;
  display: flex;
  flex-direction: column;
  width: 100%;
  pointer-events: auto;
  background-color: #ffffff;
  background-clip: padding-box;
  border: 1px solid rgba(0, 0, 0, 0.2);
  border-radius: 0.3rem;
  box-shadow: 0 0.25rem 0.5rem rgba(0, 0, 0, 0.5);
  outline: 0;
}

.modal-backdrop {
  position: fixed;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 1040;
  background-color: #000000;
}

.modal-backdrop.fade {
  opacity: 0;
}

.modal-backdrop.show {
  opacity: 0.26;
}

.modal-header {
  display: flex;
  align-items: flex-start;
  justify-content: space-between;
  padding: 1rem;
  border-bottom: 1px solid #e9ecef;
  border-top-left-radius: 0.3rem;
  border-top-right-radius: 0.3rem;
}

.modal-header .close {
  padding: 1rem;
  margin: -1rem -1rem -1rem auto;
}

.modal-title {
  margin-bottom: 0;
  line-height: 1.5;
}

.modal-body {
  position: relative;
  flex: 1 1 auto;
  padding: 1rem;
}

.modal-body label{
  margin-top: 20px;
  font-size: 25px;
}

.modal-body p{
  margin-top: 20px;
  font-size: 18px;
}

.modal-footer {
  display: flex;
  align-items: center;
  justify-content: flex-end;
  padding: 1rem;
  border-top: 1px solid #e9ecef;
}

.modal-footer> :not(:first-child) {
  margin-left: .25rem;
}

.modal-footer> :not(:last-child) {
  margin-right: .25rem;
}

.modal-scrollbar-measure {
  position: absolute;
  top: -9999px;
  width: 50px;
  height: 50px;
  overflow: scroll;
}

@media (min-width: 576px) {
  .modal-dialog {
    max-width: 500px;
    margin: 1.75rem auto;
  }
  .modal-dialog-centered {
    min-height: calc(100% - (1.75rem * 2));
  }
  .modal-content {
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.5);
  }
  .modal-sm {
    max-width: 300px;
  }
}

@media (min-width: 992px) {
  .modal-lg {
    max-width: 800px;
  }
}

.btn-secondary {
  color: #ffffff;
  background-color: #6c757d;
  border-color: #6c757d;
  box-shadow: none;
}

.btn-secondary:hover {
  color: #ffffff;
  background-color: #5a6268;
  border-color: #545b62;
}

.btn-secondary:focus,
.btn-secondary.focus {
  box-shadow: none, 0 0 0 0.2rem rgba(108, 117, 125, 0.5);
}

.btn-secondary.disabled,
.btn-secondary:disabled {
  color: #ffffff;
  background-color: #6c757d;
  border-color: #6c757d;
}

</style>
 </head>



 <body>
   <div id="menu" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
       <div class="container">
           <div class="navbar-header visible-xs">
               <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>
               <a class="navbar-brand" href="#"><h2>Foodpedia</h2></a>
           </div><!-- navbar-header -->
       <div id="navbar" class="navbar-collapse collapse">
           <div class="hidden-xs" id="logo"><a href="/#header">
               <img src="{{URL::asset('img/logo.png')}}" alt="" style="width:150px;height:150px;">
           </a></div>
           <ul class="nav navbar-nav navbar-right">
               <li><a href='/#about'>About</a></li>
               <li><a href="/#foodmenu">Menu</a></li>
               <li><a href="/#kolegial">Kolegial</a></li>
               <li><a href="/#testimoni">Testimoni</a></li>
               <!--fix for scroll spy active menu element-->
               <li style="display:none;"><a href="/#header"></a></li>
           </ul>

       </div><!--/.navbar-collapse -->
       </div><!-- container -->
   </div><!-- menu -->

@include('mainmenu')
@include('layout.partials.footer')
<script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/jquery.actual.min.js"></script>
    <script src="js/jquery.scrollTo.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
    
</body>
