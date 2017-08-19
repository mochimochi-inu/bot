<?php

    require_once(__DIR__ . '/config.php');

    use Abraham\TwitterOAuth\TwitterOAuth;

    $connection = new TwitterOAuth(
        CONSUMER_KEY,
        CONSUMER_SECRET,
        ACCESS_TOKEN,
        ACCESS_TOKEN_SECRET);
    // $content = $connection->get("account/verify_credentials");
    // $content = $connection->get("statuses/home_timeline", ['count' => 3]);

    $res = $connection->post("statuses/update",[
        'status' => 'tweet from bot'
    ]);

    // var_dump($res);

    if ($connection->getLastHttpCode() === 200) {
        // Tweet posted succesfully
        echo 'Success' . PHP_EOL;
    } else {
        // Handle error case
        echo 'Error' . $res->errors[0]->message . PHP_EOL;
    }

?>
