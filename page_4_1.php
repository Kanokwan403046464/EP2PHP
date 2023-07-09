<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page_4_1</title>
    <style>
        /* Add any desired styling for the footer */
        footer {
        background-color: #ffb4b4;
        padding: 5px;
        text-align: center;
        }
        </style>
</head>
<body>
    <h1>Page_4_1 แสดงชื่อ-นามสกุล ชื่อเล่น ด้วยตัวแปร</h1>
    <h2><?php
    echo "Name : Kanokwan Tassanapanpet";
    echo "<br>";
    $nickname="NAN";
    $age=24;
    echo "Nickname : ".$nickname ;
    echo "<br>Age:".$age." ปี ";
    ?>
    <h3><a href="index.html"><input type="button" value="Home"></a></h3>
    
    </h2>
</body>
<footer>Copyright &copy by Thonburi University  </footer>
</html>