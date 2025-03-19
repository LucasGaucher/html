<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <pre>
Implement a solution that allows a user to access / get a message only if they provide the good login/password

Password should be hidden and the value of said password should never be present in the code

You need to "hide" - or hash - it with some function
    </pre>
    <h1>login</h1>
    <form method="post">
        <label for="number">Username</label>
        <input type="text" name="Username" id="Username" required>
        <button type="submit">L o g i n</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        if (isset($_POST["Username"])) {
            echo $_POST["Username"];
            if (isset($_COOKIE["Username"])) {
                echo 'cookies are alredy set';
            }
            else {
                echo 'cookie set to'.$_POST["Username"];
                setcookie("Username",$_POST["Username"], time() + 50,"/");}
    }}
    ?>





</body>
</html>