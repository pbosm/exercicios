<?php
  require_once "./includes/verifica-acesso.inc.php";
?>


<!DOCTYPE html> 
<html lang="pt-BR"> 
<head> 
  <meta charset="utf-8"> 
  <title> Home </title> 
  <link rel="stylesheet" type="text/css" href="style.css">
</head> 

<div class="container">
  <div class="navigantion">
      <ul>
          <li>
              <a href="#">
                  <span class="icon"><ion-icon name="logo-youtube"></ion-icon></span>
                  <span class="title">Youtube Video</span>
              </a>
          </li>
          <li>
              <a href="./darshboard.php">
                  <span class="icon"><ion-icon name="home-outline"></ion-icon></span>
                  <span class="title">Home</span>
              </a>
          </li>
          <li>
              <a href="./customers.php">
                  <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                  <span class="title">Usuário</span>
              </a>
          </li>
          <li>
              <a href="#">
                  <span class="icon"><ion-icon name="chatbubble-outline"></ion-icon></span>
                  <span class="title">Mensagem</span>
              </a>
          </li>
          <li>
              <a href="#">
                  <span class="icon"><ion-icon name="help-outline"></ion-icon></span>
                  <span class="title">Ajuda</span>
              </a>
          </li>
          <li>
              <a href="#">
                  <span class="icon"><ion-icon name="settings-outline"></ion-icon></span>
                  <span class="title">Confingurações</span>
              </a>
          </li>
          <li>
              <a href="#">
                  <span class="icon"><ion-icon name="lock-closed-outline"></ion-icon></span>
                  <span class="title">Senha</span>
              </a>
          </li>
          <li>
              <a href="./includes/logout.inc.php">
                  <span class="icon"><ion-icon name="log-out-outline"></ion-icon></span>
                  <span class="title">Sair</span>
              </a>
          </li>
      </ul>
   </div>
   
   <!-- main -->
   <div class="main">
       <div class="topbar">
           <div class="toggle">
              <ion-icon name="menu-outline"></ion-icon>
           </div>
           <!-- search-->
           <div class="search">
              <label>
                  <input type="text" placeholder="Search Here">
                  <ion-icon name="search-outline"></ion-icon>
              </label>
           </div>
           <!-- userimg-->
           <div class="user">
               <img src="./image/user.jpg">
           </div>
       </div>

       <!-- cards -->
       <div class="cardBox"><img src="./image/camille.png" alt="Imagem" title="Imagem">
       </div>

       <!-- order details list -->
       <div class="details">
           <div class="recentOrders">
               <div class="cardHeader">
                   <h2>Pedidos recentes</h2>
                   <a href="#" class="btn">Ver todos</a>
               </div>
               <table>
                   <thead>
                       <tr>
                          <td>Time</td>
                          <td>Total jogos</td>
                          <td>Jogos blue side</td>
                          <td>Torres na blue side</td>
                          <td>Jogos red side</td>
                          <td>Torres na red side</td>
                       </tr>                            
                   </thead>
                   <tbody>
                       <tr>
                           <td>Star Refrigerador</td>
                           <td>$1200</td>
                           <td>Paid</td>
                           <td>Paid</td>
                           <td>Paid</td>
                           <td><span class="status delivered">Delivered</span></td>
                       </tr>
                       <tr>
                          <td>Mouse</td>
                          <td>$800</td>
                          <td>Paid</td>
                          <td>Paid</td>
                          <td>Paid</td>
                          <td><span class="status inprogress">In Progress</span></td>
                      </tr>
                      <tr>
                          <td>PS5</td>
                          <td>$2000</td>
                          <td>Paid</td>
                          <td>Paid</td>
                          <td>Paid</td>
                          <td><span class="status pending">Pending</span></td>
                      </tr>
                      <tr>
                          <td>Nootbook</td>
                          <td>$2500</td>
                          <td>Paid</td>
                          <td>Paid</td>
                          <td>Paid</td>
                          <td><span class="status return">Return</span></td>
                      </tr>
                      <tr>
                          <td>Skin</td>
                          <td>$1550</td>
                          <td>Due</td>
                          <td>Paid</td>
                          <td>Paid</td>
                          <td><span class="status inprogress">In Progress</span></td>
                      </tr>
                      <tr>
                          <td>Shirt</td>
                          <td>$200</td>
                          <td>Due</td>
                          <td>Paid</td>
                          <td>Paid</td>
                          <td><span class="status return">Return</span></td>
                          <tr>
                              <td>headset</td>
                              <td>$550</td>
                              <td>Due</td>
                              <td>Paid</td>
                              <td>Paid</td>
                              <td><span class="status inprogress">In Progress</span></td>
                          </tr>
                          <tr>
                              <td>Smartphone</td>
                              <td>$1000</td>
                              <td>Due</td>
                              <td>Paid</td>
                              <td>Paid</td>
                              <td><span class="status inprogress">In Progress</span></td>
                          </tr>
                   </tbody>
               </table>
           </div>


          </div>
   </div>
</div>

  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script>
        //add menutoggle
        let toggle = document.querySelector('.toggle');
        let navigantion = document.querySelector('.navigantion');
        let main = document.querySelector('.main');

        toggle.onclick = function()
        {
            navigantion.classList.toggle('active');
            main.classList.toggle('active');            
        }

        //add hovered valss in selected list item
        let list = document.querySelectorAll('.navigantion li');
        function activeLink()
        {
            list.forEach((item) =>
            item.classList.remove('hovered'));
            this.classList.add('hovered');
        }
        list.forEach((item) =>
        item.addEventListener('mouseover',activeLink));
    </script>

</body>
</html>