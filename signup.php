<?php
    require "inc/_header.php";
?>

    <main>
        <section>
            <h1>Signup</h1>
            <form action="inc/signup.php" method="POST">
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
