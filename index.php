<?php include 'database.php'?>
<?php
    //create select query
    $query="SELECT * FROM messages ORDER BY id DESC";
    $msg=mysqli_query($conn,$query);
?>
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
                <?php while($row=mysqli_fetch_assoc($msg)):?>
                    <li class="message"><span><?php echo $row['time']."-"?> </span><strong><?php echo $row['user']?></strong>: <?php echo $row['message']?></li>
                <?php endwhile;?>
            </ul>
        </div>
        <div id="msgform">
            <?php if(isset($_GET['error'])):?>
                <div class="error"><?php echo $_GET['error'];?></div>
            <?php endif;?>

            <form action="process.php" method="post">
                <input  type="text" name="user" placeholder="Full Name">
                <input  type="text" name="message" placeholder="Your Message"><br>
                <input class="shout_btn" type="submit" value="Shout It Out!" name="submit" class="submit">
            </form>
        </div>
    </div>

</body>
</html>