<?php
error_reporting(0);
session_start();
$arv = rand(1,25);
$arv=$_SESSION['arv'];
//echo $_SESSION['arv'];
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Sisesta arv: <input type="int" name="a"><br />
    <input type="submit" value="Arva!"><br />
</form>

<?php
if (isset($_POST["a"])){
    if ($_POST["a"]>$_SESSION['arv'])
    {
        echo "Tegelik number on vaiksem";
    }
    if ($_POST["a"]<$_SESSION['arv'])
    {
        echo "Tegelik number on suurem";
    }
    if ($_POST["a"]==$_SESSION['arv'])
    {
        echo "Palju onne!";
    }
}

?>
