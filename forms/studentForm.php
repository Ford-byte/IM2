<?php   
        require_once('formHead.php'); 
        require_once('../cdn/bootstrapCDN.php');
        require_once('../functions/functions.php');
        $stud = new Functions();
        $object = $stud -> getStudent();
?>       
<div class="p-5 text-center bg-light">
    <section class="form">
    <div class="container">
        <div class="row justify-content-center my-5 border border-secondary p-2">
            <div class="title">
            ACCOUNT FORM
            </div>
        <div class="col-lg-6">
            <form method="POST" class="form">
                <label for="fname" class="form-label">
                    FIRST NAME:
                </label>
                <input type="text" class="form-control" id="fname" name="fname" required>
                <br>
                <label for="lname" class="form-label">
                    LAST NAME:
                </label>
                <input type="text" class="form-control" id="lname" name="lname" required> 
                <div class="mb-4 text-center">
                <input type="submit" class="btn btn-secondary p-2 m-4" name="submit" value="Submit">
                </div>
            </form>
        </div>
        </div>
    </div>
    </section>

    <section class="table">
        <div class="container border border-secondary">
        <table class="table">
            <th scope="col">ID</th>
            <th scope="col">FIRST NAME</th>
            <th scope="col">LAST NAME</th>
            <th scope="col">ACTION</th>
            <tbody>
                <form action="" method="post">
                <?php foreach ($object as $col => $data) { ?>
                <tr>
                    <th><?php print_r($data->student_id) ?></th>
                    <td><?php print_r($data->fname) ?></td>
                    <td><?php print_r($data->lname) ?></td>
                    <td>
                    <input type="submit" value="EDIT" name="edit[<?php echo $data -> user_id ?>]">
                    <input type="submit" value="DELETE" name="delete[<?php echo $data->user_id ?>]">
                    </td>
                </tr>
                <?php } ?>
                </form>
            </tbody>
        </table>
        </div>
    </section>
                </div>
    <?php
if (isset($_POST['submit'])) {
        $fname = $_POST['fname'];
        $lname = $_POST['lname'];

        if($fname!=null && $lname!=null){
        require_once('../functions/functions.php');

        $data = array(
            'fname' => $fname,
            'lname' => $lname
        );

        $insert = new Functions();

        $insert-> insertStudent($data);
        header("Location:studentForm.php?success=true");
        exit;
    }
};
if(isset($_POST['delete'])){
    foreach ($_POST['delete'] as $id => $value) {
     $stud -> deleteStudent($id);
    }
    header("Location:studentForm.php?success=true"); 
 };
if(isset($_POST['edit'])){
    foreach($_POST['edit'] as $id => $value){
        $location = 'modalForm.php?id=' . $id;
        header('Location: ' . $location);        
    }
}
    ?>
    </body>
</html>
