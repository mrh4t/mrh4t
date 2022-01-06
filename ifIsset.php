<?php
if(isset($minhaVar))
    {
        echo("Está setada no primeiro if!\n");
    }
$minhaVar = "";
    if(isset($minhaVar))
    {
        echo("Está setada no segundo if!\n");
        echo(isset($minhaVar));
    }
?>