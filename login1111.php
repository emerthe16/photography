 <?php
require 'cordinating.php';

if(isset($_POST["submit"])){
    echo "submit presesd";
    $firstname =$_REQUEST["firstname"];
    $secondname =$_REQUEST["secondname"];
    $id =$_REQUEST["id"];
    $email =$_REQUEST["email"];
    $phone =$_REQUEST["phone"];
    $cauntry =$_REQUEST["cauntry"];
    $sql ="INSERT INTO customer(first_name,second_name,id,email,phone,cauntry) VALUES('$firstname','$secondname','$id','$email','$phone','$cauntry')";
    mysqli_query($conn,$sql);
    mysqli_close($conn);
}

 ?>
 
 
 <html>
    <head>
        <html lang="en">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
        <title>login</title>
        <link rel="stylesheet" href="nav.css">
         </head>
<body style="background-color:pink">
    
    
    <header class="header">
        <div class="container">
            <div class="nav">
               <a href="index.html" class="logo">
                <h6>BEST MEMORY</h6> 
                </a>
                <div class="humburger-menu">
                    <i class="fa fa-bars"></i>
                    <i class="fa fa-times"></i>
                </div>
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.html" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="Abaut.html" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="portfolio.html" class="nav-link">portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a href="services.html" class="nav-link">services</a>
                    </li>
                    <li class="nav-item">
                        <a href="contact.html" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </div> 
         </header>  
    
    <section>
        <div class="head">
          <h2>login</h2>
        <form method="POST">
          <br>
          <label>fistname <br/>
          <input type="text" placeholder="enter the firstname" name="firstname" size="10"></label>
          <br/> <label>secondname<br/>
          <input type="text" placeholder="enter the  secondname" name="secondname"></label>
          <br/> <label>id<br/>
          <input type="number" id="enter the id" name="id">  </label>
          <br/> <label>email <br/>
          <input type="text" placeholder="enter the email" name="email" ></label>
          <br/> <label>phone <br/>
          <input type="text" placeholder="enter the  phoneno" name="phone"></label>
          <br/> <label>adress </br>
          <input type="text" placeholder="enter your cauntry" name="cauntry">  <br/></label>
          <button>submit</button>
           </form>
          </div>
        </section>
            
        <div class="middle">
        <h2 >photos</h2>
            <P>Capturing people and moments</P>
                 <img src="OOO.jpg" alt="j;o'"  width="600px" height="450px">
             </div>
             
    <script src="nav.js"></script>
           
        </body>
           </html>