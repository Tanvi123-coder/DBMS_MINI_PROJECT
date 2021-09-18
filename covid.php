<!DOCTYPE html>
<html lang="en">
<head>
    <title></title>
    <?php include 'link/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>
<body>

<!-- ***************************** NAVIGATION BAR ***************************** -->

<nav class="navbar navbar-expand-lg nav_style p-3">
  <a class="navbar-brand pl-5" href="#">COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-5 text-capitalize">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#aboutid">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#sympid">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#preventid">Prevention</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contactid">Contact</a>
      </li>
      
    </ul>
  </div>
</nav>

<!-- ****************************** HEADER ***************************** -->

<div class="main_header">
    <div class="row w-100 h-100">
         <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
              <div class="leftside w-100 h-100 d-flex justify-content-center align-items-center">
                    <img src="images/staysafe.jpg" width="350" height="300">
              </div>
         </div>

         <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
              <div class="rightside w-100 h-100 d-flex justify-content-center align-items-center">
                   <h1>Let's Stay Safe & Fight Against <p><p>Cor<span class= "virus_rot"> <img 
                   src="images/virus.png" width="60" height="60">
                   </span>na Virus</h1>
              </div>
         </div>
    </div>
</div>

<!-- ************************ CORONA LATEST UPDATES ************************ -->

<section class= "corona_update">
     <div class="mb-3">
         <h3 class="text-uppercase text-center"> covid-19 updates </h3>
     </div>

     <div class="d-flex justify-content-around align-items-center">
         <div>
             <h1 class= "count"> 12 </h1>
             <p>Active COVID-19 Patients</p>
         </div>

         <div>
             <h1 class= "count"> 5 </h1>
             <p>Cured/Discharged Patients</p>
         </div>

         <div>
             <h1 class= "count"> 0 </h1>
             <p>Death Cases</p>
         </div>
     </div>
</section>

<!-- ******************************* ABOUT SECTION ****************************** -->

<div class= "container-fluid sub_section pt-5 pb-5 " id= "aboutid">
    <div class="section_header text-center mb-5 mt-4 ">
        <h1> About COVID-19 </h1>
    </div>

    <div class= "row pt-5 ">
        <div class= "col-lg-5 col-md-6 col-12 ml-5">
             <img src="images/structure.jpeg" class= "img-fluid" width="800" height="600" >  
        </div>

        <div class= "col-lg-6 col-md-6 col-12">
            <h2>What is COVID-19 (Corona-Virus) </h2>
            <p>COVID-19 is the infectious disease caused by the most recently discovered corona virus. This new virus and disease were unknown before the outbreak began in Wuhan, China, in December 2019. </p>
            <p>Corona viruses are a large family of viruses which may cause illness
            in animals or humans. In humans, several coronaviruses are known
            to cause respiratory infections ranging from the common cold to more
            severe diseases such as Middle East Respiratory Syndrome (MERS)
            and Severe Acute Respiratory Syndrome (SARS). The most recently
            discovered coronavirus causes coronavirus disease COVID-19.  </p>
        </div>
    </div>
</div>

<!-- **************************** CORONAVIRUS SYMPTOMS ************************* -->

<div class= "container-fluid pt-5 pb-5 " id= "sympid">
    <div class="section_header text-center mb-5 mt-4 ">
        <h1> Coronavirus Symptoms </h1>
    </div>

    <div class= "container">
        <div class="row">
            <div class= "col-lg-4 col-md-4 col-12 mt-5">
                <figure class= "text-center">
                <img src="images/cough.png" class= "img-fluid" width= "120" height= "120">
                <figcaption>cough</figcaption>
                </figure>
            </div>

            <div class= "col-lg-4 col-md-4 col-12 mt-5">
                <figure class= "text-center">
                <img src="images/runny-nose.png" class= "img-fluid" width= "120" height= "120">
                <figcaption>runny nose</figcaption>
                </figure>
            </div>

            <div class= "col-lg-4 col-md-4 col-12 mt-5">
                <figure class= "text-center">
                <img src="images/fever.png" class= "img-fluid" width= "120" height= "120">
                <figcaption>fever</figcaption>
                </figure>
            </div>

            <div class= "col-lg-4 col-md-4 col-12 mt-5">
                <figure class= "text-center">
                <img src="images/cold.png" class= "img-fluid" width= "120" height= "120">
                <figcaption>cold</figcaption>
                </figure>
            </div>

            <div class= "col-lg-4 col-md-4 col-12 mt-5">
                <figure class= "text-center">
                <img src="images/nap.png" class= "img-fluid" width= "120" height= "120">
                <figcaption>tiredness</figcaption>
                </figure>
            </div>

            <div class= "col-lg-4 col-md-4 col-12 mt-5">
                <figure class= "text-center">
                <img src="images/breathing.png" class= "img-fluid" width= "120" height= "120">
                <figcaption>difficulty breathing (severe cases)</figcaption>
                </figure>
            </div>

        </div>
    </div>
</div>

<!-- **************************** PREVENTION AGAINST CORONAVIRUS ************************* -->

<div class= "container-fluid sub_section pt-5 pb-5 " id= "preventid">
    <div class="section_header text-center mb-5 mt-4 ">
        <h1> 6 Steps Prevention Against Coronavirus </h1>
    </div>

    <div class= "container">
        <div class= "row">
            <div class= "col-lg-4 col-md-4 col-12 mt-5">
                <div class= "row">
                    <div class= "col-lg-4 col-md-4 col-12">
                        <figure class= "text-center">
                        <img src="images/hand-gel.png" class= "img-fluid" width= "90" height= "90">
                        </figure>
                    </div>

                    <div class= "col-lg-8 col-md-8 col-12">
                        <p>Wash your hands regularly for 20 seconds, with soap and water or alcohol-based hand rub</p>
                    </div>
                </div>
            </div>

            <div class= "col-lg-4 col-md-4 col-12 mt-5">
                <div class= "row">
                    <div class= "col-lg-4 col-md-4 col-12">
                        <figure class= "text-center">
                        <img src="images/face-mask.png" class= "img-fluid" width= "90" height= "90">
                        </figure>
                    </div>

                    <div class= "col-lg-8 col-md-8 col-12">
                        <p>Cover your nose and mouth with a disposable tissue or flexed elbow when you cough or sneeze</p>
                    </div>
                </div>
            </div>

            <div class= "col-lg-4 col-md-4 col-12 mt-5">
                <div class= "row">
                    <div class= "col-lg-4 col-md-4 col-12">
                        <figure class= "text-center">
                        <img src="images/social-distancing.png" class= "img-fluid" width= "90" height= "90">
                        </figure>
                    </div>

                    <div class= "col-lg-8 col-md-8 col-12">
                        <p>Avoid close contact (1 meter or 3 feet) with people who are unwell</p>
                    </div>
                </div>
            </div>

            <div class= "col-lg-4 col-md-4 col-12 mt-5">
                <div class= "row">
                    <div class= "col-lg-4 col-md-4 col-12">
                        <figure class= "text-center">
                        <img src="images/stay-at-home.png" class= "img-fluid" width= "90" height= "90">
                        </figure>
                    </div>

                    <div class= "col-lg-8 col-md-8 col-12">
                        <p>Stay home and self-isolate from others in the household if you feel unwell</p>
                    </div>
                </div>
            </div>

            <div class= "col-lg-4 col-md-4 col-12 mt-5">
                <div class= "row">
                    <div class= "col-lg-4 col-md-4 col-12">
                        <figure class= "text-center">
                        <img src="images/news-anchor.png" class= "img-fluid" width= "90" height= "90">
                        </figure>
                    </div>

                    <div class= "col-lg-8 col-md-8 col-12">
                        <p>Stay informed by watching news and follow the recommended practices</p>
                    </div>
                </div>
            </div>

            <div class= "col-lg-4 col-md-4 col-12 mt-5">
                <div class= "row">
                    <div class= "col-lg-4 col-md-4 col-12">
                        <figure class= "text-center">
                        <img src="images/side-effect.png" class= "img-fluid" width= "90" height= "90">
                        </figure>
                    </div>

                    <div class= "col-lg-8 col-md-8 col-12">
                        <p>If you have fever, cough and difficulty breathing, seek medical care early</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- **************************** Contact Us ASAP ************************* -->

<div class= "container-fluid pt-5 pb-5 " id= "contactid">
    <div class="section_header text-center mb-5 mt-4 ">
        <h1> Contact Us ASAP </h1>
    </div>

    <div class= "container">
        <div class="row">
            <div class= "col-lg-8 offset-lg-2 col-12 ">

                <form action="" method="POST">
                    <div class="form-group">
                        <label >Username</label>
                        <input type="text" class="form-control" name="username" placeholder="name" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label >Societyname</label>
                        <input type="text" class="form-control" name="societyname" placeholder="societyname" autocomplete="off" required>
                    </div>

                   

                    <div class="form-group">
                        <label >Building Number</label>
                        <input type="number" class="form-control" name="buildingno" placeholder="building no" autocomplete="off" required>
                    </div>

                    <div class="form-group">
                        <label >Apartment Number</label>
                        <input type="number" class="form-control" name="aptno" placeholder="Apartment no" autocomplete="off" required>
                    </div>

                  
 
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Status</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="status"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- ******************************** TOP CURSOR ****************************** -->

<div class= "container scrolltop float-right pr-5">
    <i class="fa fa-arrow-up" onclick= "topFunction()" id= "myBtn"></i>
</div>

<!-- ******************************** FOOTER *********************************** -->

<footer class="mt-5">
    <div class="footer_style text-white text-center container-fluid">
    <p>Default</p>
    </div>
</footer>

<!-- ******************************* TOP ARROW SCRIPT *****************************-->

<script type= "text/javascript" >
    $('.count').counterUp({
            delay:10,
            time:3000
        })

    mybutton = document.getElementById("myBtn");
    window.onscroll = function() {scrollFunction()};
    function scrollFunction()
    {
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100)
        {
            mybutton.style.display = "block";
        }
        else
        {
            mybutton.style.display = "none";
        }
    }
    function topFunction()
    {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>

</body>
</html>

<?php

include 'dbcon.php';

if(isset($_POST['submit']))
{
    $username= $_POST['username'];
    $societyname= $_POST['societyname'];
    $buildingno= $_POST['buildingno'];
    $aptno= $_POST['aptno'];
    $status= $_POST['status'];

   

    $insertquery = "insert into covid(username, buildingno, aptno, status, societyname) values('$username', '$buildingno', '$aptno', '$status', '$societyname')";
    
    $query= mysqli_query($con, $insertquery);

    if($query){
        ?>
        <script>
            alert('inserted successfully');
        </script>
        <?php
    }else{
        ?>
        <script>
            alert('not inserted');
        </script>
        <?php
    }

}

?>
