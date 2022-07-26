
      <?php include "header.php"?>
      <style>
          .masthead{ background-image:url('assets/img/bg.jpg');
        background-size:cover; background-repeat:no-repeat}
      </style>

        <!-- Masthead-->
        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
                <!-- Masthead Heading-->
                <h1 class="masthead-heading text-uppercase mb-0">Customer Complain <br> <br> Management System!</h1>
                <!-- Icon Divider-->
                <div class="divider-custom divider-light">
                    <div class="divider-custom-line"></div>
                    <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                    <div class="divider-custom-line"></div>
                </div>
                <!-- Masthead Subheading-->
                <p class="masthead-subheading font-weight-light mb-0">Register your compalint and track the status</p> <br>
                <a href="register-complaint.php" class="btn btn-primary text-dark">Register Complain</a>
            </div>
        </header>
                 <br> 
        <section class="mt-5">
            <div class="container">
            <div class="row">
                <div class="col-md-7 px-5">
                    <h2>Customer Complaint Management System (CCMS) </h2>
                    <h5>Complaint Handling Process</h5>
                    <p>Customer satisfaction is very important to us. We would love to hear about positive experiences you have had with us.
                         Alternatively, if we have not met your service expectation, we would like to know about it as well. Our staff are
                          committed to treating complaints seriously and resolving them as quickly and fairly as possible. You may lodge a 
                          complaint verbally or in writing. We would advise you to submit your complaint in writing as the accuracy of the 
                          primaryrmation is important to us in resolving the complaint promptly. 
                        You may also enclose relevant documents related to the complaint raised.</p>
                    <h6>Complaint channels:</h6>
                    <ol>
                        <li>Call our Contact Centre at 118 or sms at 8118</li>
                        <li>Email ccms@pitc.com.pk</li>
                    </ol>
                    <h6>How we handle your complaint:</h6>
                    <p>Further Escalation: <br>
                    If you feel that your complaint was not resolved in a satisfactory manner, you may escalate your concern in writing to: Head, Quality & Assurance <br>
                    Email Address: qaccms@pitc.com.pk</p>
                </div>
                <div class="col-md-5">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="register-complaint.php" class="btn btn-warning">Register Comaplint >></a>
                        </div>
                        <div class="col-md-6">
                            <a href="track-complaint.php" class="btn btn-warning">Track Comaplint >></a>
                        </div>
                    </div> <br>
                    <div class="card border-primary">
                        <h5 class="card-header bg-primary">Acknowledgement</h5>
                        <div class="card-body ">
                            <ul>
                                <li class="card-text">Your complaint will be auto-acknowledged within 24-hours.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card border-primary mt-4">
                        <h5 class="card-header bg-primary">Investigation</h5>
                        <div class="card-body ">
                            <ul>
                                <li class="card-text">We will investigate and liaise with the relevant parties to resolve the compliant.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="card border-primary mt-4">
                        <h5 class="card-header bg-primary">Resolution</h5>
                        <div class="card-body ">
                            <ul>
                                <li class="card-text">We will work towards resolving your complaint within 14 days from the day of receipt.</li>
                                <li class="card-text">If a complaint requires complex investigations, we will notify you for an extension of time.</li>
                                <li class="card-text">you will be kept informed of the status of your compliant from time to time.</li>
                            </ul>
                        </div>
                    </div>
                    <div class="row my-4">
                    <div class="col-md-6">
                            <a href="register-complaint.php" class="btn btn-warning">Register Comaplint >></a>
                        </div>
                        <div class="col-md-6">
                            <a href="track-complaint.php" class="btn btn-warning">Track Comaplint >></a>
                        </div>
                    </div>


                </div>
            </div>
            
            </div>
        </section>
     
        <?php include "footer.php"?>