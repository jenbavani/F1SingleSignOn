<?php
session_start();
//Just echoing out some session variables to show we have them
echo "First Name = " . $_SESSION['firstName'] . "<br/>";
echo "Last Name = " . $_SESSION['lastName'] . "<br/>";
echo "iCode = " . $_SESSION['iCode'] . "<br/>";
echo "Person ID = " . $_SESSION['personID'];
?>