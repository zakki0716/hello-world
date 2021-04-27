<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>投稿記事入力画面</title>
    </head>
    <body>
        <h1> 投稿記事入力画面 </h1>
　　　　<h6> 記事を入力 </h6>
	
<?php
$yourtxt=$_POST['yourtxt'];
?>
        <form method="post" action="002.php">
	<textarea name="yourtxt" rows="5" cols="30"><?= htmlspecialchars($yourtxt) ?></textarea>
            <br>
            <button type="submit" name="Btn1" value="Btn1">投稿</button>
        </form>

        <form method="post" action="000.php">
            <button type="submit" name="Btn3" value="Btn3">取り消し</button>
        </form>

    </body>
</html>
 