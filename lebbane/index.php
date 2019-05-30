<?php

 include("config.php");

if(isset($_POST['mailform']))
{
	if(!empty($_POST['nom']) AND !empty($_POST['mail']) AND !empty($_POST['message']))
	{
		$header="MIME-Version: 1.0\r\n";
		$header.='From:"PrimFX.com"<support@primfx.com>'."\n";
		$header.='Content-Type:text/html; charset="uft-8"'."\n";
		$header.='Content-Transfer-Encoding: 8bit';

		$message='
		<html>
			<body>
				<div align="center">
					<br />
					<u>Nom de l\'expéditeur :</u>'.$_POST['nom'].'<br />
					<u>Mail de l\'expéditeur :</u>'.$_POST['mail'].'<br />
					<br />
					'.nl2br($_POST['message']).'
					<br />
					<img src="http://www.primfx.com/mailing/separation.png"/>
				</div>
			</body>
		</html>
		';

		mail("hind.silence@gmail.com", "CONTACT - Monsite.com", $message, $header);
		$msg="Votre message a bien été envoyé !";
	}
	else
	{
		$msg="Tous les champs doivent être complétés !";
	}
}
?>

<!DOCTYPE html>

<html lang="en">

<head>
  <title>CV Website-Lebbane Hind</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="icon" type="image/png" href="images/Sans%20titre-2.png">
  <link href="h.html">
< meta name="keywords" content="Portfolio youcode2018 lebbanehind hindlebbane  portfoliocv">
    <meta name="description" content="c'est un site portfolio ,il présente mes compétences et mon parcour">
  <!-- <link rel="stylesheet" href="css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/flexslider.css">
  <link rel="stylesheet" href="fonts/icomoon/style.css">

  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">

  <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700" rel="stylesheet">
<style type="text/css">
  .footeer{
    left:0;
    bottom: 0;
    text-align: center;
  
      width: 100%;}
      

  }
</style>

</head>

<body data-spy="scroll" data-target="#pb-navbar" data-offset="200">

<!--menu nav-->

  <nav class="navbar navbar-expand-lg site-navbar navbar-light bg-light" id="pb-navbar">
        <div class="container">
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
         </button>
         <a class="navbar-brand" href="index.php">lebbane</a>
         <div class="collapse navbar-collapse justify-content-md-center" id="navbarsExample09">
         <ul class="navbar-nav">
          <li class="nav-item"><a class="nav-link" href="#section-home"><?php echo $lang['home']?></a></li>
          <li class="nav-item"><a class="nav-link" href="#section-about"><?php echo $lang['about']?></a></li>
          <li class="nav-item"><a class="nav-link" href="#section-portfolio">Portfolio</a></li>
          <li class="nav-item"><a class="nav-link" href="#section-contact">Contact</a></li>   
        </ul>
      </div>
    </div>
  </nav>


<!--section  home-->

  <section class="site-hero" style="background-image: url(images/blog-blogger-blogging-4458.jpg);" id="section-home"
    data-stellar-background-ratio="0.5">
       <div class="container">
         <div class="row intro-text align-items-center justify-content-center">
          <div class="col-md-10 text-center">
          <h1 class="site-heading site-animate"><?php echo $lang['hello']?>, <em style="color: #4ebe2a"><?php echo $lang['im']?> </em><strong>Lebbane Hind</strong></h1>
          <p class="lead site-subheading mb-4 site-animate"><?php echo $lang['subheading']?></p>
          <p><a href="#section-about" class="smoothscroll btn btn-primary px-4 py-3"><?php echo $lang['more']?></a></p>
        </div>
      </div>
    </div>
  </section> <!-- section -->

<!--description sur moi-->
  <section class="site-section" id="section-about">
    <div class="container">
      <div class="row mb-5 align-items-center">
        <div class="col-lg-7 pr-lg-5 mb-5 mb-lg-0">
          <img src="images/IMG_8427-1200x815.png" alt="Image placeholder" class="img-fluid">
        </div>
        <div class="col-lg-5 pl-lg-5">
          <div class="section-heading">
            <h2><?php echo $lang['about']?> <strong>Me</strong></h2>
          </div>
          <p class="lead"><?php echo $lang['lead'] ?></p>
          <p class="mb-5  "><?php echo $lang['skils']?><?php echo $lang['can']?> : 
            <br class="mb-5"><?php echo $lang['responsive'] ?>
                <br class="mb-5"><?php echo $lang['bridge'] ?>
                <br class="mb-5"><?php echo $lang['bridge1'] ?>
                <br class="mb-5"><?php echo $lang['bridge2'] ?>
          </p>
          <p>
            <a href="#section-contact" class="btn btn-primary px-4 py-2 btn-sm smoothscroll"><?php echo $lang['hire'] ?></a>
            <a href="cvhind%20(1).pdf" class=" btn btn-secondary px-4 py-2 btn-sm"><?php echo $lang['cv']?></a>
          </p>
        </div>
      </div>
        
        <!--mes compétences-->

        <div class="col-md-3 mb-3">
          <div class="section-heading">
            <h2>My <strong>Skills</strong></h2>
          </div>
        </div>
        <div class="col-md-9">
          <div class="skill"> </div>
            <div class="skill">
            <h3>HTML5</h3>
              <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0"
                aria-valuemax="100">
              <span>80%</span>
              </div>
            </div>
          </div>
          <div class="skill">
            <h3>CSS3</h3>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                aria-valuemax="100">
                <span>65%</span>
              </div>
            </div>
          </div>
          <div class="skill">
            <h3>SQL server</h3>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0"
                aria-valuemax="100">
                <span>55%</span>
              </div>
            </div>
          </div>
          <div class="skill">
            <h3>MySQL</h3>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0"
                aria-valuemax="100">
                <span>40%</span>
              </div>
            </div>
          </div>
          <div class="skill">
            <h3>ASP.net</h3>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                aria-valuemax="100">
                <span>50%</span>
              </div>
            </div>
          </div>

          <div class="skill">
            <h3>C#</h3>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 51%" aria-valuenow="51" aria-valuemin="0"
                aria-valuemax="100">
                <span>51%</span>
              </div>
            </div>
          </div>

          <div class="skill">
            <h3>Bootstrap</h3>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 34%" aria-valuenow="35" aria-valuemin="0"
                aria-valuemax="100">
                <span>35%</span>
              </div>
            </div>
          </div>
          <div class="skill">
            <h3>Scrum/trello</h3>
            <div class="progress">
              <div class="progress-bar" role="progressbar" style="width: 65%" aria-valuenow="65" aria-valuemin="0"
                aria-valuemax="100">
                <span>65%</span>
              </div>
            </div>
          </div>
        </div>
    </div>
  </section>
    <!--mes projets-->

  <section class="site-section" id="section-portfolio">
    <div class="container">
      <div class="row">
        <div class="section-heading text-center col-md-12">
          <h2> <strong>Portfolio</strong></h2>
        </div>
      </div>
      <div class="filters">
        <ul>
          <li class="active" data-filter="*"><?php echo $lang['all']?></li>
          <li data-filter=".html">Html</li>
          <li data-filter=".css">CSS</li>
          <li data-filter=".javascript">Javascript</li>
          <li data-filter=".asp">ASP.net</li>
        </ul>
      </div>

      <div class="filters-content">
        <div class="row grid">
          <div class="single-portfolio col-sm-4 all asp">
            <div class="relative">
              <div class="thumb">
                <div class="overlay overlay-bg"></div>
                <img class="image img-fluid" src="PORTFOLIO/Capture.PNG" alt="">
              </div>
              <a target="_blank" href="https://github.com/hindlebane/asp-design" class="img-pop-up">
                <div class="middle">
                  <div class="text align-self-center d-flex"><img src="PORTFOLIO/Capture.PNG" alt=""></div>
                </div>
              </a>
            </div>
            <div class="p-inner">
              <h4></h4>
              <div class="cat">Asp.net</div>
            </div>
          </div>
          <div class="single-portfolio col-sm-4 all ">
            <div class="relative">
              <div class="thumb">
                <div class="overlay overlay-bg"></div>
                <img class="image img-fluid" src="PORTFOLIO/a.PNG" alt="">
              </div>
              <a target="_blank" href="https://github.com/hindlebane/site" class="img-pop-up">
                <div class="middle">
                  <div class="text align-self-center d-flex"><img src="PORTFOLIO/a.PNG" alt=""></div>
                </div>
              </a>
            </div>
            <div class="p-inner">
              <h4></h4>
              <div class="cat">Html SAS bosstrap JS</div>
            </div>
          </div>
          <div class="single-portfolio col-sm-4 all html css">
            <div class="relative">
              <div class="thumb">
                <div class="overlay overlay-bg"></div>
                <img class="image img-fluid" src="PORTFOLIO/CaptureD.PNG" alt="">
              </div>
              <a target="_blank" href="https://github.com/hindlebane/web-design" class="img-pop-up">
                <div class="middle">
                  <div class="text align-self-center d-flex"><img src="PORTFOLIO/CaptureD.PNG" alt=""></div>
                </div>
              </a>

            </div>
            <div class="p-inner">
              <h4></h4>
              <div class="cat">Html Css</div>
            </div>
          </div>
          <div class="single-portfolio col-sm-4 all html css javascript">
            <div class="relative">
              <div class="thumb">
                <div class="overlay overlay-bg"></div>
                <img class="image img-fluid" src="PORTFOLIO/b.PNG" alt="">
              </div>
              <a target="_blank" href="https://github.com/hindlebane/html-css-master" class="img-pop-up">
                <div class="middle">
                  <div class="text align-self-center d-flex"><img src="PORTFOLIO/b.PNG" alt=""></div>
                </div>
              </a>
            </div>
            <div class="p-inner">
              <h4></h4>
              <div class="cat"> html Css</div>
            </div>
          </div>
          <div class="single-portfolio col-sm-4 all asp">
            <div class="relative">
              <div class="thumb">
                <div class="overlay overlay-bg"></div>
                <img class="image img-fluid" src="PORTFOLIO/CX.PNG" alt="">
              </div>
              <a target="_blank" href="https://github.com/hindlebane/smart-login" class="img-pop-up">
                <div class="middle">
                  <div class="text align-self-center d-flex"><img src="PORTFOLIO/CX.PNG" alt=""></div>
                </div>
              </a>
            </div>
            <div class="p-inner">
              <h4></h4>
              <div class="cat">Asp.net</div>
            </div>
          </div>
          <div class="single-portfolio col-sm-4 all bootstrap javascript ">
            <div class="relative">
              <div class="thumb">
                <div class="overlay overlay-bg"></div>
                <img class="image img-fluid" src="PORTFOLIO/n.PNG" alt="">
              </div>
              <a target="_blank" href="https://github.com/hindlebane/javascript" class="img-pop-up">
                <div class="middle">
                  <div class="text align-self-center d-flex"><img src="PORTFOLIO/n.PNG" alt=""></div>
                </div>
              </a>
            </div>
            <div class="p-inner">
              <h4></h4>
              <div class="cat">Bootstrap Javascript</div>
            </div>
          </div>
              <div class="single-portfolio col-sm-4 all html css">
            <div class="relative">
              <div class="thumb">
                <div class="overlay overlay-bg"></div>
                <img class="image img-fluid" src="PORTFOLIO/m.PNG" alt="">
              </div>
              <a target="_blank" href="https://github.com/hindlebane/YouForYou" class="img-pop-up">
                <div class="middle">
                  <div class="text align-self-center d-flex"><img src="PORTFOLIO/m.PNG" alt=""></div>
                </div>
              </a>

            </div>
            <div class="p-inner">
              <h4></h4>
              <div class="cat">Html Css</div>
            </div>
          </div>
              <div class="single-portfolio col-sm-4 all html css javascipt">
            <div class="relative">
              <div class="thumb">
                <div class="overlay overlay-bg"></div>
                <img class="image img-fluid" src="PORTFOLIO/CaptureW.PNG" alt="">
              </div>
              <a target="_blank" href="https://github.com/hindlebane/html-css-portfolio" class="img-pop-up">
                <div class="middle">
                  <div class="text align-self-center d-flex"><img src="PORTFOLIO/CaptureW.PNG" alt=""></div>
                </div>
              </a>

            </div>
            <div class="p-inner">
              <h4></h4>
              <div class="cat">Html Css</div>
            </div>
          </div>
              <div class="single-portfolio col-sm-4 all html css">
            <div class="relative">
              <div class="thumb">
                <div class="overlay overlay-bg"></div>
                <img class="image img-fluid" src="PORTFOLIO/s.PNG" alt="">
              </div>
              <a target="_blank" href="https://github.com/hindlebane/atelier-css-html" class="img-pop-up">
                <div class="middle">
                  <div class="text align-self-center d-flex"><img src="PORTFOLIO/s.PNG" alt=""></div>
                </div>
              </a>

            </div>
            <div class="p-inner">
              <h4></h4>
              <div class="cat">Html Css</div>
            </div>
          </div>
               <div class="single-portfolio col-sm-4 all html css">
            <div class="relative">
              <div class="thumb">
                <div class="overlay overlay-bg"></div>
                <img class="image img-fluid" src="PORTFOLIO/l.PNG" alt="">
              </div>
              <a target="_blank" href="https://github.com/hindlebane/atelier-grid" class="img-pop-up">
                <div class="middle">
                  <div class="text align-self-center d-flex"><img src="PORTFOLIO/l.PNG" alt=""></div>
                </div>
              </a>

            </div>
            <div class="p-inner">
              <h4></h4>
              <div class="cat">Html Css</div>
            </div>
          </div>
               <div class="single-portfolio col-sm-4 all html css javascript">
            <div class="relative">
              <div class="thumb">
                <div class="overlay overlay-bg"></div>
                <img class="image img-fluid" src="PORTFOLIO/CaptureJS.PNG" alt="">
              </div>
              <a target="_blank" href="https://github.com/hindlebane/portfolio-html-css-js" class="img-pop-up">
                <div class="middle">
                  <div class="text align-self-center d-flex"><img src="PORTFOLIO/CaptureJS.PNG" alt=""></div>
                </div>
              </a>

            </div>
            <div class="p-inner">
              <h4></h4>
              <div class="cat">Html Css</div>
            </div>
          </div>
               <div class="single-portfolio col-sm-4 all html css">
            <div class="relative">
              <div class="thumb">
                <div class="overlay overlay-bg"></div>
                <img class="image img-fluid" src="PORTFOLIO/CapturePARALLA.PNG" alt="">
              </div>
              <a target="_blank" href="https://github.com/hindlebane/parralax" class="img-pop-up">
                <div class="middle">
                  <div class="text align-self-center d-flex"><img src="PORTFOLIO/CapturePARALLA.PNG" alt=""></div>
                </div>
              </a>

            </div>
            <div class="p-inner">
              <h4></h4>
              <div class="cat">Html Css</div>
            </div>
          </div>
               
           
        </div>
      </div>
    </div>
  </section>
    
    
  <!-- .section exepérience et education-->

  <section class="site-section bg-light " id="section-resume">
    <div class="container">
      <div class="row">
        <div class="col-md-12 mb-5">
          <div class="section-heading text-center">
            <h2><?php echo $lang['ma']?> <strong>Resume</strong></h2>
          </div>
        </div>
        <div class="col-md-6">
          <h2 class="mb-5">Education</h2>
          <div class="resume-item mb-4">
            <span class="date"><span class="icon-calendar"></span> 2018 - Present</span>
            <h3>YouCode</h3>
            <p><?php echo $lang['youcode']?>
              </p>
            <span class="school">Youssoufia,Maroc</span>
          </div>

          <div class="resume-item mb-4">
            <span class="date"><span class="icon-calendar"></span> 2015 - 2017.</span>
            <h3> Institut Spécialisé de Technologie Appliquée</h3>
            <p><?php echo $lang['diplome']?></p>
            <span class="school">BENGUERIR, Maroc</span>
          </div>

          <div class="resume-item mb-4">
            <span class="date"><span class="icon-calendar"></span> 2014 - 2015</span>
            <h3> LYCÉE KACHKAT</h3>
            <p><?php echo $lang['bac']?></p>
            <span class="school">YOUSSOUFIA, Maroc</span>
          </div>
        </div>
          
        <div class="col-md-6">
          <h2 class="mb-5">Experience</h2>
          <div class="resume-item mb-4">
            <span class="date"><span class="icon-calendar"></span> 2016 - Stage </span>
            <h3> L’office Chérifien des Phosphates (OCP) </h3>
            <p><?php echo $lang['stage']?></p>
            <span class="school">YOUSSOUFIA, Maroc</span>
          </div>
          <div class="resume-item mb-4">
            <span class="date"><span class="icon-calendar"></span> 2017 - Projet Fin d'étude</span>
            <h3>Institut Spécialisé de Technologie Appliquée</h3>
            <p><?php echo $lang['projet']?>
              .</p>
            <span class="school">BENGUERIR, Maroc</span>
          </div>
        </div>
      </div>
    </div>
  </section> 
    
    <!-- .section contact form  -->

  
     <section class="site-section bg-light" id="section-contact">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-5">
            <div class="section-heading text-center">
              <h2><?php echo $lang['wanna']?> <strong><?php echo $lang['work']?></strong> <?php echo $lang['with']?></h2>
            </div>
          </div>
          
          <div class="col-md-7 mb-5 mb-md-0">
            <form method="POST" action="" >
                   
              <h3 class="mb-5"><?php echo $lang['contact']?></h3>
              <div class="form-group">
                <input type="text" class="form-control px-3 py-4" name="nom" placeholder="Your Name" value="<?php if(isset($_POST['nom'])) { echo $_POST['nom']; } ?>">
              </div>
              <div class="form-group">
                <input type="email" name="mail" class="form-control px-3 py-4" placeholder="Your Email" value="<?php if(isset($_POST['mail'])) { echo $_POST['mail']; } ?>">
              </div>
             
              <div class="form-group mb-5">
                <textarea name="message" class="form-control px-3 py-4"cols="30" rows="10" placeholder="Write a Message"><?php if(isset($_POST['message'])) { echo $_POST['message']; } ?></textarea>
              </div>
              <div class="form-group">
                <input type="submit" class="btn btn-primary  px-4 py-3" value="Send Message" name="mailform">
              </div>
            </form>
              <?php
		if(isset($msg))
		{
			echo $msg;
		}
		?>
        
          </div>
            <!--divission de mes coordinalitées-->
          <div class="col-md-5 pl-md-5">
            <h3 class="mb-5">My Contact Details</h3>
            <ul class="site-contact-details">
              <li>
                 <span class="text-uppercase">Email</span>
              hindlebbane.gmail.com
              </li>
              <li>
               <span class="text-uppercase"><?php echo $lang['tele']?></span>
              +212 60 80 79 506
              </li>
             
              <li>
               
                <span class="text-uppercase">Address</span>
              Youssoufia,
              hay El Essalam
              , Maroc
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>

    

 

<!--footer resosocio-->
  <footer class="site-footer">
    <div class="container">
      <div class="row mb-3">
        <div class="col-md-12 text-center">
          <p>
            <a href="https://www.facebook.com/profile.php?id=100029239432783" class="social-item"><span class="icon-facebook2"></span></a>
            <a href="https://github.com/hindlebane" class="social-item"><span class="icon-github"></span></a>
            <a href="https://www.linkedin.com/in/lebbane-hind-1467ba172/" class="social-item"><span class="icon-linkedin2"></span></a>

          </p>
        </div>
      </div>
      <div class="row" >
          <div class="footeer text-center  ">
          <a href="index.php?lang=en"> <?php echo $lang['lang_en'] ?></a> |<a href="index.php?lang=fr"> <?php echo $lang['lang_fr'] ?> </a>
         </div>
        <p class="col-12 text-center">
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          Copyright &copy;
          <script>document.write(new Date().getFullYear());</script>| by Lebbane Hind <i class="icon-heart" aria-hidden="true"></i>
          <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
        </p>
      </div>
    </div>
  </footer>


<!--scripts-->

  <script src="js/vendor/jquery.min.js"></script>
  <script src="js/vendor/popper.min.js"></script>
  <script src="js/vendor/bootstrap.min.js"></script>

  <script src="js/vendor/jquery.easing.1.3.js"></script>
  <script src="js/vendor/jquery.stellar.min.js"></script>
  <script src="js/vendor/jquery.waypoints.min.js"></script>

  <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
  <script src="https://unpkg.com/imagesloaded@4/imagesloaded.pkgd.min.js"></script>
  <script src="js/custom.js"></script>



 
</body>

</html>