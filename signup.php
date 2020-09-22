<?php
    require "inc/_header.php";
?>

    <main>
        <section>
            <h1>Signup</h1>
            <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == "emptyfieds") {
                        echo '<p>Fill in all fields</p>';
                    } elseif ($_GET['error'] == "invalidemailusername") {
                        echo '<p>Invalid e-mail or username</p>';
                    }  elseif ($_GET['error'] == "invalidemail") {
                        echo '<p>Invalid e-mail</p>';
                    }  elseif ($_GET['error'] == "invalidusername") {
                        echo '<p>Invalid username</p>';
                    }  elseif ($_GET['error'] == "usertaken") {
                        echo '<p>Username already taken</p>';
                    }  elseif ($_GET['error'] == "passwordcheck") {
                        echo '<p>Passwords do not match</p>';
                    }
                }  elseif ($_GET['signup'] == "success") {
                    echo '<p>Signup successful</p>';
                }
            ?>
            <form action="inc/_signup.php" method="POST">
                <input type="text" name="signupUsername" placeholder="Usernamer">
                <input type="text" name="signupEmail" placeholder="Email">
                <input type="password" name="signupPassword" placeholder="Password">
                <input type="password" name="signupPasswordRepeat" placeholder="Repeat Password">
                <button type="submit" name="signupButton">Sign Up</button>
            </form>
        </section>
    </main>

<?php
    require "inc/_footer.php";
?>
