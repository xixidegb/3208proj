<?php
    include("config.php");
    $keywords = $_POST['keywords'];
    $sql = "select* from message where name like '%$keywords'";
    $result = mysqli_query($sql);
    if (!result) {
        die('无法读取数据');
    }
    echo "<h2> My sql Where";
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>{$row['id']}</td></tr>";
    }