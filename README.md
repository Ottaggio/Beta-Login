Betas Login
====

CPPS Beta Login - Pages Login

![](http://i.imgur.com/Ku126Wll.jpg)

### Requirements:
<ul>
 <li> Files</li>
</ul>

### Instructions:
<ul>
  <li>Go To Your Register and add:
  <?php
$codes = explode("\n", file_get_contents("codes.inc") );
if( ! isset($_GET['c']) || ! in_array($_GET['c'], $codes ) )
exit("You Dont have a beta code now! buy one or win!");
?>
  </li>
<li>
Find your $insert = "INSERT INTO users of your register and add:
$newc = array();
foreach($codes as $a => $b ) {
if( $b == $_GET['c'] ) continue;
$newc[] = $b;
}
$codes = implode("\n", $newc);
file_put_contents("codes.inc", $codes);
</li>
<li>
Edit YOURSERVERLINK - YOURSERVERNAME.
</li>
</ul>

### Adding Codes:
<ul>
<li>Go to your Codes.inc and add 1 for line</li>
</ul>
