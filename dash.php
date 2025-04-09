<!-- <!doctype html>
<html>
<head>
 
<style>
.btn-primary {
    color: #fff;
    background-color: #000000;
    border-color: #000000;
}
.btn-primary:hover {
    color: #fff;
    background-color: #000000;
    border-color: #000000;
}
/*.sidenav {
  position: fixed;
    top: 0;
  left: 0;
  background-color: #111;
  overflow-x: hidden; */
  /*padding-top: 20px;
}*/
.sidenav a, .dropdown-btn {
  /* padding: 6px 8px 6px 16px; */
  text-decoration: none;
  font-size: 16px;
  color: white;
  display: block;
  border: none;
  background: none;
  width: 100%;
  text-align: left;
  cursor: pointer;
  outline: none;
  background-color:black;
}
/* .sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
} */
.fa-caret-down {
  float: right;
  padding-right: 12px;
}
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}
</style>
<meta charset='utf-8'>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<title>Food Ordering System</title>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
<link rel="stylesheet" href="dash.css">
<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
<link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' rel='stylesheet'>
<link rel="stylesheet" href="style.css">
<script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script type='text/javascript' src='https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script type='text/javascript' src='https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js'></script>



 <style>
    li:hover{
        padding-left:10px;
    }
</style>
</head>
<body oncontextmenu='return false' class='snippet-body'>
    <div class="wrapper d-flex align-items-stretch" style="height:1000px;z-index:1;">
        <nav id="sidebar" class="active" style="background-color:black;height:100%;">
            <div class="custom-menu">
                <button type="button" id="sidebarCollapse" class="btn btn-primary">
                    <i class="fa fa-bars"></i>
                    <span class="sr-only">Toggle Menu</span>
                </button>
            </div>
            <header style="font-size: 25px;font-weight: bold;margin-left: 100px;margin-top:30px;">Kepz</header>
            <div class="p-5">
                <div class="logo">
                    <img src="img/Food Logo Design.jpg" style="border-radius:50%;width:100px;height:100px;margin-left:30px;">
                    <p style="color:#bbb;font-weight:700;margin-left:0px;margin-top:10px;font-size:15px;">Keep Eat Perfect Easy</p>
                </div>
                <ul class="list-unstyled components mb-5">
                    <li class="active" style="line-height:50px;border-top: 1px solid rgb(23, 22, 22);transition:.4s;">
                        <div class="sidenav">
                            <button class="dropdown-btn"><i class='bx bx-grid-alt' style="margin-right:5px;"></i>  Dashboard</button>
                        </div>
                    </li>
                    <li class="active" style="line-height:50px;border-top: 1px solid rgb(23, 22, 22);transition:.4s">
                        <div class="sidenav">
                            <button class="dropdown-btn"><i class="fa-solid fa-utensils" style="margin-right:20px;"></i>My Resturant</a>
                                <i class="fa fa-caret-down" style="line-height:50px;"></i>
                            </button>
                            <div class="dropdown-container" style='background_color:red'>
                                <a href="myrestaurants.php">
                                    <i class="fa-solid fa-table-columns" style="margin-right:10px;"></i>
                                    View
                                </a>
                                <a href="addrestaurant.php">
                                    <i class="fa-solid fa-square-plus" style="margin-right:10px;"></i>
                                    Add
                                </a>
                                <a href="restauranteditdelete.php">
                                    <i class="fa-solid fa-pen-to-square"
                                    ></i>
                                    /
                                    <i class="fa-solid fa-trash-can" style="margin-right:10px;"></i>
                                    Edit/Delete
                                </a>
                            </div>
                        </div>
                        </li>
                    <li class="active" style="line-height:50px;border-top: 1px solid rgb(23, 22, 22);transition:.4s">
                        <div class="sidenav">
                            <button class="dropdown-btn"><i class="fa-solid fa-user" style="margin-right:20px;"></i>Customer</a>
                                <i class="fa fa-caret-down" style="line-height:50px;"></i>
                            </button>
                            <div class="dropdown-container" style='background_color:red'>
                                <a href="viewuser.php">
                                    <i class="fa-solid fa-table-columns" style="margin-right:10px;"></i>
                                    View
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="active" style="line-height:50px;border-top: 1px solid rgb(23, 22, 22);transition:.4s">
                        <div class="sidenav">
                            <button class="dropdown-btn">
                                <i class="fa-solid fa-cart-shopping" style="margin-right:10px;"></i>
                                Orders
                                <i class="fa fa-caret-down" style="line-height:50px;"></i>
                            </button>
                            <div class="dropdown-container" style='background_color:red'>
                                <a href="viewallorders.php">
                                    <i class="fa-solid fa-table-columns" style="margin-right:10px;"></i>
                                    View
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="active" style="line-height:50px;border-top: 1px solid rgb(23, 22, 22);transition:.4s">
                        <div class="sidenav">
                            <button class="dropdown-btn"><i class="fa-solid fa-burger" style="margin-right:10px;"></i>
                                Food
                                <i class="fa fa-caret-down" style="line-height:50px;"></i>
                            </button>
                            <div class="dropdown-container" style='background_color:red'>
                                <a href="foodview.php">
                                    <i class="fa-solid fa-table-columns" style="margin-right:10px;"></i>
                                    View
                                </a>
                                <a href="addfood.php">
                                    <i class="fa-solid fa-square-plus" style="margin-right:10px;"></i>
                                    Add
                                </a>
                                <a href="viewedit.php">
                                    <i class="fa-solid fa-pen-to-square" style="margin-right:10px;"></i>
                                    Edit
                                </a>
                                <a href="deletefood.php">
                                    <i class="fa-solid fa-trash-can" style="margin-right:10px;"></i>
                                    Delete
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="active" style="line-height:50px;border-top: 1px solid rgb(23, 22, 22);transition:.4s">
                        <div class="sidenav">
                            <button class="dropdown-btn">
                            <i class="fa-solid fa-burger" style="margin-right:10px;"></i>
                            
                                Employee
                                <i class="fa fa-caret-down" style="line-height:50px;"></i>
                            </button>
                            <div class="dropdown-container" style="background: #1d1b31;">
                                <a href="viewchef.php">
                                    <i class="fa-solid fa-kitchen-set" style="margin-right:10px;"></i>
                                    Chef
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                                <a href="viewdeliver.php">
                                    <i class="fa-solid fa-truck" style="margin-right:10px;"></i>
                                    Deliver
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                                <a href="viewsupplier.php"> 
                                    <i class="fa-sharp fa-solid fa-boxes-packing" style="margin-right:10px;"></i>
                                    Supplier
                                    <i class="fa-solid fa-angle-right"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="active" style="line-height:50px;border-top: 1px solid rgb(23, 22, 22);transition:.4s">
                        <div class="sidenav">
                            <button class="dropdown-btn"><i class="fa-solid fa-gear" style="margin-right:10px;"></i>
                                Setting
                                <i class="fa fa-caret-down" style="line-height:50px;"></i>
                            </button>
                            <div class="dropdown-container" style='background_color:red'>
                                <a href="foodview.php">
                                    <i class="fa-solid fa-table-columns" style="margin-right:10px;"></i>
                                    View Profile
                                </a>
                                <a href="addfood.php">
                                    <i class="fa-solid fa-pen-to-square" style="margin-right:10px;"></i>
                                    Edit Profile
                                </a>
                                <a href="viewedit.php">
                                    <i class="fa-solid fa-right-from-bracket" style="margin-right:10px;"></i>
                                    LogOut
                                </a>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

<script type='text/javascript'>(function($) {

"use strict";

var fullHeight = function() {

$('.js-fullheight').css('height', $(window).height());
$(window).resize(function(){
$('.js-fullheight').css('height', $(window).height());
});

};
fullHeight();

$('#sidebarCollapse').on('click', function () {
$('#sidebar').toggleClass('active');
});

})(jQuery);</script>

<script>

var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
  this.classList.toggle("active");
  var dropdownContent = this.nextElementSibling;
  if (dropdownContent.style.display === "block") {
  dropdownContent.style.display = "none";
  } else {
  dropdownContent.style.display = "block";
  }
  });
}
</script>



</body>
</html> -->


<!--New -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Food Ordering System</title>
    <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="dash2.css">
    <style>
        .sidebar{
            background-color:#000000;
            opacity:1;
        }
    </style>
</head>
<body>
    <div class="sidebar-menu">
        <div class="toggle-btn">
        <i class="fa fa-bars"></i>
        </div>
        <div class="sidebar">
            <div class="links">
                <div class="link">
                    <a href="#">
                        <i class="fa-solid fa-house-user"></i>
                        Dashboard
                    </a>
                </div>
                <div class="link">
                    <a href="#">
                    <i class="fa-solid fa-utensils"></i>
                        My Resturant 
                    </a>
                    <div class="sub-menu">
                        <a href="myrestaurants.php">
                        <i class="fa-solid fa-table-columns"></i>
                            View
                        </a>
                        <a href="addrestaurant.php">
                        <i class="fa-solid fa-square-plus"></i>
                            Add
                        </a>
                        <a href="restauranteditdelete.php">
                            <i class="fa-solid fa-pen-to-square"></i>/
                            <i class="fa-solid fa-trash-can"></i>
                            Edit/Delete
                        </a>
                    </div>
                </div>
                <div class="link">
                    <a href="#">
                        <i class="fa-solid fa-user"></i>
                        Customer
                    </a>
                    <div class="sub-menu">
                        <a href="viewuser.php">
                        <i class="fa-solid fa-table-columns"></i>
                            View
                        </a>
                    </div>
                </div>
                <div class="link">
                    <a href="#">
                    <i class="fa-solid fa-cart-shopping"></i>
                        Orders
                    </a>
                    <div class="sub-menu">
                        <a href="viewallorders.php">
                        <i class="fa-solid fa-table-columns"></i>
                            View
                        </a>
                    </div>
                </div>
                <div class="link">
                    <a href="#">
                        <i class="fa-solid fa-burger"></i>
                        Food
                    </a>
                    <div class="sub-menu">
                        <a href="foodview.php">
                        <i class="fa-solid fa-table-columns"></i>
                            View
                        </a>
                        <a href="addfood.php">
                        <i class="fa-solid fa-square-plus"></i>
                            Add
                        </a>
                        <a href="viewedit.php">
                        <i class="fa-solid fa-pen-to-square"></i>
                            Edit
                        </a>
                        <a href="deletefood.php">
                        <i class="fa-solid fa-trash-can"></i>
                            Delete
                        </a>
                    </div>
                </div>
                <div class="link">
                    <a href="#">
                    <i class="fa-solid fa-person"></i>
                        Employee
                    </a>
                    <div class="sub-menu">
                        <a href="viewchef.php">Chef
                            <i class="fa-solid fa-greater-than"></i>
                        </a>
                        <a href="viewdeliver.php">Deliver
                        <i class="fa-solid fa-greater-than"></i>
                        </a>
                        <a href="viewsupplier.php">Supplier
                        <i class="fa-solid fa-greater-than"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        document.querySelector(".sidebar-menu .toggle-btn").addEventListener("click",function(){
            document.querySelector(".sidebar-menu").classList.toggle("active");
        });

        document.querySelectorAll(".sidebar-menu .sidebar .links .link a").forEach
        (function(link){
            link.addEventListener("click",function(e){
                if(e.target.parentNode.children.length > 1){
                    e.target.parentNode.classList.toggle("active");
                }
            });
        });
    </script>
</body>
</html>