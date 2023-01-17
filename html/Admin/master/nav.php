<?php
include "/opt/lampp/htdocs/Music/database/connection.php";
include "/opt/lampp/htdocs/Music/database/adminsecurity.php";
?>
<link rel="stylesheet" href="/Music/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
<nav class="navbar navbar-expand-lg sticky-top shadow navbar-light bg-light">
    <div class="container-fluid">

        <a class="navbar-brand fs-3 fw-bold" href="../index.php">Music Site</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <ul class="navbar-nav me-auto ">
            <li class="nav-item">
                <a href="/Music/html/Admin/music/" class="nav-link fs-5">Music</a>
            </li>
            <li class="nav-item">
                <a href="/Music/html/Admin/users/" class="nav-link fs-5">User</a>
            </li>
        </ul>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ps-2">
                <li class="nav-item dropdown me-5 pe-5">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="bi bi-person-circle fs-2"></i>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php
                        if (isset($_SESSION['ActiveAdminID'])) {
                        ?>
                            <!-- <li class="nav-item"> <a href="/Music/html/Admin/profile/" class="dropdown-item"> Profile</a> </li> -->
                            <li class="nav-item">
                                <a href="/Music/app/user/logout.php?logoutAdmin=true" class=" dropdown-item text-white bg-danger w-75">Log Out</a>
                            </li>
                        <?php
                        }
                        ?>
                    </ul>
            </ul>
            </li>
        </div>
    </div>
</nav>
<script src="/Music/js/bootstrap.bundle.min.js"></script>
<script src="/Music/js/jquery-3.6.0.js"></script>
<script src="/Music/js/search.js"></script>