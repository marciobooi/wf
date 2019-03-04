<?php
/**
 * Created by PhpStorm.
 * User: student
 * Date: 3/4/2019
 * Time: 9:48 AM
 */


require dirname(__DIR__).'/vendor/autoload.php';
use Ramsey\Uuid\Uuid;

function generateToken() : string {
    $cipher = "aes-256-gcm";
    $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length($cipher));
    $requestId = Uuid::uuid1();

    return openssl_encrypt($requestId, $cipher, gethostname(), OPENSSL_ZERO_PADDING, $iv, $tag);
}

function tokenKeepAlive() {
    $current = new DateTime();
    $alive = [];
    foreach ($_SESSION['carf_tokens'] as $uuid => $infos) {
        if ($infos['valid_period'] > $current) {
            $alive{$uuid} = $_SESSION['carf_tokens'][$uuid];
        }
    }
    $_SESSION['carf_tokens'] = $alive;
}

if ($_SERVER["REQUEST_METHOD"]==="GET") {
    $token = generateToken();
    $tokenLimit = 120;
}


if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}










?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Adding a project</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display');

        .body{
            padding-top: 2em;
        }

        .title-design{
            font-family: 'Sedgwick Ave Display', cursive;
        }

        .center-content, .cc{
            display: flex;
            justify-content: center;
        }
    </style>
</head>

<body class="container">
<h1 class="title-design">Add a project :</h1>

<form method="GET" action="addpage.php">
    <div class="form-group">
        <label for="addProject_title">Tip a title for your project</label>
        <input class="form-control" type="text" name="addProject_title">
    </div>

    <div class="form-group">
        <label for="addProject_description">Define a description for your project</label>
        <textarea class="form-control" name="addProject_description"></textarea>
    </div>

    <div class="form-group">
        <label for="addProject_image">Choose an image for your project</label>
        <input class="form-control" type="file" name="addProject_image">
    </div>

    <input type="hidden" name="addProject_csrf_token" value="<?php echo $token ?? ''; ?>">

    <div class="form-group cc">
        <button class="btn btn-default" type="submit">Submit</button>
    </div>
    <p><?php echo $token; ?></p>
</form>

</body>

</html>
