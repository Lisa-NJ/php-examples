<!DOCTYPE html>
<html lang="en">
<body>
    <h1>
        <?php echo 'Hello'; ?>
        <?= 'Hello'; ?>
    </h1>
    <p>
        My first paragraph.

    </p>
    <?php
        // a comment
        # another comment
        /** another one */ 
        $x = 10;
        $y = 5;
        echo '<p>' . $x . ',' . $y . '</p>';
    ?>
</body>
</html>