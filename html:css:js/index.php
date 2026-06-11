<form method="POST">
    Name:
    <input type="text" name="name">

    <button type="submit">
        Submit
    </button>
</form>

<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo $_POST["name"];
}

?>