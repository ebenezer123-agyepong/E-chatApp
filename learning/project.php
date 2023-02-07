<form action="project.php" method="get">
    Enter First Name:
    <input type="text" name="firstName"> <br>
    Enter Last Name:
    <input type="text" name="lastName"> <br>
    Enter Age:
    <input type="number" name="age"> <br>
    <input type="submit">
</form>

<br>

<?php
    echo "Your full name is " . $_GET["firstName"] . " " . $_GET["lastName"]. "<br>";
    echo "Your are ". $_GET["age"] . " years old.";
?> 