<!-- Session data stored on the server. Sessions are more secure than cookies. 95% of the time, sessions are preferred over cookies.-->


<?php
if (isset($_POST['submit'])) {
    session_start(); // Start the session

    $_SESSION['name'] = htmlentities($_POST['name']);
    $_SESSION['email'] = htmlentities($_POST['email']);

    header('location:page2.php');

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Sessions</title>
</head>
<body>
    <form method="POST" action=<?php echo $_SERVER['PHP_SELF'] ?>>
        <div>
            <label>Name</label>
            <input type="text" name="name">
        </div>

        <div>
            <label>Email</label>
            <input type="email" name="email">
        </div>
        <input type="submit" value="Submit" name="submit">
    </form>

</body>
</html>
