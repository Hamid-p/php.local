<?php
echo "hamid_p";
include "function.php";
$background_color = "#fff";
if (isset($_POST['send'])) {
    //var_dump($_post);
    $background_color = select_bg($_POST['background']);
}
?>

<html>
<head>
    <style>
        table, tr, td, th {
            border: 1px solid #dddddd;
        }
    </style>
</head>
<body style="background: <?php echo $background_color ?>">
<?php //if (is_user_logged_in()): ?>
<!--    <p>welcome</p>-->
<?php //else: ?>
<!--<a href="#">login</a>-->
<?php //endif; ?>
<!--</body>-->

<form action="" method="post">
    <input type="radio" name="background" value="blue">blue
    <input type="radio" name="background" value="red">red
    <input type="radio" name="background" value="green">green

    <input type="submit" name="send" value="send">

</form>

<table style="border: 1px solid #ddd">
    <tr>
        <td>id</td>
        <td>name</td>
        <td>email</td>
        <td>action</td>
    </tr>
</table>
</body>
</html>
