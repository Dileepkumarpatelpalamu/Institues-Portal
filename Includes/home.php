
<div class="container-fluid">
    <div class="text-center my-2 text-white p-3">
       <a name="Home"></a>
      <h4>Home</h4>
      <hr class="w-25 bg-white">
    </div>
    <div class="container">
       <div class="row">
        <div class="col-sm-12 col-md-12 col-lg-12">
    <div class="list-group bg-white">
  <button type="button" class="list-group-item list-group-item-action active text-white bg-secondary">
    <h4>Notice/News</h4>
  </button>
  <marquee direction="up" onmouseout="this.start();" onmouseover="this.stop();">
    
  <?php
  include("connection/db.php");
  include("functions/phpfunction.php");
    display_notification("tablenews",$connect);
   ?>
  
</marquee>
</div>
        </div>
      </div>
    </div>
    </div>

   </div>
  </div>
  <div class="container-fluid">
    <div class="text-center my-2 text-white p-3">
      <a name="about"></a>
      <h4>About Us</h4>
      <hr class="w-25 bg-white">
    </div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="card">
  <img src="slider/23.png" class="card-img-top" alt="..." style="height: 300px;">
  <div class="card-body">
    <h5 class="card-title">Director & Founder</h5>
    <p class="card-text text-justify">I, Dhiraj Kumar, According to the modern day, we want to make our career in IT Sectors. But in this period, not everyone can see the problems over all IT Sectors.
But the changing ages of time leave behind with current day.Also after understanding in IT Sectors, you are not able to get a appropriated post</p>
  </div>
</div>
        </div>
        <div class="col-sm-12 col-md-6 col-lg-6"></div>
      </div>
      <div class="row">
        <div class="col-sm-12 col-md-6 col-lg-6"></div>
        <div class="col-sm-12 col-md-6 col-lg-6">
          <div class="card">
  <div class="card-body">
    <h5 class="card-title">Our Team</h5>
    <p class="card-text text-justify">Our Team is one of the best of Jharkhand reasion. This mean most Experiance, Talented, Skillsful And Responsible Team. Each member of Team is the better Educator in own language to proved in modern days. All the member are achive any goals at time. </p>
    <div class="text-justify bg-dark text-primary p-3">
      <h5 class="text-right mb-0">Director</h5>
      <p class="text-right mt-0 mb-0">Dhiraj Kumar
      </p>
    </div>
  </div>
</div>
        </div>
      </div>
    </div>
    </div>
  </div>