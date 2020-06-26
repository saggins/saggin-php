<?php $this->layout('shared/base');
    $accessToken = $_SESSION['access_token'];
    $client = new Google_Client();
    $client->setAccessToken($access_token);

?>
<html>
    <head>
    </head>
    
    <body>
        <form action="post">
            <input type="text" placeholder=<?php ?> name="name" id="">
            <input type="text" name="email" id="">
            <input type="text" name="mcusername" id="">
            <input type="submit">
        </form>
    </body>
</html>