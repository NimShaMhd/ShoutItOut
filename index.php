<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShoutIt!!!</title>
    <link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body>
    <div id="container">
        <header>
        <h1>ShoutIt Message Box</h1>
        </header>
        <div id="msgbox">
            <ul>
                <li class="message"><span>10.14 PM- </span>Shifa: What are you guys up to?</li>
                <li class="message"><span>10.14 PM- </span>Shifa: What are you guys up to?</li>
                <li class="message"><span>10.14 PM- </span>Shifa: What are you guys up to?</li>
                <li class="message"><span>10.14 PM- </span>Shifa: What are you guys up to?</li>
                <li class="message"><span>10.14 PM- </span>Shifa: What are you guys up to?</li>
                <li class="message"><span>11.14 PM- </span>Shifa: What are you guys up to?</li>
            </ul>
        </div>
        <div id="msgform">
            <form action="process.php" method="post">
                <input  class="input" type="text" name="fullname" placeholder="Full Name">
                <input  class="input" type="email" name="mailid" placeholder="someone@some.com"><br>
                <input  class="input" type="submit" value="ShoutIt Out!" name="submit" class="submit">
            </form>
        </div>


    </div>

</body>
</html>