<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Lingaraj sanitary</title>
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="responsive.css">
  </head>
  <body>
    <nav class="nav_bar h_nav">
      <div class="burger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
      <ul class="nav_list vclass">
        <li><a href="#home">Home</a></li>
        <li><a href="#about">About</a></li>
        <li><a href="#services">Services</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
      <div class="search">
        <input type="text" name="search" id="search" />
        <button class="btn">search</button>
      </div>

    </nav>
    <section class="background_section">
      <div class="box_main">
        <div class="firstsection">
          <p class="large_text">Santosh Ku. Dash<p1>(owner)</p1>...</p>
          <p class="small_text">
            Decorating your dream home is delighting and exciting , but choosing
            the right paint, products and colors while ensuring your family's
            safety is a huge task . It's important to entrust a reliable team .
            Explore a considerable experience with Lingaraj Hardwares and
            Sanitary , that provides you a diverse range of colors, paints and
            washroom essentials of premium brands .
          </p>
        </div>
        <div class="secondsection">
          <div class="fimg"><img src="image/store1.jpg" alt="" /></div>
        </div>
      </div>
    </section>

    <section class="bottom_sec1">
      <div class="text">
        <p class="secTag large_text">Luxury bath fittings</p>
        <p class="secSubTag small_text">
          Luxury bath fittings are the epitome of elegance and sophistication, transforming an ordinary bathroom into a personal sanctuary. These fittings are meticulously crafted from premium materials like polished chrome, brushed nickel, or even gold-plated finishes, offering both durability and a refined aesthetic.High-grade materials like stainless steel and eco-friendly ceramics are commonly used, providing durability and a sleek, modern look
        </p>
        <div class="buttons">
          <button class="btn1">Add to cart</button>
          <button class="btn1">Buy now</button>
        </div>
      </div>
      <div class="thumnail"><img src="image/store3.jpg" alt="" /></div>
    </section>
    <section class="bottom_sec_left">
      <div class="text">
        <p class="secTag large_text">Paint your imagination</p>
        <p class="secSubTag small_text">
          Give soul to your imagination with shimmering colors and paints . Color adds flavour to your life and makes it beautiful & a better place to live in . Colors have the power to alter your frame of mind . Warm color represents an assuring and peaceful space, whereas dark color gives you bolder & Royal glance . On the virtue of this modern generation , Pastel colors are A-class choice for several occasions . They provide a classy and glossy glance to the atmosphere . Vibrant colors are eye-catching , intense and full of energy. Whether it’s the rich red of a sunset, the deep blue of a tropical ocean, or the vivid green of a lush forest, vibrant colors have the power to transform the ordinary into the extraordinary.

        </p>
        <div class="buttons">
          <button class="btn1">Add to cart</button>
          <button class="btn1">Buy now</button>
        </div>
      </div>
      <div class="thumnail"><img src="image/image 1.jpg" alt="" /></div>
    </section>
    <section class="bottom_sec2">
      <div class="text">
        <p class="secTag large_text">Pipes and fittings</p>
        <p class="secSubTag small_text">
          Pipes and fittings are the essential components of any plumbing system, responsible for transporting water, gas, and other ho fluids safely and efficiently throughout a building. Crafted from a variety of materials such as copper, PVC, stainless steel, and PEX, these elements must be durable, corrosion-resistant, and capable of withstanding varying pressures and temperatures.Whether in residential, commercial, or industrial applications, high-quality pipes and fittings are fundamental to maintaining the integrity and safety of the plumbing infrastructure.
        </p>
        <div class="buttons">
          <button class="btn1">Add to cart</button>
          <button class="btn1">Buy now</button>
        </div>
      </div>
      <div class="thumnail"><img src="image/img8.jpg" alt="" /></div>
    </section>
    <hr />
<section class="Contact">
<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "contacts";
$connect = mysqli_connect($servername, $username, $password, $database);


if ($_SERVER['REQUEST_METHOD'] == 'POST'){
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $phno = isset($_POST['phno']) ? $_POST['phno'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $concern = isset($_POST['concern']) ? $_POST['concern'] : '';
    $sql = "INSERT INTO `lingaraj_sanitary` (`Name`, `Phno`, `email`, `concern`) VALUES ( '$name', '$phno', '$email', '$concern')";

    $result = mysqli_query($connect, $sql);
}
if($result){
  echo '<script>  alert("YOUR CONCERN IS SUBMITTED , WE WILL CONTACT YOU SOON..");   </script>';
}
?>
      <h2 class="formh2">Contact us</h2>
      <div class="form">
        <form action="/SHOP WEB/index.php" method="post">
        <input class="form_input""text" name="name" id="name" placeholder="   Enter your name"> <input class="form_input""text" name="phno"
        id="phno" placeholder="   Enter your phone number"> <input
        class="form_input""email" name="email" id="email" placeholder="   Enter your email">
        <textarea
          class="form_input"
          name="concern"
          id=" concern"
          cols="30"
          rows="8"
          placeholder="Ellaborate your concern"
        ></textarea>
        <div class="click">
        <button class="btn2">Submit</button>
        </div>
       </form>
      </div>
    </section>
    <footer class="flex-all-center">
      <p>Copyright &copy; Lingaraj sanitary.shop</p>
    </footer>
  </body>
  <script src="web.js"></script>
</html>
