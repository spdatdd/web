<!DOCTYPE html>
<html lang="vi-VN" >
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, 
    initial-scale=1.0">
  <script src="https://kit.fontawesome.com/78f76e1c50.js" 
    crossorigin="anonymous">
  </script> 
  <style>
    .col-1 {width: 8.33%;}
    .col-2 {width: 16.66%;}
    .col-3 {width: 25%;}
    .col-4 {width: 33.33%;}
    .col-5 {width: 41.66%;}
    .col-6 {width: 50%;}
    .col-7 {width: 58.33%;}
    .col-8 {width: 66.66%;}
    .col-9 {width: 75%;}
    .col-10 {width: 83.33%;}
    .col-11 {width: 91.66%;}
    .col-12 {width: 100%;}
    *{box-sizing: border-box;color:white;}
    a{
        text-decoration: none;
        text-align: center;
    }
    .header{
        overflow: hidden;
        width: 100%;

        background-color: rgb(0, 0, 0);
    }
    
    .header a {
        padding: 5px 25px;
        float:left;
    }
    .header-form input{
        width: 80%;
        border: 1px solid red;
        border-radius:25px 0 0 25px;
    }
    .header-form input::placeholder{
        text-align: center;
    }
    .header-button{
        width: 19%;
        border: 1px solid red;
        border-radius: 0 25px 25px 0;
        margin: -10px;
        background-color: red;
    }
    .header-video, .header-music{
        font-size: 15px;
    }
    
    .namepage{
        position: relative;
        bottom: 5px;
    }
    .header:after{
    content: "";
    display: table;
    clear: both;
    }
    .dang-ky-kenh{
        background-color: red; float: right; margin: 25px 0;
        border-radius: 15px;
        width:66px; height: 20px;
    }
    @media screen and (max-width: 507px){
        .header a{
            width: 100%;
            color: orangered;
        }
        .namepage{
            color: orangered;
        }
        .dang-ky-kenh{
            display:block;
            width:100%;
            margin: 0;
        }
    }
    .dropdown{
        float: left; overflow: hidden;
    }
    .dropdown .dropbtn{
        border:none; outline: none;color:white; 
        background-color: inherit;font-family: inherit; margin:0;
    }
    .dropdown:hover .dropbtn{
        background-color: red;
    }
    .dropdown-content{
        display: none; position: absolute; background-color: #f9f9f9;
        min-width: 150px;
        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);z-index: 1;
    }
    .dropdown-content a {
        float: none;
        color: black;
        padding: 12px 16px;
        text-decoration: none;
        display: block;
        text-align: left;
    }
    .dropdown-content a:hover {
        background-color: #ddd;
    }
    .dropdown:hover .dropdown-content {
        display: block;
    }
  </style>
</head>
<body>
    <div class="header">
        <div class="dropdown">
            <button class="dropbtn">
                <i class="fa-solid fa-bars"></i>
            </button>
            <div class="dropdown-content">
                <a href="">link 1</a>
                <a href="">link 1</a>
                <a href="">link 1</a>
            </div>
        </div>
        <a href="#"style="padding-right: 0;">
            <img src="backend/img/logo.png" 
            alt="logo" height="20"width="20" >
            <p class="namepage" style="display: inline;">Webgiaitri</p>
        </a>
        
        <a href="#" class="col-3" type="width:auto;">
            <form action="#" class="header-form">
                <input type="text"name="search"placeholder="Search here...">
                <button class="header-button">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </button>
            </form>
        </a>
        <a href="#" class="col-1 header-video">VIDEO</a>
        <a href="#" class="col-1 header-music">MUSIC</a>
        <a href="#" class="col-1 fa-solid fa-cloud-arrow-up"
        style="float:right"></a>
    </div>
    <div class="body" style="width: 100%;height: auto;background-color: black;
    overflow:auto;">
        <?php include 'control-video.php';?>
    </div>
    <div class="footer" style="background-color: black;
        width: 100%;">
        <a href="#" class="" 
        style="padding-right: 0;text-decoration: none; color: aliceblue;
        position: relative;margin: 0 46%;">
            <img src="backend/img/logo.png" 
            alt="logo" height="20"width="20" >
        </a>
    </div>
</body>