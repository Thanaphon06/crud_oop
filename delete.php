<?php 

    include_once('functions.php');

    if (isset($_GET['del'])) {
        $userid = $_GET['del'];
        $deletedata = new DB_con();
        $sql = $deletedata->delete($userid);

        if ($sql) {
            echo "<script>alert('อ่าวเห้ย ลบแล้วโว้ย');</script>";
            echo "<script>window.location.href='index.php'</script>";
        }
    }

?>