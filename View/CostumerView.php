<?php ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="../Controller/CostumerDAO.php" method="POST">
            <label> Nama </label><br>
            <input type="text" name="nama" placeholder="nama"><br>
            <label> Email </label><br>
            <input type="email" name="email" placeholder="email"><br>
            <label> Usia</label><br>
            <input type="number" name="usia" placeholder="usia"><br>
            <input type ="submit" name="tambah">
            <?php
            require'../Controller/CostumerDAO.php';
            $c = new CostumerDAO();
            if (isset($_POST['tambah'])) {
                $c->insert();
            }
            ?>
        </form>

    </body>
</html>
