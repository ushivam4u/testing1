<!DOCTYPE html>
<html>
<body>

<?php
echo '<pre>';


$last_line = system('date', $retval);


echo '
</pre>
<hr />Last line of the output: ' . $last_line . '
<hr />Return value: ' . $retval;
?>

</body>
</html>
