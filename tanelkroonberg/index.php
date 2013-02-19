<?php

//start of session
$sess_nr = session_id();

if(empty($sess_nr)){

    session_start();
}//end
?>

<html>

<head>
    <title>
        Arvamise m2ng
    </title>
</head>
<body>
<form method="get">
    Sinu pakkumine:<input type="text" name="arv_a"><br />
    <input type="button" value="Sisesta!">
</form>

</body>
</html>

<?php

if (isset($sess_nr)){
if (empty($Session_nr['number'])){      //if $Session_nr is empty - set number and proov

    $Session_nr['proov'] = 0;
    $Session_nr['number'] = rand(1,10);
}


if (isset($_GET['arv_a'])){     //if arv_a is set make operations

$a = $_GET['arv_a'];

    if($a < 1 && $a > 10){

        echo "Ainult arvud 1-10";
        unset($Session_nr['number']);

    }


    elseif($a == $Session_nr['number']){

        echo "Sinu v6it, palju 6nne!!!";
        unset($Session_nr['number']);
    }

    else
    {
        $Session_nr['proov']++;

        if ($Session_nr['proov'] < 3){

            echo "Proov number {$Session_nr['proov']} <br />" ;
        }
        else{
            echo "Proov number 3, rohkem ei saa!";
            unset($Session_nr['proov']);
        }

    }

}
}



?>




