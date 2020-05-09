<?php 
$this->layout('shared/base');
$vaultDSN = getenv("vaultDSN", true);
$vaultUser = getenv("vaultUser",true);
$vaultPass = getenv("vaultPass", true);

$pdo = new PDO($vaultDSN, $vaultUser, $vaultPass);
$statement = $pdo->query("SELECT player_uuid, player_name, money FROM eco_accounts ORDER BY `eco_accounts`.`money` DESC");
$row = $statement->fetchAll(PDO::FETCH_ASSOC);
?>
<html>
    <head>
    </head>
    <body>
        <div class="container">
            <table class="table">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Money</th>
                </tr>
                <?php
                    $index=0; $counter=1;
                    foreach($row as $r):
                ?>
                <tr>
                    <th scope="col"><?php echo $index ?></th>
                    <th scope="col"><?php echo $row[$index]['player_name']?></th>
                    <th scope="col"><?php echo $row[$index]['money']?></th>
                </tr>
                <?php
                    $index++; 
                    endforeach;
                ?>
            </table>
        </div>
    </body>
</html>