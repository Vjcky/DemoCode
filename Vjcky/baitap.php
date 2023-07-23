<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="icon" href="https://glitch.com/favicon.ico" />
    <title> Web của Ngọc Anh </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="baitap.css"/>
</head>
  <body>
    <header>
        <nav>
            <a id = "logo"  href="" class="logo">LOGO</a>

            <a href="javascript:void(0)" class="menu-tab-icon" onclick="w3_open()">
            <i class="fa fa-bars"></i>
            </a>

            <div class="menu-tab-list">
                <a href="#about" class="menu-tab">
                    ABOUT
                </a>
                <a href="#team" class="menu-tab">
                    <i class="fa fa-user"></i> TEAM
                </a>
                <a href="#work" class="menu-tab">
                    <i class="fa fa-th"></i> WORK
                </a>
                <a href="#pricing" class="menu-tab">
                    <i class="fa fa-usd"></i> PRICING
                </a>
                <a href="#contact" class="menu-tab">
                    <i class="fa fa-envelope"></i> CONTACT
                </a>
            </div>
        </nav>
    </header>

    <nav class="w3-sidebar w3-bar-block w3-black w3-card w3-animate-left w3-hide-medium w3-hide-large" style="display:none" id="mySidebar">
        <a href="javascript:void(0)" onclick="w3_close()" class="w3-bar-item w3-button w3-large w3-padding-16">Close &times;</a>
        <a href="#about" onclick="w3_close()" class="w3-bar-item w3-button">ABOUT</a>
        <a href="#team" onclick="w3_close()" class="w3-bar-item w3-button">TEAM</a>
        <a href="#work" onclick="w3_close()" class="w3-bar-item w3-button">WORK</a>
        <a href="#pricing" onclick="w3_close()" class="w3-bar-item w3-button">PRICING</a>
        <a href="#contact" onclick="w3_close()" class="w3-bar-item w3-button">CONTACT</a>
    </nav>
    
<main>
<!-- content here -->
<script> 
var m = document.querySelector("main"),
h = document.querySelector("header"),
hHeight;
function setTopPadding() {
  hHeight = h.offsetHeight;
  m.style.paddingTop = hHeight + "px";
}
function onScroll() {
  window.addEventListener("scroll", callbackFunc);
  function callbackFunc() {
    var y = window.pageYOffset;
    if (y > 150) {
      h.classList.add("scroll");
    } else {
      h.classList.remove("scroll");
    }
  }
}

<script>
// Modal Image Gallery
function onClick(element) {
  document.getElementById("img01").src = element.src;
  document.getElementById("modal01").style.display = "block";
  var captionText = document.getElementById("caption");
  captionText.innerHTML = element.alt;
}


// Toggle between showing and hiding the sidebar when clicking the menu icon
var mySidebar = document.getElementById("mySidebar");

function w3_open() {
  if (mySidebar.style.display === 'block') {
    mySidebar.style.display = 'none';
  } else {
    mySidebar.style.display = 'block';
  }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
}
</script>
</main>

<div id = 'modau'>
    <br> <br> 
    <br> <br> 
    <p class = 'tieudelon'> Start something that matters</p><br>
    <p class = 'tieudenho'> Stop wasting valuable time with projects that just isn't you.<p>
    <br>
    <button class ="button1">
        Learn more and start today
    </button>
    <br><br><br><br>
    <div class="w3-display-bottomleft w3-text-grey w3-large" style="padding: 0px 48px">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
</div>

<div id = 'tieudelon1'>
    <h3 style="font-size: 25px"> ABOUT THE COMPANY</h3>
    <p style="font-size: 18px"> Key features of our company </p>
</div>

<div class="row">
    <div id="colum">
        <i class="fa fa-desktop column-img"></i>
        <h3>Responsive</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    
    <div id="colum">
        <i class="fa fa-heart column-img"></i>
        <h3> Passon</h3>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>

    <div id="colum">
        <i class="fa fa-diamond column-img"></i>
        <h3> Design</h3>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
    </div>
    <div id="colum">
        <i class="fa fa-cog column-img"></i>
        <h3> Support</h3>
        <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore.</p>
        </div>
</div>
  
<div class="khung1"> 
        <div id="colum2">
        <h3 id = 'cochu1'> We know design</h3>
        <p id = 'cochu2'> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore.</p>
            <form>
                <button class="botton2">
                    <i class="material-icons">window</i>
                    View Our Works
                </button>
            </form>
        </div>
        <div id="colum2">
            <img src="https://bitly2s.com/ztzrav" alt="Pineapple" style="width:700px;height:400px;margin-top:10px;">
    </div>
</div>
    <div id="cochu3"> 
        <h3> THE TEAM</h3>
        <p> The ones who runs this company</p>
    </div>
    <div>
    
</div>
<p><br><brr></p>
    <div class="row2"> 
        <div id="colum3">
            <img src="https://bitly2s.com/dusr9v"alt="Pineapple" style="width:100%;height:60%;margin-top:10px;">
            <h3> John Doe</h3>
            <p class="kieuchu">CEO & Founder </p>
            <p> Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            <form>
                <button class="button3">
                    <i class="material-icons">mail</i>
                    Contact
                </button>
            </form>
    
        </div>

        <div id="colum3"> 
            <img src="https://bitly2s.com/f2xbzk"alt="Pineapple" style="width:100%;height:60%;margin-top:10px;">
            <h3> Anja Doe</h3>
            <p class="kieuchu">Art Director </p>
            <p> Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            <form>
                <button class="button3">
                    <i class="material-icons">mail</i>
                    Contact
                </button>
            </form>
        </div>
        <div id="colum3"> 
            <img src="https://bitly2s.com/hjs06b"alt="Pineapple" style="width:100%;height:60%;margin-top:10px;">
            <h3> Mike Ross</h3>
            <p class="kieuchu">Web Designer </p>
            <p> Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            <form>
                <button class="button3">
                    <i class="material-icons">mail</i>
                    Contact
                </button>
            </form>
        </div>
        <div id="colum3"> 
            <img src="https://bitly2s.com/osg46f" alt="Pineapple" style="width:100%;height:60%;margin-top:10px;">
            <h3> Dan Star</h3>
            <p class="kieuchu">Designer </p>
            <p> Phasellus eget enim eu lectus faucibus vestibulum. Suspendisse sodales pellentesque elementum.</p>
            <form>
                <button class="button3">
                    <i class="material-icons">mail</i>
                    Contact
                </button>
            </form>
        </div>
        </div>
        <div> <br><br><br><br> </div>
        <?php
   
    ?>
      <div class = "container">
        <h1> User List</h1>
</div>


<form method="post" id="search-form">
    <input type="text" name="noidung" placeholder="Name"  >
    <input type="submit" name="submit" value="Search" id = 'hihi'>
</form>
<div>

<?php
    $conn = mysqli_connect('localhost', 'root', '', 'abc');
    if(isset($_POST['submit'])){
        $noidung = $_POST['noidung'];
        $sql = "SELECT * FROM user WHERE Name LIKE '%$noidung%'";
        $result =  mysqli_query($conn,$sql);

        while($row = mysqli_fetch_array( $result)){
        echo 'Name: '. $row['Name'];
        echo '<br>';
        echo 'Email: '.$row['Email'];
        echo '<br>';
        echo 'Job: '.$row['Job'];
        }
    }  
    
?>
     

<div>
   <table class="table table-striped table-hover">
       <thead>
           <tr>
               <th scope = "col">ID</th>
               <th scope ="col">Name</th>
               <th scope ="col">Email</th>
               <th scope ="col">Job</th>
               <th scope ="Edit">Job</th>
               <th scope ="Delete">Job</th>
               
       </tr>
       </thead>
       <tfoot>
               <tr>
                   <td colspan="8">
                       <a href="add.php"><button id="button">Add member</button></a>
                   </td>
               </tr>
       </tfoot>
<tbody>
   <?php
    $servername='localhost';
    $username='root';
    $password='';
    $database="abc";
    $conn= mysqli_connect($servername, $username, $password, $database);
    $sql="select * from user order by id DESC";
    $result = mysqli_query($conn,$sql);
    if ($result->num_rows > 0) {
        echo "<tr><td colspan='5' align='center'></td></tr>";
    }
   ?>
</tbody>
<?php
   
   //Phantrang
   $sotin1trang = 5;
   $current_page = isset($_GET['trang']) ? $_GET['trang'] : "  ";
   if($current_page == '  '|| $current_page == 1){
       $from = 0;
   }else{ 
       $from = ($current_page - 1)*$sotin1trang;
   }
   
   $qr = "SELECT * FROM user LIMIT $from, $sotin1trang";
   $ds = mysqli_query($conn,$qr);
   $iq = "SELECT * FROM user";
   $aq = mysqli_query($conn,$iq);
   // 2 dong quan trong nhat
   $tongsotin = mysqli_num_rows($aq); //dem so tin => 16 
   $sotrang = ceil($tongsotin/$sotin1trang);
   ?>  
   </div>
   <div>
       <?php 
           // PHẦN HIỂN THỊ TIN TỨC
           // BƯỚC 6: HIỂN THỊ DANH SÁCH TIN TỨC
        //    $ID=0;
           while($row=mysqli_fetch_array($result)){
           while ($monan = mysqli_fetch_assoc($ds)){
               echo "<tr>";
               echo "<td>$monan[ID]</td>";
               echo "<td>$monan[Name]</td>";
               echo "<td>$monan[Email]</td>";
               echo "<td>$monan[Job]</td>";
               echo '<td><a href="./edit.php"ID=10>Edit</a></td>';
               echo '<td><a href="./delete.php"ID=<?=$row[ID?]>Delete</a></td>';
           }}

       ?>
   </div>
   <div id = "phantrang">
   <?php
   for($t = 1; $t<=$sotrang; $t++){
       echo "<a href = 'baitap.php?trang=$t#search-form'> Trang $t </a>";
   }
   ?>
   </div>
</table>
</div>
  
    

    <div class="hehe" id="hehe">
        <div id="cot1">
            <h3> 14+ </h3>
            <p> Parners </p>
        </div>
        <div id="cot1">
            <h3> 55+ </h3>
            <p> Projects Done </p>
        </div>
        <div id="cot1">
            <h3> 89+ </h3>
            <p> Happy Clients </p>
        </div>
        <div id="cot1">
            <h3> 150+ </h3>
            <p> Meetings </p>
        </div>
    </div>

    <div id="cochu3">
        <h3>OUR WORK </h3> 
        <p>What we've done for people</p>
    </div>

    <div class="row4">
        <img id='cot2' src="https://bitly2s.com/4ww7f4" alt="Pineapple" style="width:24%;margin-top:10px;">
        <img id='cot2'  src="https://bitly2s.com/xy4ppl"alt="Pineapple" style="width:24%;margin-top:10px;">
        <img id='cot2' src="https://bitly2s.com/vp1f6z" alt="Pineapple" style="width:24%;margin-top:10px;">
        <img id='cot2' src="https://bitly2s.com/hzwy6z" alt="Pineapple" style="width:24%;margin-top:10px;">
    </div>
    <div class="row5">
        <img id='cot3' src="https://bitly2s.com/elpgy8" alt="Pineapple" style="width:24%;margin-top:10px;">
        <img id='cot3' src="https://bitly2s.com/t39rmn" alt="Pineapple" style="width:24%;margin-top:10px;">
        <img id='cot3' src="https://bitly2s.com/htu4k2" alt="Pineapple" style="width:24%;margin-top:10px;">
        <img id='cot3' src="https://bitly2s.com/a0dmlq" alt="Pineapple" style="width:24%;margin-top:10px;">
    </div>
    <br><br><br>
    <div class="Nana">
        <div id = 'ngocanh'> 
            <h3> Our Skills.</h3>
            <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore.
                <br><br>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                tempor incididunt ut labore et dolore.</p>
        </div>
        <span id = 'ngocanh'>
            <div class="w3-col m6">
                <p class="w3-wide"><i class="fa fa-camera w3-margin-right"></i>Photography</p>
                <div class="w3-grey">
                  <div class="w3-container w3-dark-grey w3-center" style="width:90%">90%</div>
                </div>
                <p class="w3-wide"><i class="fa fa-desktop w3-margin-right"></i>Web Design</p>
                <div class="w3-grey">
                  <div class="w3-container w3-dark-grey w3-center" style="width:85%">85%</div>
                </div>
                <p class="w3-wide"><i class="fa fa-photo w3-margin-right"></i>Photoshop</p>
                <div class="w3-grey">
                  <div class="w3-container w3-dark-grey w3-center" style="width:75%">75%</div>
                </div>
              </div>
        </span>
    </div>

<div id="qualamet">
    <p id="cochu4">
        PRICING
        <br> Choose a pricing plan that fits your needs.
    </p>


    <div class="w3-row-padding" style="margin-top:64px">
        <div class="w3-third w3-section">
        <ul class="w3-ul w3-white w3-hover-shadow">
            <li class="w3-black w3-xlarge w3-padding-32">Basic</li>
            <li class="w3-padding-16"><b>10GB</b> Storage</li>
            <li class="w3-padding-16"><b>10</b> Emails</li>
            <li class="w3-padding-16"><b>10</b> Domains</li>
            <li class="w3-padding-16"><b>Endless</b> Support</li>
            <li class="w3-padding-16">
            <h2 class="w3-wide">$ 10</h2>
            <span class="w3-opacity">per month</span>
            </li>
            <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-black w3-padding-large">Sign Up</button>
            </li>
        </ul>
        </div>
        <div class="w3-third">
        <ul class="w3-ul w3-white w3-hover-shadow">
            <li class="w3-red w3-xlarge w3-padding-48">Pro</li>
            <li class="w3-padding-16"><b>25GB</b> Storage</li>
            <li class="w3-padding-16"><b>25</b> Emails</li>
            <li class="w3-padding-16"><b>25</b> Domains</li>
            <li class="w3-padding-16"><b>Endless</b> Support</li>
            <li class="w3-padding-16">
            <h2 class="w3-wide">$ 25</h2>
            <span class="w3-opacity">per month</span>
            </li>
            <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-black w3-padding-large">Sign Up</button>
            </li>
        </ul>
        </div>
        <div class="w3-third w3-section">
        <ul class="w3-ul w3-white w3-hover-shadow">
            <li class="w3-black w3-xlarge w3-padding-32">Premium</li>
            <li class="w3-padding-16"><b>50GB</b> Storage</li>
            <li class="w3-padding-16"><b>50</b> Emails</li>
            <li class="w3-padding-16"><b>50</b> Domains</li>
            <li class="w3-padding-16"><b>Endless</b> Support</li>
            <li class="w3-padding-16">
            <h2 class="w3-wide">$ 50</h2>
            <span class="w3-opacity">per month</span>
            </li>
            <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-black w3-padding-large">Sign Up</button>
            </li>
        </ul>
        </div>
    </div>
    <br><br><br><br>
</div>
<div id = 'vit' >
    <br><br><br>
    <div class="w3-center">
        <h2> CONTACT</h2> <p> Lets get in touch. Send us a message:</p>
    </div>
    <br><br>
    <div> 
       <p style="padding-left: 10px"> <i class="fa fa-map-marker w3-margin-right"></i>Chicago, US</p>
       <p style="padding-left: 10px"> <i class="fa fa-phone w3-margin-right"></i>Phone: +00 151515</p>
       <p style="padding-left: 10px"> <i class="fa fa-envelope w3-margin-right"></i>Email: mail@mail.com</p>
    </div>
    <div>
        <form name="main-form" method="post" action ="proccess.php">
            <p style="padding: 0px 10px"><input  type="text" placeholder="Name" required name="Name" style="width:100%"></p>
            <p style="padding: 0px 10px"><input  type="text" placeholder="Email" required name="Email" style="width:100%"></p>
            <p style="padding: 0px 10px"><input  type="text" placeholder="Subject" required name="Subject" style="width:100%"></p>
            <p style="padding: 0px 10px"><input  type="text" placeholder="Message" required name="Message" style="width:100%"></p>
            <p style="padding-left: 10px">
                <button class="botton2" type="submit">
                    <i class="fa fa-paper-plane"></i> SEND MESSAGE
                  </button>
            </p>
        </form>
    </div>
    <br><br>
    <img src="https://bitly2s.com/s6cpvn" style="width:100%">
    <br><br><br>
<div>

</div>
    <br><br><br>
</div>
<footer class="w3-center w3-black w3-padding-64">
    <a href="login.php" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>LOG OUT</a>
    <div class="w3-xlarge w3-section">
      <i class="fa fa-facebook-official w3-hover-opacity"></i>
      <i class="fa fa-instagram w3-hover-opacity"></i>
      <i class="fa fa-snapchat w3-hover-opacity"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity"></i>
      <i class="fa fa-twitter w3-hover-opacity"></i>
      <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
  </footer>
</body>
</html>
