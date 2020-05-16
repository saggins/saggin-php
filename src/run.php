<?php

include __DIR__.'/../vendor/autoload.php';
$discord = new \Discord\Discord([
    'token' => getenv("discordToken", true),
]);

$discord->on('ready', function ($discord) {
    echo "Bot is ready.", PHP_EOL;
    // Listen for events here
    $discord->on('message', function ($message) {
        echo "Recieved a message from {$message->author->username}: {$message->content}", PHP_EOL;
    });
});

$discord->registerCommand('ping', function ($message) {
    return 'pong!';
    echo 'yo';
  }, [
    'description' => 'pong!',
  ]);

$discord->run();
?>