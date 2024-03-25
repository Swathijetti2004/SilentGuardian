<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Safe Gaurdian</title>
    <link href="style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Trirong">
    
    <style>
        .body{
            background-image:url("https://www.humanium.org/en/wp-content/uploads/2020/01/shutterstock_648575884-scaled.jpg");
            background-attachment: fixed;
            background-position:auto;
            background-repeat:no-repeat;
            background-size:cover;
        }
        .navbar{
            overflow:hidden;
            height:50px;
            padding-top: 10px;
            background-color:darkgray;
        }
        .navbar a {
  float: center;
  text-align: center;
  padding: 15px 16px;
  text-decoration: none;
  font-size: 20px;
}
    .header{
        padding:5%;
        /* color:white; */
        font-size:30px;
        font-family: "Lucida Console", "Courier New", monospace; 
    }
    marquee{
        font-family: Arial, Helvetica, sans-serif;
        color:gray;
        font-size:20px;
    }
    .discription{
       font-family: "Trirong", serif;
    }
    .card-img{
        width:300px;
        height:300px;
        border-radius:10%;
    }
    .card-img:hover{
        width:300px;
        height:350px;
        border-radius:20%;
    }
    .card{
        padding: 30px;
        /* background-color:white; */
    }
    .card h1{
        color:white;
        font:"Trirong" sans-serif;
        font-size :20px;
    }
    #services{
        display:flex;
        width:100%;
        justify-content:center;
    }

    .footer{
        background-color:gray;
        display:flex;
        padding:20px;
        spacing: 10px;
    }
    #about-content{
        font-family: Arial, Helvetica, sans-serif;
    }
    .about-contact{
        display: flex;
    }
    .copyright{
        display: flex;
        background-color:gray;
        justify-content:center;
    }
    </style>
</head>
<body>
<div class="body">
    <div class="navbar">
        <a href="#http://localhost/SilentGuardian/index.php"><i class="fa fa-fw fa-home"></i>Home</a>
        <a href="#services">Services</a>
        <a href="http://localhost/SilentGuardian/complaint_form.php" target="_blank">Sumbit Complaint</a>
        <a href="#contact"><i class="fa fa-fw fa-envelope"></i>Contact Us</a>
        <a href="#about"><i class="fa fa-fw fa-about"></i>About</a>
    </div>

    <div>
        <marquee behaviour="scroll" direction="left">
        Join us in our mission to foster a safer world. Your anonymity is our priority, and your voice holds the power to make a difference.
        </marquee>
    </div>

    <div class="content">
        <div class="header">
        <h1><pre>
Embrace Protection ....
    with SilentGuardian</pre></h1>
        </div >

        <div>
            <p><pre class="discription">
    Empowering Voices. Protecting Lives.
    SilentGuardian serves as a refuge for those seeking to report illegal 
    activities such as child labor, child marriage, and human trafficking anonymously.
    Together, we can combat these injustices and safeguard the vulnerable.
</pre>    </p>
        </div>
    
</div>  
    <div id="services" >
        <div class="card">
            <h1>Combatting Child Labor</h1>
            <img class= "card-img" src="https://wallpapercave.com/wp/wp7424760.jpg" alt="child labour">
            <ul>
                <li>Promote supply chain transparency.</li>
                <li>Enhance access to quality education.</li>
                <li>Encourage corporate responsibility and ethical practices.</li>
            </ul>
            <a href="https://clc.gov.in/clc/acts-rules/child-labour-prohibition-and-regulation-act-1986" target="_blank">Read more</a>
        </div>
        <div class="card">
            <h1>Ending Child Marriages</h1>
            <img class="card-img"src="https://th.bing.com/th/id/R.3382a23ae89c117767f9b13094455092?rik=O4HiP1MAJKR0Vw&riu=http%3a%2f%2fcdn.ipsnews.net%2fLibrary%2f2017%2f01%2fbw_child_marriage_.jpg&ehk=mitzFhjd9Cye7mWPVy8r8Av75eQRhOas2WMFILCdPDk%3d&risl=&pid=ImgRaw&r=0" alt="child marriage">
            <ul>
                <li>Advocate for child rights and challenge norms.</li>
                <li>Promote gender equality and empower girls.</li>
                <li>Strengthen legal enforcement against underage marriages.</li>
            </ul>
        </div>
        <div class="card">
            <h1>Human Trafficking Awareness</h1>
            <img class= "card-img" src="https://i1.wp.com/lawhelpbd.com/wp-content/uploads/2019/02/Human-Trafficking.jpg?resize=520%2C245" alt="human trafficking">
            <ul>
                <li>Identify trafficking routes and hotspots.</li>
                <li>Protect vulnerable groups effectively.</li>
                <li>Use technology for prevention and enforcement.</li>
            </ul>
        </div>
    </div>
</div>
<div class="footer">
    <div class="about-contact">
        <div id="about">
        <h2>About Silent Guardian</h2>
        <p id="about-content">
Silent Guardian empowers individuals to anonymously report illegal activities like human trafficking, 
child marriages, and child labor. Our secure platform ensures confidentiality, protecting the vulnerable
from retaliation. We collaborate with authorities, NGOs, and communities to combat injustices and safeguard
human rights. Beyond reporting, we provide support services, raise awareness, and advocate for policy 
reforms. Join us in creating a world where every voice is heard and every individual is protected.
        </p>
    </div>
</div>
    <div id="contact">
        <h2>Contact Us</h2>
        <p>Feel free to reach out to us via email or phone:</p>
    <ul>
      <li>Email: silentgaurdian@gmail.com</li>
      <li>Phone: +1234567890</li>
    </ul>
    </div>
</div>
<div class="copyright">
    <a href="https://creativecommons.org/licenses/by/4.0/">
    <img src="https://mirrors.creativecommons.org/presskit/buttons/88x31/png/by.png" alt="licence" width="150px" height="40px">
    </a><p>&copy Copyright 2024, All Rights Reserved | SilentGuardian</p>
</div>
</div>
</body>
</html>

<!-- <div class="cards">
    <div class="flip-card-inner">
            <div class="flip-card-front">
                <h1>Human Trafficking Awareness</h1>
            <img id= "card-img" src="https://i1.wp.com/lawhelpbd.com/wp-content/uploads/2019/02/Human-Trafficking.jpg?resize=520%2C245" alt="human trafficking">
            </div>
            <div class="flip-card-back">
                <ul>
                <li>Identify trafficking routes and hotspots.</li>
                <li>Protect vulnerable groups effectively.</li>
                <li>Use technology for prevention and enforcement.</li>
                </ul>
            </div>
    </div>
</div> -->