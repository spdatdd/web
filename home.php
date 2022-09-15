<!DOCTYPE html>
<html   lang="vi-VN">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, 
          initial-scale=1.0">
        <link rel="stylesheet" href="fontend/css/style.css">
        <script src="https://kit.fontawesome.com/78f76e1c50.js" 
          crossorigin="anonymous">
        </script>
        <style>
          ::placeholder {
            text-align: left;
          }
          input.search-home {
            height: 40px;
            width: 80%;
            float: left;
            display: block;
            border-radius: 25px 0 0 25px;
            border-right: none;
            padding-left: 25px;
            outline: 0;
            cursor: text;
          }
          button.button {
            height: 40px;
            width: 20%;
            display: inline-block;
            border-radius: 0 25px 25px 0;
            border: 1px solid red;
            background-color: rgb(255, 0, 0);
            cursor: pointer;
          }
          @media screen and (max-width: 600px){
            input.search-home, button.button{
              float: none;
              border-radius: 0;
              width: 100%;
              border: 1px solid red;
            }
            ::placeholder{
              text-align: center;
            }
          }

        </style>
    </head>
<body>
    <div class="form">

        <div class="form-header">
          <span class="fa-solid fa-bars"
          alt="menu-icon" style="font-size: 24px;position: absolute;
          top: 4px; left: 0;" ></span>
          <span><img src="backend/img/logo.png" 
            alt="logo" height="40" width="40">
          </span> 
          <a href="#" style="top: 20%;">Webgiaitri</a>
        </div>
      
        <div class="form-body">
          <form action="#" type="max-width: 500px">
              <input type="text" name="search" class="search-home" placeholder="Search...">
              <button class="button">
                <i class="fa-solid fa-magnifying-glass"></i>
              </button>
              <div id="listosearchresults" style="display: none;"></div>
          </form>
        </div>
      </div>
</body>
</html>