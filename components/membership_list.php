<?php
    require_once('connect.php');

    // grp for tabs
    $sql_m_grp = $conn-> query("SELECT m_name, m_type FROM `table_membership` GROUP BY `m_type`,`m_name`")
        or die(mysqli_error($conn));

    $membership_grp = array();
    
    while($row =mysqli_fetch_assoc($sql_m_grp))
    {
        $membership_grp[] = $row;
    }

    // complete membership list
    $sql_m_details = $conn-> query("SELECT * FROM `table_membership`")
    or die(mysqli_error($conn));

    $membership_list = array();
    
    while($row =mysqli_fetch_assoc($sql_m_details))
    {
        $membership_list[] = $row;
    }
    $membership_list = _group_by($membership_list, 'm_type');
    $active_tab = $membership_grp[0]['m_type'];
    function _group_by($array, $key) {
        $return = array();
        foreach($array as $val) {
            $return[$val[$key]][] = $val;
        }
        return $return;
    }
?>

