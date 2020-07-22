<!DOCTYPE html>
<html>
<title>HTML Tutorial</title>
@include('components.head')


<body>
@include('components.navbar')    

           

  <!-- Card -->

  <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
<div class="card card-cascade wider reverse">

<!-- Card image -->
<div class="view view-cascade overlay">
  <img class="card-img-top" src="picture/Kaaba.jpg"
    alt="Card image cap">
  <a href="#!">
    <div class="mask rgba-white-slight"></div>
  </a>
</div>

<!-- Card content -->
<div class="card-body card-body-cascade text-center">

<div class="d-flex justify-content-center">
  <!-- Title -->
  
    <select class="form-control" id="exampleFormControlSelect1">
      <option>Select Month</option>
      <option>January</option>
      <option>February</option>
      <option>March</option>
      <option>April</option>
      <option>May</option>
      <option>June</option>
      <option>July</option>
      <option>August</option>
      <option>September</option>
      <option>October</option>
      <option>November</option>
      <option>September</option>
    </select>
  </div>
  <h>

  <div class = "container">
<button type="submit" class="btn aqua-gradient">Check Availablity</button>
<!-- Button trigger modal-->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPush">Launch modal</button>
</form>

</div>

</div>
<!-- Card -->

<!--Modal: modalPush-->
<div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog modal-notify modal-info" role="document">
    <!--Content-->
    <div class="modal-content text-center">
      <!--Header-->
      <div class="modal-header d-flex justify-content-center">
        <p class="heading">Be always up to date</p>
      </div>

      <!--Body-->
      <div class="modal-body">

        <i class="fas fa-bell fa-4x animated rotateIn mb-4"></i>

        <p>Do you want to receive the push notification about the newest posts?</p>

      </div>

      <!--Footer-->
      <div class="modal-footer flex-center">
        <a href="https://mdbootstrap.com/products/jquery-ui-kit/" class="btn btn-info">Yes</a>
        <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">No</a>
      </div>
    </div>
    <!--/.Content-->
  </div>
</div>
<!--Modal: modalPush-->


  
  @include('components.script')  

</body>
</html>