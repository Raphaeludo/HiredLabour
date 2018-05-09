<?php include 'header.php'; ?>

<div id="main-header-section" class="main-header-section">
<div id="bgImage0" class="cycle-bg-image" style="background-image: url(&quot;required/img/carousel/labour.jpg&quot;); background-repeat: repeat; background-size: cover; position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; display: block;"></div><div id="bgImage1" class="cycle-bg-image" style="background-image: url(&quot;required/img/carousel/labour1.jpg&quot;); background-repeat: repeat; background-size: cover; position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; display: none;"></div><div id="bgImage2" class="cycle-bg-image" style="background-image: url(&quot;required/img/carousel/labour2.jpg&quot;); background-repeat: repeat; background-size: cover; position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; display: none;"></div><div style="left: 0px; top: 0px; right: 0px; bottom: 0px;"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12 col-md-5">
        <div class="header-content-block">
          <div class="header-title-block">
              <h2>Need Labourers?</h2>
              <p>In search of hired labour? search no further. Lets help you find them.</p>
              <a href="#learn">
                <button type="button" name="button" class="btn btn-how btn-lg">Learn More</button>
              </a>
              <button type="button" name="request" id="requestBtn" class="btn btn-how btn-lg hidden-md hidden-lg">Show Form</button>
              <button type="button" name="request" id="closeBtn" class="btn btn-how btn-lg hidden-md hidden-lg">Hide Form</button>
          
             </div>
        </div>
      </div>
      <div class="col-sm-12 col-md-7 requestForm" >
        <?php include 'resources/findForm.html'; ?>
      </div>
    </div>
  </div>
  <div class="overlay"></div>
</div>

<section id="hiring">
  <div class="container">
    <div class="row">
      <h2 class="header-how-work" id="learn" >About HiredLabour</h2>
      <div class="col-md-4">
        <h4 class="sub-title">Who are we? </h4>
        <h4 class="title-text text-center">
          We are the route which labour , Skilled and unSkilled Labour gets connected to clients.
        </h4>
      </div>
      <div class="col-md-4">
        <h4 class="sub-title">What we do?</h4>
        <p class="title-text text-center">
          We link workers to Clients in need of labour based on the information provided during registration.
        </p>
      </div>
      <div class="col-md-4">
        <h4 class="sub-title">Our Aim?</h4>
        <p class="title-text text-center">
           We aim at building a community where clients and labours find their dreams and aims & goals are being archieved.
        </p>
      </div>
    </div>
  </div>
</section>
<!-- Container (Contact Section) -->
<div id="register" class="container">
  <br/>
  <br/>
  <br/>
  
  <h1 class="text-center" id="cont" >Register as a Labourer now!</h1>
  <br/>
  <hr/>
  <br/>
  <div class="row">
   
    <div class="col-md-12">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="number" placeholder="Mobile Number" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="password" placeholder="Password" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="state" placeholder="State of residence" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="city" placeholder="City" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <select class="form-control ">
            <option selected disabled>Gender</option>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
          </select>
       </div>
       <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="address" placeholder="Address" type="text" required>
        </div>
      </div>
     
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right " type="submit">Register</button>
        </div>
      </div>
    </div>
  </div>
</div>
<hr/>
<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h1 class="text-center" id="cont" >Contact Us</h1>
     <br/>
     <br/>
     <hr/>
     <br/>
  <div class="row">
    <div class="col-md-4">
      <p>Uyo, Nigeria</p>
      <p>Phone: +234 8086854662</p>
      <p>Email: Rapheludo24@gmail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Comment" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
  </div>

