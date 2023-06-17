<?php
#control structure = if / else / else if / elseif

$score = 85;
if ($score >= 80) {
    echo 'A+';
} elseif ($score >= 70) {
    echo 'A';
} else if ($score >= 33) {
    echo 'pass';
} else {
    echo "F";
}
?>

<!--in the php code we can easily use else if or elseif there have no issue but when we -->
<!--are going to use elseif or else if with html then we can only use elseif() structure -->
<!--either it will through an error-->

<html>
<body>
<br><hr><br>

<?php $gpa = 3.88 ?>
<?php if ($gpa === 5): ?>
    <strong style="color:greenyellow;">A+</strong>

    <!--this line will through an error cause there used an space between elseif so i just comment this line-->
<?php //else if ($gpa >= 4): ?><!-- -->
    <strong>A</strong>

<?php else : ?>
    <strong style="color:red;">A-</strong>
<?php endif ?>

</body>
</html>

