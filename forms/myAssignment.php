<?php 
require_once('formHead.php'); 
$stud = new Functions();
$ass = $stud -> getAllAssignment();
?>

<section>
    <div class="form">
        <div class="container">
            <form action="" method="post">
            <table class="table">
                        <th>NO:</th>
                        <th>ASSIGNMENT NAME</th>
                        <th>SUBJECT</th>
                        <th>ACTION</th>
                    <tbody>
                        <form method="post">
                            <?php
                            $i = 0;
                            foreach ($ass as $id => $data) {
                            $i++;
                                ?>
                            <tr>
                                <td><?php echo $i;  ?></td>
                                <td><?php print_r($data -> assignment_name)?></td>
                                <td><?php print_r($data -> subject)?></td>
                                <td>
                                <input type="submit" value="VIEW" name="ViewAssignment[<?php echo $data->id ?>]">
                                </td>                  
                            </tr>
                           
                            <?php }?>
                        </form>
                    </tbody>
                </table>
            </form>
        </div>
    </div>
</section>

<?php require_once('formFoot.php'); ?> 