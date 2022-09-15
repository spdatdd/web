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
    *{box-sizing: border-box;}
    .header{
        top: 0;
        text-overflow: auto;
        width: 100%;
        height: 30px;
        background-color: rgb(0, 0, 0);
        display: block;
    }
    .header a {
        text-decoration: none;
        text-align: center;
        padding: 5px 25px;
        float:left;
        color: aliceblue;
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
    a.col-1.header-video {
        text-decoration: underline red solid 1px;
    }
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
    @media screen and (max-width: 507px){
        .header a{
            width: 100%;
            color: orangered;
        }
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
  </style>
</head>
<body>
    <div class="header">
        <a href="#" class="col-1 fa-solid fa-bars"></a>
        <a href="#" class="" 
        style="padding-right: 0;">
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
    <div class="body" style="width: 100%;height: 300px;background-color: red;">
        body
    </div>
    <div class="footer" style="background-color: black;
        width: 100%;">
        <a href="#" class="" 
        style="padding-right: 0;text-decoration: none; color: aliceblue;
        position: relative;margin: 0 46%;">
            <img src="backend/img/logo.png" 
            alt="logo" height="20"width="20" >
            <p class="namepage" style="display: inline;">Webgiaitri</p>
        </a>
    </div>
</body>