<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    Sisesta arv: <input type="int" name="a"><br />
    <input type="submit" value="Arva!"><br />
</form>

<?php
error_reporting(0);

session_start();
$_SESSION['arv']=15;

//echo $_SESSION['rand'];


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

?>