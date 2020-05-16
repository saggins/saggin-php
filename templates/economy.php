<?php
use function database\vault;
$this->layout('shared/base');
$row = vault();
?>
<html>
    <head>
    <script src="/public/vault.js"></script>
    </head>
    <body>
        <div class="container row">
            <div class="col align-self-start" id="money">
                <table class="table">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Money</th>
                    </tr>
                    <?php $index=0; $counter=1; foreach($row as $r): ?>
                    <tr>
                        <th scope="col" id='numbers'>#<?php echo $index ?></th>
                        <th scope="col" id='name'><?php echo $row[$index]['player_name']?></th>
                        <th scope="col" id='money'>$<?php echo $row[$index]['money']?></th>
                    </tr>
                    <?php $index++; endforeach; ?>
                </table>
            </div>
            <div class="col align-self-center">
                <table>
                    <tr>
                        <th scope="col">Blocks</th>
                        <th scope="col">Price</th>
                        <th scope="col">Ammount Sold</th>
                    </tr>
                </table>
            </div>
            <div class="col align-self-end">
                <table>
                    <tr>
                        <th scope="col">Player</th>
                        <th scope="col">Total Price</th>
                        <th scope="col">Buy/Sell</th>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>