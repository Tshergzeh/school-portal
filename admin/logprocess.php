<?php
    include ("../dbcon.php");

    if (isset($_POST['login'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = hash('sha256', $_POST['password']);

        $check = mysqli_query($conn, "SELECT * FROM `admins` WHERE `username` = '$username' AND `password` = '$password'");
        if (mysqli_num_rows($check) > 0) {
            $row = mysqli_fetch_array($check);
            session_start();
            $_SESSION['id'] = $row['id']; 
            header("location: dashboard.php");
        } else { ?>
            <script>
                alert("Invalid login parameters");
                window.location.href = "index.php";
            </script>
        <?php }
    } else { ?>
        <script>
            alert("You must login first");
            window.location.href = "index.php";
        </script>
    <?php }
    
?>