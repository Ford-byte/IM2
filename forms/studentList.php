<?php 
require_once('formHead.php'); 
$stud = new Functions();
    
$object = $stud-> getStudent();
?>
<section">
    <form action="addStudent.php" method="post">
    <input type="submit" value="ADD STUDENT" class="btn btn-secondary p-2 m-2" name="addStudentBtn">
    </form>
</section>
<section>
    <form action="addAssignment.php" method="post" >
    <input type="submit" value="ADD ASSIGNMENT" class="btn btn-secondary m-2" name="addAssignment">
    </form>
</section>
<section class="table p-5">
        <div class="container border border-secondary">
        <table class="table">
            <th scope="col">ID</th>
            <th scope="col">FIRST NAME</th>
            <th scope="col">LAST NAME</th>
            <th scope="col">ACTION</th>
            <tbody>
                <form method="post">
                <?php foreach ($object as $col => $data) { ?>
                <tr>
                    <th><?php print_r($data->student_id) ?></th>
                    <td><?php print_r($data->fname) ?></td>
                    <td><?php print_r($data->lname) ?></td>
                    <td>
                    <input type="submit" value="EDIT" name="EditStudent[<?php echo $data -> student_id ?>]">
                    <input type="submit" value="DELETE" name="DeleteStudent[<?php echo $data->student_id ?>]">
                    </td>
                </tr>
                <?php } ?>
                </form>
            </tbody>
        </table>
        </div>
    </section>
<?php require_once('formFoot.php'); ?> 