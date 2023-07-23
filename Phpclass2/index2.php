
<header><?=include './header.php'?></header>
<?php

function familyname($fname, $year){
    echo "$fname Davud. Born In $year <br>";

}

familyname("Muradli","2005");
familyname("Ali","2012");
familyname("Ismayilov","1935");
?>