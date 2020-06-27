<?php
namespace database;
use PDO;
use xPaw\MinecraftPing;
use xPaw\MinecraftPingException;

function vault() {
    $vaultDSN = "mysql:dbname=s7015_sagg-vault;host=na.sql.titannodes.com:3306";#getenv("vaultDSN", true);
    $vaultUser = "u7015_wRgQaDZSwH";#getenv("vaultUser",true);
    $vaultPass = ".YIIKA^sBGrwBYdM9Zz6.Ins";#getenv("vaultPass", true);
    $pdo = new PDO($vaultDSN, $vaultUser, $vaultPass);
    $statement = $pdo->query("SELECT player_uuid, player_name, money FROM eco_accounts ORDER BY `eco_accounts`.`money` DESC");
    $row = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $row;
}

function blocks(){
	$blocksDSN = "mysql:dbname=s7015_sagginmc;host=na.sql.titannodes.com:3306";#getenv("blocksDSN", true);
    $blocksUser = "u7015_MniKi0yIZh";#getenv("blocksUser",true);
    $blocksPass = "O2^ZeE^DAr0M!wp0R9a6lcbM";#getenv("blocksPass", true);
    $pdo = new PDO($blocksDSN, $blocksUser, $blocksPass);
    $statement = $pdo->query("SELECT player_uuid, player_name, money FROM eco_accounts ORDER BY `eco_accounts`.`money` DESC");
    $row = $statement->fetchAll(PDO::FETCH_ASSOC);
    return $row;
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