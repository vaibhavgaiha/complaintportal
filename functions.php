<?php

    function validate($x)
    {
        $x=trim($x);
        $x=stripslashes($x);
        $x=htmlspecialchars($x);
        return $x;
    }

?>
