<?php
    require "inc/_header.php";
?>

    <main>
        <?php
            if (isset($_SESSION['emailID'])) {
                echo '<p>You are logged in</p>';
            }  else {
                echo '<p>You are logged out</p>';
            }
        ?>

    </main>

<?php
    require "inc/_footer.php";
?>

