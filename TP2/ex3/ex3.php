<?php

include '../functions.php';
getHeader(true, "Exercice 3");

if(isset($_POST['browser'])) {
    $_SESSION['browser'] = $_POST['browser'];
}
?>

<form method="post" action="ex3.php">
    <fieldset> 
        <legend>Question</legend>
        <fieldset>
            <legend>Naviguateur favori ?</legend>
            <input name="browser" value="Topher" type="radio"><label>Topher</label>
            <input name="browser" value="fanfan" type="radio"><label>Fanfan</label>
            <input name="browser" value="kevin" type="radio"><label>kevin</label>
            <input name="browser" value="paul" type="radio"><label>paul</label>
        </fieldset>
        <input type="submit" />
    </fieldset>
</form>

<?php

getFooter();

?>