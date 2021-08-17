<html>
<head>
<style>

#about1 .about1-container .background {
  min-height: 300px;
  margin-bottom: 10px;
}
#about1 {
  background: #fff;
  padding: 80px 0;
}

#about1 .about1-container .background {
  min-height: 300px;
  position: relative;
  background: url(../img/about-img.png) center top no-repeat;
  margin-bottom: 10px;
  margin-top: 70px;
  height: 150px;
  left: 50px;
}

#about1 .about1-container .content {
  background: #fff;
}

#about1 .about1-container .title {
  color: #333;
  font-weight: 700;
  font-size: 32px;
}

@media (max-width: 768px) {
  #about1 .about1-container .title {
    padding-top: 15px;
  }
}

#about1 .about1-container p {
  line-height: 26px;
}

#about1 .about1-container p:last-child {
  margin-bottom: 0;
}

#about1 .about1-container .icon-box {
  background: #fff;
  background-size: cover;
  padding: 0 0 30px 0;
}

#about1 .about1-container .icon-box .icon {
  float: left;
  background: #fff;
  padding: 16px;
  border-radius: 50%;
  border: 2px solid #2d61c9;
}

#about1 .about1-container .icon-box .icon i {
  color: #2d61c9;
  font-size: 24px;
}

#about1 .about1-container .icon-box .title {
  margin-left: 80px;
  font-weight: 500;
  margin-bottom: 5px;
  font-size: 18px;
  text-transform: uppercase;
}

#about1 .about1-container .icon-box .title a {
  color: #111;
}

#about1 .about1-container .icon-box .description {
  margin-left: 80px;
  line-height: 24px;
  font-size: 14px;
}

/* Facts Section
--------------------------------*/
#facts1 {
  background: #f7f7f7;
  padding: 80px 0 60px 0;
}

#facts1 .counters span {
  font-size: 48px;
  display: block;
  color: #2d61c9;
}

#facts1 .counters p {
  padding: 0;
  margin: 0 0 20px 0;
  font-family: "Poppins", sans-serif;
  font-size: 14px;
}

/* Services Section
--------------------------------*/
#services1 {
  background: #fff;
  background-size: cover;
  padding: 80px 0 60px 0;
}

#services1 .box {
  padding: 50px 20px;
  margin-bottom: 50px;
  text-align: center;
  border: 1px solid #e6e6e6;
  height: 200px;
  position: relative;
  background: #fafafa;
}

#services1 .icon {
  position: absolute;
  top: -36px;
  left: calc(50% - 36px);
  transition: 0.2s;
  border-radius: 50%;
  display: inline-block;
  border: 6px solid #fff;
}

#services1 .icon a {
  display: inline-block;
  background: #2d61c9;
  border: 2px solid #2d61c9;
  border-radius: 50%;
  padding: 16px;
  transition: 0.3s;
}

#services1 .icon i {
  color: #fff;
  font-size: 24px;
}

#services1 .box:hover .icon i {
  color: #2d61c9;
}

#services1 .box:hover .icon a {
  color: #2d61c9;
  background: #fff;
}

#services1 .title {
  font-weight: 700;
  font-size: 18px;
  margin-bottom: 15px;
  text-transform: uppercase;
}

#services1 .title a {
  color: #111;
}

#services1 .description {
  font-size: 14px;
  line-height: 24px;
}

input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

</style>
</head>
<?php
include('header.php');
?>
  <section id="hero">
    <div class="hero-container">
      <h1>Welcome to Speed Age</h1>

<div>
<script language="javascript">
function validate()
  {
 if (form.Consignment.value == "" )
{
alert("Consignment number is required.");
form.track.focus( );
return false;
}
}
</script>
<br><br><h3 style="color:#979A9A">TRACK YOUR COURIER DETAILS</h3>
 <form action="view_test.php" method="post" name="Consignment" id="fname" value="Enter Order ID" >
     <input name="Consignment" class="gentxt" id="Consignment" maxlength="50" type="text" placeholder="Enter Order ID">
                  <input name="Submit" type="submit" class="gentxt" onClick="MM_validateForm('Consignment','','R');return document.MM_returnValue" value="Submit">

     
    </div>
  </section><!-- #hero -->

  <main id="main">

    <!--==========================
      About Us Section
    ============================-->
    <section id="about1">
      <div class="container">
        <div class="row about1-container">

          <div class="col-lg-6 content order-lg-1 order-2">
            <h2 class="title">Few Words About Us</h2>
            <p>
              This best courier management software platform offers your delivery management inter-state, the ultimate convenience and hassle-free tracking of the agents along with super fast delivery.
            </p>

            <div class="icon-box wow fadeInUp">
              <div class="icon"><i class="fa fa-phone"></i></div>
              <h4 class="title"><a href="">Call / SMS to customers</a></h4>
              <p class="description">Delivery notification is send to the customers via call/sms as a way of rolling out delivery information, before the delivery is done.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.2s">
              <div class="icon"><i class="fa fa-map"></i></div>
              <h4 class="title"><a href="">Smart Routing</a></h4>
              <p class="description">Easily navigate to multiple destinations and ensure on-time deliveries to the customers.</p>
            </div>

            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-comments-o"></i></div>
              <h4 class="title"><a href="">Delivery / service feedback</a></h4>
              <p class="description">The customers can share their feedback of the delivery or service. Based on this feedback, necessary actions can be taken if needed.</p>
            </div>
            <div class="icon-box wow fadeInUp" data-wow-delay="0.4s">
              <div class="icon"><i class="fa fa-pencil"></i></div>
              <h4 class="title"><a href="">Proof of delivery</a></h4>
              <p class="description">As a proof of successful delivery, the agents may collect images or signature, as checked in and set by the admin, as a proof of delivery.</p>
            </div>

          </div>

          <img src="about-img.png" class="col-lg-6 background order-lg-2 order-1 wow fadeInRight">
        </div>

      </div>
    </section> <!-- #about -->

    <!--==========================
      Facts Section
    ============================-->
    <section id="facts1">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Facts</h3>
         
        </div>
        <div class="row counters">

  <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">157</span>
            <p>Number of Branches</p>
  </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">20,679</span>
            <p>Number of employees</p>
  </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">1,463</span>
            <p>Number of delivers per day</p>
  </div>

          <div class="col-lg-3 col-6 text-center">
            <span data-toggle="counter-up">15</span>
            <p>Number of head offices</p>
  </div>

  </div>

      </div>
    </section> <!-- #facts -->


    <!--==========================
      Services Section
    ============================-->
  <section id="services1">
      <div class="container wow fadeIn">
        <div class="section-header">
          <h3 class="section-title">Services</h3>
          <p class="section-description"></p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.2s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-user"></i></a></div>
              <h4 class="title"><a href="">CUSTOMERS</a></h4>
              <p class="description">Customers get their deliveries on time, with notifications of pre-arrival or pre-delivery helping them to plan their days better and schedule the service with Deliforce.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.4s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-gift"></i></a></div>
              <h4 class="title"><a href="">DELIVERY</a></h4>
              <p class="description">The agents get immediate notifications and can be in action immediately, helping in faster delivery.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.6s">
            <div class="box">
              <div class="icon"><a href=""><i class="fa fa-map-marker"></i></a></div>
              <h4 class="title"><a href="">TRACKER</a></h4>
              <p class="description">The dashboard helps the courier business owner to track all the agents, along with receiving summary of all the services completed successfully.</p>
            </div>
          </div>
      </div>
    </section><!-- #services -->

    <!--==========================
    Call To Action Section
    ============================-->
    <section id="call-to-action">
      <div class="container wow fadeIn">
        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3 class="cta-title"></h3>
            <p class="cta-text"> </p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
           
     

      </div>
          </div>
        </div>

      </div>
    </section> --><!-- #call-to-action -->

    <!--==========================
      Portfolio Section
    ============================-->
    <!-- section id="portfolio">
      <div class="container wow fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Portfolio</h3>
          <p class="section-description">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p>
        </div>
        <div class="row">

          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" class="filter-active">All</li>
              <li data-filter=".filter-app">App</li>
              <li data-filter=".filter-card">Card</li>
              <li data-filter=".filter-logo">Logo</li>
              <li data-filter=".filter-web">Web</li>
            </ul>
          </div>
        </div>

        <div class="row" id="portfolio-wrapper">
          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="img/portfolio/app1.jpg" alt="">
              <div class="details">
                <h4>App 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/portfolio/web2.jpg" alt="">
              <div class="details">
                <h4>Web 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="img/portfolio/app3.jpg" alt="">
              <div class="details">
                <h4>App 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="img/portfolio/card1.jpg" alt="">
              <div class="details">
                <h4>Card 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="img/portfolio/card2.jpg" alt="">
              <div class="details">
                <h4>Card 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/portfolio/web3.jpg" alt="">
              <div class="details">
                <h4>Web 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-card">
            <a href="">
              <img src="img/portfolio/card3.jpg" alt="">
              <div class="details">
                <h4>Card 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-app">
            <a href="">
              <img src="img/portfolio/app2.jpg" alt="">
              <div class="details">
                <h4>App 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="img/portfolio/logo1.jpg" alt="">
              <div class="details">
                <h4>Logo 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="img/portfolio/logo3.jpg" alt="">
              <div class="details">
                <h4>Logo 3</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-web">
            <a href="">
              <img src="img/portfolio/web1.jpg" alt="">
              <div class="details">
                <h4>Web 1</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

          <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
            <a href="">
              <img src="img/portfolio/logo2.jpg" alt="">
              <div class="details">
                <h4>Logo 2</h4>
                <span>Alored dono par</span>
              </div>
            </a>
          </div>

        </div>

      </div>
    </section>


  </main>

<?php
include('footer.php');


if(isset($_REQUEST['sendmessage']))
{
  include('connection.php');
$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$subject=$_REQUEST['subject'];
$message=$_REQUEST['message'];

$sql="INSERT INTO `testimonial` (`id`, `name`, `email`, `subject`, `message`) VALUES (NULL, '$name', '$email', '$subject', '$message')";
$res=mysqli_query($conn,$sql);

if($res)
{
  echo "<script>alert('Thank you for submit your Feedback');window.location='index.php'</script>";
}

		else
		{
			echo"<script>alert('Failed');window.location='index.php'</script>";

		}


}

?>
</html>
