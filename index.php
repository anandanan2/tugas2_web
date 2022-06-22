<?php

$sumber = 'https://cinnabar.icaksh.my.id/api/public/daily/wiki';
$konten = file_get_contents($sumber);
$data = json_decode($konten, true);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="with=device-width, initial-scale=1.0">
    <title>University Website Design</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  </head>
  <body>
    <section class="sub-header">
        <nav>           
            <a href="index.html"><img src="logo.png"></a>
            <div class="nav-links" id="navLinks">
                <i class="fa fa-times" onclick="hideMenu()"></i>
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="about.html">ABOUT</a></li>
                    <li><a href="course.html">COURSE</a></li>
                    <li><a href="blog.html">BLOG</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                </ul>
            </div>
            <i class="fa fa-bars" onclick="showMenu()"></i>
        </nav>
        <h1>University</h1>
    </section>

<section class="about-us">
    <div class="row">
        <div class="about-col">
            <h1>The State Islamic University (UIN)</h1>
            <p>The State Islamic University (UIN) is a development of the State Islamic Institute (IAIN). 
                If originally, as the name "institute" suggests, this institution focused on Islamic religious 
                education, in a university format, this institution also provides learning in studies outside 
                of Islam, such as economics, accounting, law, etc. This development was started in early 2000.

                The name change was accompanied by the opening of the social sciences, humanities and science 
                and technology study programs. New faculties have sprung up, starting from the Faculty of Science 
                & Technology, the Faculty of Economics and Business, the Faculty of Psychology, and even the 
                Faculty of Medicine.</p>
                <a href="" class="button1 green-btn">EXPLORE NOW</a>
        </div>
        <div class="about-col">
            <img src="uin.jpg">
        </div>
    </div>

  <h1 class="text-center mt-3">Wikipedia Sejarah Indonesia</h1>
    <div class="container">
        <div class="row">
            <?php foreach ($data ['data'] as $row){
            ?>
            <div class="col-4 mt-4">
                <div class="card shadow-lg" style="width: 18rem;">
                    <div class="card-body">
                        <h3><?php echo $row['id']?></h3>
                        <hr>
                        <h3><p class="card-text"> Tahukah Anda?<?php echo $row['tahukahAnda']?></p></h3>
                    </div>
                </div>
            </div>
            <?php }?>
        </div>
    </div>
</section>  

<!-- Footer -->
<section class="footer">
    <h4>About Us</h4>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga officiis blanditiis eveniet voluptate repellat? Alias eos quae repudiandae nam, 
      <br> praesentium delectus assumenda facere aperiam enim, dolores itaque rerum quo aliquid.</p>
        <div class="icons">
            <i class="fa fa-facebook"></i>
            <i class="fa fa-twitter"></i>
            <i class="fa fa-instagram"></i>
            <i class="fa fa-linkedin"></i>
        </div>
        <p>Made with <i class="fa fa-heart-o"></i> by NAN</p>
</section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>