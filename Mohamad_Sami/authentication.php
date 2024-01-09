<?php
session_start();
if(isset($_SESSION["LoggedIN"]) && $_SESSION["LoggedIN"] == 1){
   echo '<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top ">
   <div class="container">
      <img src="Uploads/alwanas-white-01-removebg-preview.png" class="img-logo">
      <a class="navbar-brand" href="#"><span class="text-warning">Al</span>Wanas</a> <button
         aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
         class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse"
         type="button"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
         <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
               <a class="nav-link" href="#">Home</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#about">About</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#services">Services</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#Products">Products</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="#team">Team</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="MyOrders.php">My Orders</a>
             </li>
            <li class="nav-item">
               <a class="nav-link" href="Logout.php">Logout</a>
            </li>
         </ul>
      </div>
   </div>
</nav>
';
   
}
else
echo '<nav class="navbar navbar-expand-lg navbar-light bg-dark fixed-top ">
<div class="container">
   <img src="Uploads/alwanas-white-01-removebg-preview.png" class="img-logo">
   <a class="navbar-brand" href="#"><span class="text-warning">Al</span>Wanas</a> <button
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
      class="navbar-toggler" data-bs-target="#navbarSupportedContent" data-bs-toggle="collapse"
      type="button"><span class="navbar-toggler-icon"></span></button>
   <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
         <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="#about">About</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="#Products">Products</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="#team">Team</a>
         </li>
         <li class="nav-item">
            <a class="nav-link" href="Login.php">Login</a>
         </li>
      </ul>
   </div>
</div>
</nav>
';;
?>
