
<!DOCTYPE html>
<html>
    <head>
        <title>PHP MySQL Stored Procedure Demo 1</title>
    </head>
    <body>
        <table>
            <tr>
                <th>Category ID</th>
                <th>Category Name</th>
            </tr>
            
            <?php 
                include '../php_archive/query.php';
                $statement = selectCate();
                while ($r = $statement->fetch()): 
            ?>
                <tr>
                    <td><?php echo $r['category_id'] ?></td>
                    <td><?php echo $r['category_name'] ?>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </body>
</html>