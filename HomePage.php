<?php
session_start();
unset($_SESSION["reg__"]);
unset($_SESSION["name__"]);
unset($_SESSION["avg__"]);
unset($_SESSION["data_entered__"]);
unset($_SESSION["no_data_retrieval"]);
extract($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="./css/Home.css">
    <script src="./nav.js" defer ></script>
    <style>
      body{
        margin:0px;
        padding: 0px;
      }
    </style>
    <title>Home</title>
  </head>
  <body>
    <div class="header">
      <p >Welcome to student Information Centre
      </p>
      <a href="logout.php"  ><button class="logout">Logout</button></a>  
    </div>
      <div class="buttons">
        <div class="clicks">

          <button onclick="Data_E()" >Data Entry</button>
          
          <button onclick="Data_R()" >Data Retrieval</button>
        </div>

      </div>
      <div class="sports">
        <p>Favourite Players</p>
      </div>
      <div class="images">
          <div class="image"> <a href="https://en.wikipedia.org/wiki/Neeraj_Chopra"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/2/2c/Neeraj_Chopra_Of_India%28Javelin%29_%28cropped%29.jpg/360px-Neeraj_Chopra_Of_India%28Javelin%29_%28cropped%29.jpg" alt="Neeraj Chopra"></a>
          </div>
          <div class="image">
            <a href="https://en.wikipedia.org/wiki/P._V._Sindhu"><img src="https://upload.wikimedia.org/wikipedia/commons/7/73/PV_Sindhu_headshot.jpg" alt="PV Sindhu"></a>
            </div>
          <div class="image">
            <a href="https://en.wikipedia.org/wiki/Abhinav_Bindra"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/3/38/Abhinav_Bindra_and_Mary_Kom_-_British_High_Commission%2C_Delhi%2C_27_July_2011_%28cropped%29.jpg/240px-Abhinav_Bindra_and_Mary_Kom_-_British_High_Commission%2C_Delhi%2C_27_July_2011_%28cropped%29.jpg" alt="Abhinav Bindra"></a>
            </div>
          <div class="image">
          <a href="https://en.wikipedia.org/wiki/Mary_Kom"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/dc/Mary_Kom_-_British_High_Commission%2C_Delhi%2C_27_July_2011.jpg/330px-Mary_Kom_-_British_High_Commission%2C_Delhi%2C_27_July_2011.jpg" alt="Mary Kom"></a>  
          </div>
          <div class="image">
          <a href="https://en.wikipedia.org/wiki/Milkha_Singh"><img src="https://upload.wikimedia.org/wikipedia/commons/9/9d/Milkha_Singh.jpg" alt="Milkha  Singh"></a>  
          </div>
      </div>
      <footer class="foot">
        
          <p><?php  echo $name  ?></p>
          <p><?php  echo $email  ?></p>
          <p><?php  echo $reg  ?></p>
      </footer>
  </body>
</html>
