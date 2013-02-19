<?php
session_start();
$_SESSION["number"]= rand(1,10);


?>
<form method="post">
    Sisesta arv 1-10: <input type="text" name="a"><br>
    <input type="submit" value="Tseki õnne">
</form>

<?php
if (isset($_POST["a"])){
    if ($_POST["a"]== $_SESSION["number"] ){
        echo "palju õnne";
    }
    elseif ($_POST["a"]>$_SESSION["number"]){
        echo "number on väiksem";
    }
    elseif ($_POST["a"]<$_SESSION["number"]){
        echo "number on suurem";
    }
    else {
        echo "siseta number";
    }
}
?>