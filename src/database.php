<?php
namespace database;
use PDO;
use xPaw\MinecraftPing;
use xPaw\MinecraftPingException;

function vault() {
    $vaultDSN = getenv("vaultDSN", true);
    $vaultUser = getenv("vaultUser",true);
    $vaultPass = getenv("vaultPass", true);
    $pdo = new PDO($vaultDSN, $vaultUser, $vaultPass);
    $statement = $pdo->query("SELECT player_uuid, player_name, money FROM eco_accounts ORDER BY `eco_accounts`.`money` DESC");
    $row = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $row;
}

function rich(){
    
}

function player(){
    try
	{
		$Query = new MinecraftPing( 'localhost', 25565 );
		print_r( $Query->Query() );
	}
	catch( MinecraftPingException $e )
	{
		echo $e->getMessage();
	}
	finally
	{
		if( $Query )
		{
			$Query->Close();
		}
	}
}
?>