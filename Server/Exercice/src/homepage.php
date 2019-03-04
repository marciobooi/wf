<?php include 'header.php';

foreach($allarticles as $article){ ?>
    <article>
    <h1 class="title-design"><?php echo $article['title'] ?></h1>
    <p><?php echo $article['description'] ?></p>
    <img src="<?php echo $article['img'] ?>">
    <p><?php echo $article['pub_date'] ?></p>
    </article>


<?php }

include 'footer.php'?>

