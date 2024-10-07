<?php  
$page = isset($_GET['page'])?$_GET['page']:"dashboard";
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <?php include "include/header.php"; ?>
    </head>
    <body class="sb-nav-fixed">
        <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
            <!-- Navbar Brand-->
            <a class="navbar-brand ps-3" href="index.html">Admin</a>
            <!-- Sidebar Toggle-->
            <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>
            <!-- Navbar Search-->
            <form class="d-none d-md-inline-block form-inline ms-auto me-0 me-md-3 my-2 my-md-0">
                <div class="input-group">
                    <input class="form-control" type="text" placeholder="Search for..." aria-label="Search for..." aria-describedby="btnNavbarSearch" />
                    <button class="btn btn-primary" id="btnNavbarSearch" type="button"><i class="fas fa-search"></i></button>
                </div>
            </form>
            <!-- Navbar-->
            <ul class="navbar-nav ms-auto ms-md-0 me-3 me-lg-4">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user fa-fw"></i></a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#!">Settings</a></li>
                        <li><a class="dropdown-item" href="#!">Activity Log</a></li>
                        <li><hr class="dropdown-divider" /></li>
                        <li><a class="dropdown-item" href="#!">Logout</a></li>
                    </ul>
                </li>
            </ul>
        </nav>       
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">                    
<?php 
   include "include/sidebar.php"; 
?>
                    </div>  
                </nav>
            </div>

            <div id="layoutSidenav_content">
                <main>            
                    <!-- <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Primary Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Warning Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-success text-white mb-4">
                                    <div class="card-body">Success Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-danger text-white mb-4">
                                    <div class="card-body">Danger Card</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        <a class="small text-white stretched-link" href="#">View Details</a>
                                        <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                                    </div>
                                </div>
                            </div>
                        </div>  
                    </div> -->

                    <?php

if($page == "dashboard")
{
    
    include "include/dashboard.php";
}
else if($page == "blogcategories")
{
    include "include/content/blogcategories.php";
}
else if($page == "blogcategories_add")
{
    include "include/content/blogcategories_add.php";
}
else if($page == "blogcategories_edit")
{
    include "include/content/blogcategories_edit.php";
}

else if($page == "blog")
{
    include "include/content/blog.php";
}
else if($page == "blog_add")
{
    include "include/content/blog_add.php";
}
else if($page == "blog_edit")
{
    include "include/content/blog_edit.php";
}

else if($page == "user")
{
    include "include/content/user.php";
}
else if($page == "user_add")
{
    include "include/content/user_add.php";
}
else if($page == "user_edit")
{
    include "include/content/user_edit.php";
}

else if($page == "comment")
{
    include "include/content/comment.php";
}
else if($page == "comment_add")
{
    include "include/content/comment_add.php";
}
else if($page == "comment_edit")
{
    include "include/content/comment_edit.php";
}

else if($page == "links")
{
    include "include/webside/links.php";
}
else if($page == "links_add")
{
    include "include/webside/links_add.php";
}
else if($page == "links_edit")
{
    include "include/webside/links_edit.php";
}

else if($page == "socials")
{
    include "include/webside/socials.php";
}
else if($page == "socials_add")
{
    include "include/webside/socials_add.php";
}
else if($page == "socials_edit")
{
    include "include/webside/socials_edit.php";
}

else if($page == "contact")
{
    include "include/webside/contact.php";
}

else if($page == "about")
{
    include "include/webside/about.php";
}

else if($page == "terms")
{
    include "include/webside/terms.php";
}

else if($page == "setting")
{
    include "include/webside/setting.php";
}

else if($page == "sliders")
{
    include "include/webside/sliders.php";
}
else if($page == "sliders_add")
{
    include "include/webside/sliders_add.php";
}
else if($page == "sliders_edit")
{
    include "include/webside/sliders_edit.php";
}

else if($page == "subscribers")
{
    include "include/content/subscribers.php";
}
else if($page == "send_mail")
{
    include "include/content/send.php";
}



?>

                </main>
                <footer class="py-4 bg-light mt-auto">
                    
                </footer>
            </div>
        </div>
        <?php 
include "include/footer.php";
        ?>
    </body>
</html>
