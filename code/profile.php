<?php
   include 'mysqli_connect.php'; 
?>

<html>
  <head>
    <title>Profile Page</title>
    <link href="pstyle.css" rel="stylesheet" type="text/css" />
    <script src="https://kit.fontawesome.com/50963e1c2a.js" crossorigin="anonymous"></script>
  </head>

  <body>
<?php include 'header.php'; ?>

<main>
<div class="row">

  <div class="column">
     
  <center>
  <h2>User Information</h2>  

  <img src="https://i.ibb.co/kxQTRHB/blankpro.jpg">
  <p>

    <?php 
   $sql = "SELECT * FROM USER;";
   $result = mysqli_query($connection, $sql);
   $resultCheck = mysqli_num_rows($result);

   if ($resultCheck > 0) {
      if ($row = mysqli_fetch_assoc($result)) {
         echo $row['username'] . "<p>";
         echo $row['first_name'] . "<br>";
         echo $row['age'] . "<br>";
         echo $row['area'] . "<br>";
      }
   }
?>
    <em>online</em>
    <br>
    <div class="container">
    <a href="" class="button">Message</a> |
    <a href="" class="button">Block</a>
</div>
<hr>
<section class="boxes">
  <div class="box">
    <img id="placeholder" src="https://i.ibb.co/nLwxgHV/placeholder.jpg"> 
   </div>
   <div class="box">
    <img id="placeholder" src="https://i.ibb.co/nLwxgHV/placeholder.jpg">
   </div>     
   <div class="box">
    <img id="placeholder" src="https://i.ibb.co/nLwxgHV/placeholder.jpg">
   </div>
   <div class="box">
    <img id="placeholder" src="https://i.ibb.co/nLwxgHV/placeholder.jpg"> 
   </div>   
</section>
    </p>
  </div>


  <div class="column">
    <h2>About Me</h2>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultricies cursus lorem ut tempor. 
    Donec id mattis dolor, feugiat ornare diam. Nunc dictum suscipit nulla, ut ullamcorper tortor 
    rhoncus dignissim. Sed tellus sapien, pharetra sed vestibulum vitae, volutpat quis lacus. 
    Pellentesque aliquet condimentum ligula. Etiam tortor odio, convallis vel ex sit amet, 
    rhoncus bibendum quam. In porttitor, purus a aliquet fringilla, dui lacus vestibulum justo, 
    eget tincidunt velit enim ut ante. Donec a dolor magna. Sed pretium vitae neque non pellentesque. 
    Maecenas lacus magna, pulvinar ut dui et, tempus gravida magna. Integer diam ipsum, 
    placerat eget urna in, luctus pulvinar metus. Duis ut magna vitae odio porttitor cursus. 
    Morbi blandit felis est, a laoreet sapien condimentum non. Maecenas id ullamcorper leo, 
    in euismod est.
    <p>

    <h2>Prompt 1</h2>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultricies cursus lorem ut tempor. 
    Donec id mattis dolor, feugiat ornare diam. Nunc dictum suscipit nulla, ut ullamcorper tortor 
    rhoncus dignissim. Sed tellus sapien, pharetra sed vestibulum vitae, volutpat quis lacus. 
    Pellentesque aliquet condimentum ligula. Etiam tortor odio, convallis vel ex sit amet, 
    rhoncus bibendum quam. In porttitor, purus a aliquet fringilla, dui lacus vestibulum justo, 
    eget tincidunt velit enim ut ante. Donec a dolor magna. Sed pretium vitae neque non pellentesque. 
    Maecenas lacus magna, pulvinar ut dui et, tempus gravida magna. Integer diam ipsum, 
    placerat eget urna in, luctus pulvinar metus. Duis ut magna vitae odio porttitor cursus. 
    Morbi blandit felis est, a laoreet sapien condimentum non. Maecenas id ullamcorper leo, 
    in euismod est.
    <p>
    
    <h2>Prompt 2</h2>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla ultricies cursus lorem ut tempor. 
    Donec id mattis dolor, feugiat ornare diam. Nunc dictum suscipit nulla, ut ullamcorper tortor 
    rhoncus dignissim. Sed tellus sapien, pharetra sed vestibulum vitae, volutpat quis lacus. 
    Pellentesque aliquet condimentum ligula. Etiam tortor odio, convallis vel ex sit amet, 
    rhoncus bibendum quam. In porttitor, purus a aliquet fringilla, dui lacus vestibulum justo, 
    eget tincidunt velit enim ut ante. Donec a dolor magna. Sed pretium vitae neque non pellentesque. 
    Maecenas lacus magna, pulvinar ut dui et, tempus gravida magna. Integer diam ipsum, 
    placerat eget urna in, luctus pulvinar metus. Duis ut magna vitae odio porttitor cursus. 
    Morbi blandit felis est, a laoreet sapien condimentum non. Maecenas id ullamcorper leo, 
    in euismod est.
    <p>

  </div>
  <div class="column">
    <h2>Details</h2>
    <p>
    <h1>Preferences</h1>
    <hr>
I AM A: 
<br>
SEEKING:
<br>
AGED:
<br>
FOR:
    <h1>Lifestyle</h1>
    <hr>
HEIGHT:
<br>
BODY TYPE:
<br>
DIET:
<br>
SMOKE:
<br>
DRINK:
    <h1>In-Depth</h1>
    <hr>
RELIGON:
<br>
POLITICAL AFFILATION:
<br>
CHILDREN:
<br>
PETS:
<br>
HOBBIES:

    <h1>More</h1>
    <hr>
PROMPT:
<br>
PROMPT:
<br>
PROMPT:
  </div>
</div>    





  </main>

   

  <?php include 'footer.php'; ?>

   

  </body>
  </html>

