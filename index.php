<html>
<header>
    <title>Test file</title>
</header>
<body>
<?php
if (!empty($_POST['rin'])){
    $a = $_POST['rin'];
}
if ($a == 'test'){
echo 'hello '.$a;
}else{
    echo 'sleeping...zzzz';
}
?>
<form action="" method="post">
your name <input type="text" name="rin" />
<input type="submit" value="validate" />
</form>
</body>
</html>