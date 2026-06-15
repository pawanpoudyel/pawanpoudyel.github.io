<?php
    if (!isset($_REQUEST["data"]) || trim($_REQUEST["data"]) == "") {
        echo "Error: data can't be blank.";
        exit();
    }

    $data = trim($_REQUEST["data"]);

    echo htmlentities($data);

?>