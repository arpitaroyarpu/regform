<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/solid.css">
    <link rel="stylesheet" href="style.css">
    <style>
        .text-animation h2 {
    font-size: 40px;
    font-weight: bold;
    animation: slideIn 2s infinite;
    color: rgb(186, 195, 74);
  }
  
  @keyframes slideIn {
    0% {
      transform: translateY(-50px);
      opacity: 0;
    }
    50% {
      transform: translateY(0);
      opacity: 1;
    }
    100% {
      transform: translateY(-50px);
      opacity: 0;
    }
  }

  .text-animation2 h2 {
    font-size: 30px;
    font-weight: bold;
    animation: slideIn 2s infinite;
    color: rgb(193, 199, 69);
    margin-left: 600px;
  }
  @keyframes slideIn {
    0% {
      transform: translateY(-50px);
      opacity: 0;
    }
    50% {
      transform: translateY(0);
      opacity: 1;
    }
    100% {
      transform: translateY(-50px);
      opacity: 0;
    }
  }
  
    </style>

    
</head>
<body>
    <header>
        <div class="header_container container">
            <div class="nav">
                <a href="#" class="logo">MY <span>Sylhet</span></a>
                <ul class="menu">

                    <li>
                        <a href="#home" class="active">Start</a>
                    </li>

                    <li>
                        <a href="#about">About us</a>
                    </li>

                    <li>
                        <a href="#services">Services</a>
                    </li>

                    <li>
                        <a href="#contact">Contact</a>
                    </li>
                </ul>
                <button class="button" aria-controls="primary-navigation" aria-expanded="false">
                    <svg class="hamburger" viewBox="0 0 100 100" width="40">
                        <rect class="line top" width="80" height="10" x="10" y="25" rx="5"></rect>
                        <rect class="line middle" width="80" height="10" x="10" y="45" rx="5"></rect>
                        <rect class="line bottom" width="80" height="10" x="10" y="65" rx="5"></rect>
                    </svg>
                </button>
            </div>
        </div>
        
    </header>
    <main>
        <section class="home" id="home">

            <div class="home_container container">
                <div class="home_content">
                    <div class="content">
                        <h1>Find Sylhet <span>city</span> <br>in most <span>easiest <br>way with us</span> </h1>
                        <br>
                        <br>
                        <a href="#" class="btn">Get Started</a>
                    </div>
                </div>
                  <a href="#about" class="scroll_down">
                    <i class="uil uil-mouse-alt"></i>
                    <span>Scroll Down</span>
                    <i class="uil uil-angle-down arrow_down"></i>

                  </a>
            </div>

        </section>
        <section class="about" id="about">
        <div class="about_container container">
            <div class="content">
                <div class="text-animation">
                    <h2>Our Team</h2>
                  </div>
                <p>This is our Final year project.It is based on how new comers can find out every area, and facilitices in sylhet city. <br> We have three members in our team . Progga, Arpita & Kawser, we all are the student of Leading University CSE Department. <br></p>
                <a href="#" class="btn">Read more</a>

            </div>
               <div class="imgBox">
                <img src="./images/internship-illustration.png" alt="" class="img-fluid">
               </div>
        </div>
        </section>
        <section class="services" id="services">
            <div class="text-animation2">
                <h2>We provide Best services</h2>
              </div>
            <div class="wrapper">
                <div class="card">
                    <img src="images/s70.png" alt="">
                    <div class="info">
                        <h3>Home Rent</h3>
                        <p>Here people can choose their affordable residence to live. With reasonable price and comfort areas in Sylhet town.</p>
                        <span>Read More</span>
                    </div>
                </div>
        
                <div class="card">
                    <img src="images/screen.png" alt="">
                    <div class="info">
                        <h3>Emergency</h3>
                        <p>Here people can choose their affordable residence to live. With reasonable price and comfort areas in Sylhet town.</p>
                        <span>Read More</span>
                    </div>
                </div>
        
                <div class="card">
                    <img src="images/explore.png" alt="">
                    <div class="info">
                        <h3>Exploring places</h3>
                        <p>Here people can choose their affordable residence to live. With reasonable price and comfort areas in Sylhet town.</p>
                        <span>Read More</span>
                    </div>
                </div>
        
                <div class="card">
                    <img src="images/IMG_2334.png" alt="">
                    <div class="info">
                        <h3>Others</h3>
                        <p>Here people can choose their affordable residence to live. With reasonable price and comfort areas in Sylhet town.</p>
                        <span>Read More</span>
                    </div>
                </div>
            </div>
            
               
            
        </section>
        <section class="solutions">
            <div class="solutions_container container">
                <div class="imgBox">
                    <div class="content">
                        <div class="text-animation">
                            <h2>Simple Solutions</h2>
                          </div>
                        <div class="info">
                            <h3>Contact us <span>Contact any of three from us.</span></h3>
                            <h3>Learn <span>Any service related query you are welcomed!.</span></h3>
                            <h3>How to use <span>You can ask us how you will get benefited?.</span></h3>
                            <h3>Stay connected<span>Always stay connected with us.</span></h3>
                        </div>
                        <div class="btns">
                            <a href="#" class="btn">Get Started</a>
                            <a href="#" class="btn">Read More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="contact" id="contact">
            <div class="contact_container container">
                <div class="text-animation">
                    <h2>So,<br> Ready to get started?....</h2>
                  </div>
                <div class="contact_content">
                    <a href="#" class="btn">Contact Us</a>
                </div>
            </div>
        </section>
    </main>
    <script src="script.js"></script>
    
</body>
</html>