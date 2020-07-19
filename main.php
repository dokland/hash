<h3>MD5 Hash Generator</h3>

<?php
if(isset($_POST['md5me'])) {
$md5ed = md5($_POST['md5me']);
}
?>

<p>Hash: <?php echo $md5ed;?></p>

<form action="#" method="post">
<label for="md5me">Enter Text:</label>
<input name="md5me" input class="textbox" id="md5me" type="text" />
<button type="submit"><font size=3></i><value="Generate"/><b>Generate</b></font></button>
