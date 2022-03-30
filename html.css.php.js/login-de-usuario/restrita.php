<!DOCTYPE html>
<html lang="pt-BR"> 
<head>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
<title> Layout | Video Youtube</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php
  require_once "./includes/verifica-acesso.inc.php";  //acesso apos login
 ?>

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
             <div class="cardBox">
                 <div class="card">
                     <div>
                         <div class="numbers">1,504</div>
                         <div class="cardName">Daily Views</div>
                     </div>
                     <div class="iconBx">
                        <ion-icon name="eye-outline"></ion-icon>
                     </div>
                 </div>
                 <div class="card">
                    <div>
                        <div class="numbers">80</div>
                        <div class="cardName">Sales</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="cart-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">284</div>
                        <div class="cardName">Comments</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="chatbubble-ellipses-outline"></ion-icon>
                    </div>
                </div>
                <div class="card">
                    <div>
                        <div class="numbers">$7,842</div>
                        <div class="cardName">Earning</div>
                    </div>
                    <div class="iconBx">
                        <ion-icon name="card-outline"></ion-icon>
                    </div>
                </div>
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
                                <td>Name</td>
                                <td>Prince</td>
                                <td>Payment</td>
                                <td>Status</td>
                             </tr>                            
                         </thead>
                         <tbody>
                             <tr>
                                 <td>Star Refrigerador</td>
                                 <td>$1200</td>
                                 <td>Paid</td>
                                 <td><span class="status delivered">Delivered</span></td>
                             </tr>
                             <tr>
                                <td>Mouse</td>
                                <td>$800</td>
                                <td>Paid</td>
                                <td><span class="status inprogress">In Progress</span></td>
                            </tr>
                            <tr>
                                <td>PS5</td>
                                <td>$2000</td>
                                <td>Paid</td>
                                <td><span class="status pending">Pending</span></td>
                            </tr>
                            <tr>
                                <td>Nootbook</td>
                                <td>$2500</td>
                                <td>Paid</td>
                                <td><span class="status return">Return</span></td>
                            </tr>
                            <tr>
                                <td>Skin</td>
                                <td>$1550</td>
                                <td>Due</td>
                                <td><span class="status inprogress">In Progress</span></td>
                            </tr>
                            <tr>
                                <td>Shirt</td>
                                <td>$200</td>
                                <td>Due</td>
                                <td><span class="status return">Return</span></td>
                                <tr>
                                    <td>headset</td>
                                    <td>$550</td>
                                    <td>Due</td>
                                    <td><span class="status inprogress">In Progress</span></td>
                                </tr>
                                <tr>
                                    <td>Smartphone</td>
                                    <td>$1000</td>
                                    <td>Due</td>
                                    <td><span class="status inprogress">In Progress</span></td>
                                </tr>
                         </tbody>
                     </table>
                 </div>

                 <!-- New customers-->
                <div class="recentCustomers">
                    <div class="cardHeader">
                        <h2>Clientes recentes</h2>
                    </div>
                    <table>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="./image/img1.jpg"></div></td>
                            <td><h4>Zane<br><span>Italy</span></h4></td>
                        </tr>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="./image/img2.jpg"></div></td>
                            <td><h4>Challenger<br><span>Brazil</span></h4></td>
                        </tr>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="./image/img3.jpg"></div></td>
                            <td><h4>Bulls<br><span>USA, Chicago</span></h4></td>
                        </tr>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="./image/img5.jpg"></div></td>
                            <td><h4>Edu<br><span>Turkey</span></h4></td>
                        </tr>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="./image/img6.jpg"></div></td>
                            <td><h4>Flame<br><span>Korea</span></h4></td>
                        </tr>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="./image/img7.jpg"></div></td>
                            <td><h4>Mylon<br><span>Japan</span></h4></td>
                        </tr>
                        <tr>
                            <td width="60px"><div class="imgBx"><img src="./image/img8.jpg"></div></td>
                            <td><h4>Yasuo<br><span>Mexico</span></h4></td>
                        </tr>
                    </table>
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