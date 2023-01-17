<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Musics</title>
</head>

<body>
    <?php
    include "../master/nav.php";
    include "/opt/lampp/htdocs/Music/app/admin/Admin.php";

    $admin = new Admin();
    $resultMusic = $admin->getAll("users");
    ?>
</body>
<div class="container">
    <section style="background-color: #eee;" class="shadow rounded ps-5 pe-5">
        <div class="container my-5 py-4">

            <div class="text-center">
                <h2 class="fw-bold">Admin</h2>
            </div>
            <div class="text-end pb-4 d-flex justify-content-between">
                <input type="search" autocomplete="off" class="form-control w-25 me-5" id="search" placeholder="search">
                <a href="/Music/html/user/signup/" class="btn btn-success shadow">Add</a>

            </div>
            <div class="overflow-auto" style="height: 600px;">

                <table class="table table-primary text-center table-responsive table-bordered">
                    <thead class="table-borderless table-dark">
                        <th>ID</th>
                        <th>Name</th>
                        <th>language</th>
                        <th>audio</th>
                        <th>time</th>
                        <th>Action</th>
                    </thead>
                    <tbody id="Search_table" class="overflow-auto">
                        <?php
                        while ($fetchArray = mysqli_fetch_array($resultMusic)) {
                        ?>
                            <tr>
                                <td><?php echo $fetchArray['id'] ?></td>
                                <td><?php echo $fetchArray['name'] ?></td>
                                <td><?php echo $fetchArray['email'] ?></td>
                                <td><?php echo $fetchArray['password'] ?></td>
                                <td><?php echo $fetchArray['timestamp'] ?></td>
                                <td>
                                    <a href="/Music/app/user/delete.php?User_id=<?php echo $fetchArray['id']; ?>" class="btn btn-danger bi bi-trash"></a>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>

</html>