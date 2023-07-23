<?php
$links = array ("Main"=>"./index.php", "Contact"=>"index2.php");
?>

<header>
<nav>
<?php
foreach ($links as $name => $link){
   echo "<a href='$link'>$name</a></br>" ;
}
?>

</nav>
</header>

