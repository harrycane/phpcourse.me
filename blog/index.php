<html xmlns="http://www.w3.org/1999/html">

<head>
    <title>Blog</title>
</head>
<body>
<header>
    <h1><BLOG</h1>
</header>
<section>
    <article>
        <h2>Form</h2>
        <form method="POST">
            <p><input id="title" type="text" name="title[]" placeholder="Post title here" value="title_1"></p>
            <p><textarea name="message[]" placeholder="Message here" value="message_1"></textarea></p>
            <input name="submit" type="submit" value="Blog it!">
        </form>
        <?php
            $posts = array(
                array(
                  "title"=> "Heading",
                  "message" => "message",
                )
            )
         ?>

    </article>
    <article>
        <h2>Blog</h2>
        <?php foreach($posts as $post) { ?>
            <h3><?php echo $post["title"]; ?></h3>
        <?php } ?>
    </article>

</section>
</body>

</html>
