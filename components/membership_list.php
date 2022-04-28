<?php
    require_once('connect.php');

    $sql = $conn-> query("SELECT * from table_membership")
        or die(mysqli_error($conn));

    $membership_list = array();
    while($row =mysqli_fetch_assoc($sql))
    {
        $membership_list[] = $row;
    }
    echo json_encode($membership_list);
?>