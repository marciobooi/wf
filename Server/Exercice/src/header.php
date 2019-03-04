<?php require_once 'database_connect.php' ?>

<html>
<meta charset="UTF-8">
<title><?php echo $article['title'] ?></title>
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">

<style type="text/css">
    @import url('https://fonts.googleapis.com/css?family=Sedgwick+Ave+Display');

    .body{
        padding-top: 2em;

    }

    .title-design{
        font-family: 'Sedgwick Ave Display', cursive;
    }

    article{
        width: 70%;
        margin-top: 15px;
        margin-bottom: 5px;
        border-top: 1px solid grey;
        border-left: 1px solid grey;
        box-shadow: 3px 3px 3px grey;
        border-radius: 10px;
        padding: 2em 0 2em 0;
        margin-left: 20%;
    }
</style>
