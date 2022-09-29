<html>
    <head>
        <title>Strona z memami</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <?php
    $con = new mysqli("127.0.0.1", "root","","memes");
    
    $page = 1;
    $limit = 10;
    $offset= ($page * $limit) - $limit;
    $q="SELECT id, file, title FROM memes limit $limit offset $offset";
    ?>
    <body>
        <div class="naglowek"><h1>Menu</h1></div>
        <div class="panel2"></div>
        <?php
        if ($wynik=$con->query($q)){
            while ($row=$wynik->fetch_array()){
                echo '
                <div class="panel3">
                    <h2>>'.$row['title'].'</h2>
                </div>
                <div class="panel4">
                    <b><br>Data</b>
                </div>
                <div class="panel5"></div>

                <div class="panel">
                    <img src="'.$row['file'].'">
                </div> ';
            }
        } else {
           echo $con->errno . "" . $con->error;
        }
        ?>
        
    
        <div class="stopka"></div>
    </body>
</html>
