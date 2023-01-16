<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="icon" href="https://media.istockphoto.com/id/1249219777/photo/shopping-online-concept-parcel-or-paper-cartons-with-a-shopping-cart-logo-in-a-trolley-on-a.jpg?s=612x612&w=0&k=20&c=EWKEahyVLY8iAHyirCCDESHRGW37lqUJ7In0SssNSLE=" type="image/x-icon">

</head>

<?php
include "master/nav.php";
include "/opt/lampp/htdocs/Music/app/admin/Admin.php";

$Admin = new Admin();
$getMusic = $Admin->getAll('musics');
$totalMusic = mysqli_fetch_array($getMusic);
// print_r($totalMusic);

$getUsers = $Admin->getAll('users');
$totalUsers = mysqli_fetch_array($getUsers);
// print_r($totalUsers);
?>
<div class="container">
    <section style="background-color: #eee;" class="shadow ps-5 pe-5">
        <div class="container my-5 py-5">
            <div class="pb-5">
                <h4> <span class="badge bg-success">Admin : </span> <b></b></h4>
            </div>
            <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 flex-wrap justify-content-evenly">
                <div class="col mb-5">
                    <a href="../product/" class="text-decoration-none">
                        <div class="col bg-primary shadow-lg rounded-4" style="width: 250px;">
                            <div class="pt-5 pe-5 ps-5">
                                <p class="d-flex align-items-center text-white justify-content-center fs-1 fw-bolder"><?php echo count($totalMusic); ?></p>
                            </div>
                            <div class="text-center pb-5 pt-auto">
                                <p class="btn btn-info fw-bold">Music</p>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col mb-5">
                    <a href="../product/" class="text-decoration-none">
                        <div class="col bg-primary shadow-lg rounded-4" style="width: 250px;">
                            <div class="pt-5 pe-5 ps-5">
                                <p class="d-flex align-items-center text-white justify-content-center fs-1 fw-bolder"><?php echo count($totalUsers);?> </p>
                            </div>
                            <div class="text-center pb-5 pt-auto">
                                <p class="btn btn-info fw-bold">Users</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
</div>
</body>

</html>