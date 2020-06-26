<?php
$my_name = $_POST['my_name'];
$password = $_POST['password'];
$sex = $_POST['sex'];
$hidden_param = $_POST['hidden_param'];
$age = $_POST['age'];
?>
<p>私の名前は<?php echo $my_name; ?>です。</p>
<p>パスワードは<?php echo $password; ?>です。</p>
<p>性別は<?php echo $sex; ?>です。</p>
<p>性別は<?php echo $hidden_param; ?>です。</p>

<?php
$my_name2= $_POST['my_name2'];
$kibo = $_POST['kibo'];
$number = $_POST['number'];
?>

<P>お名前：<?php echo $my_name2; ?></p>
<P>ご希望景品<?php echo $kibo; ?></p>
<p>個数：<?php echo $number; ?></p>