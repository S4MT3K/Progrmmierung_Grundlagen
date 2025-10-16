<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My Mini Website</title>
    <link rel="stylesheet" href="styles.css">
    <script>
        if (!location.hash) location.hash = '#home';
    </script>
</head>
<body style="background-color: gray">

<div id="content_div" class="content_div"><!-- Content Div -->
    <div id="navBar" class="navBar">
        <div class="navElement"><a href="#home">Home</a></div>
        <div class="navElement"><a href="#pics">Pictures</a></div>
        <div class="navElement"><a href="impressum.php">Impressum</a></div> <!-- bad way -->
        <div class="navElement"><a href="#login">Login</a></div>
    </div>
    <section class="page" id="home" tabindex="-1">

    <div id="mainContent" class="mainContent">
        <div class="mainContentElement">
            <h1>Welcome to my Mini Website</h1>
            <p>This is my first website. I hope you like it!</p>
        </div>
        <div class="mainContentElement">
            <div style="width:50%; border: 1px solid black; margin: 0 auto;">
                Hallo Ihr Amazing Peoples
            </div>
            <div style="width:50%; border: 1px solid black; margin: 0 auto;">
                2.er Text
            </div>
        </div>
    </div>
    </section>
    <section class="page" id="pics" tabindex="-1" aria-labelledby="home-title">
        pics
    </section>
    <section class="page" id="login" tabindex="-1">
        Heir kommt login

        <form action="loggedin.php" method="GET">
            <h2>LOGIN</h2>
        </form>
    </section>
</div>

</body>
</html>