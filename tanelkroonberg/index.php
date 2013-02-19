<?php

//start of session
$session_id = session_id();

if (empty($session_id)) {
    session_start();
}
//end


if (isset($_POST['arv_a'])) { //if arv_a is set make operations

    $a = $_POST['arv_a'];

    if ($a < 1 || $a > 10) {
        echo "Ainult arvud 1-10";
    }
    elseif ($a == $_SESSION['number']) {
        echo "Sinu v6it, palju 6nne!!!";
        unset ($_SESSION['number']);
    }
    else {
        $_SESSION['proov']++;

        if ($_SESSION['proov'] < 3) {

            echo "Proov number {$_SESSION['proov']} <br />";
        }
        elseif ($_SESSION['proov'] == 3 ){
            echo "Proov number 3, rohkem ei saa!";
            unset($_SESSION['proov']);

        }
    }
}

if (empty($_SESSION['number'])) { //if $Session_nr is empty - set number and proov

    $_SESSION['proov'] = 0;
    $_SESSION['number'] = rand(1, 10);
}
?>

<html>

<head>
    <title>
        Arvamise m2ng
    </title>
</head>
<body>
<form method="post" action="">
    Sinu pakkumine:<input type="text" name="arv_a"><br/>
    <button>Sisesta!</button>

</form>

</body>
</html>