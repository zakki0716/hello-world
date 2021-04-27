<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8" />
        <title>確認画面</title>
    </head>
    <body>
<h1> 確認画面 </h1>
<?php
$yourtxt=$_POST['yourtxt'];
echo '入力内容:<br><pre>' . htmlspecialchars($yourtxt) . '</pre><br>';
?>
<form method="post" action="000.php">
<button type="submit" name="Btn2" value="Btn2">投稿</button>
        </form>

<form method="post" action="003.php">
<button type="submit" name="Btn4" value="Btn4">修正</button>
<input type="hidden" name="yourtxt" value="<?php echo $yourtxt; ?>">
        </form>
    </body>
</html>