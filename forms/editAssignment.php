<?php
        require_once('formHead.php'); 
        $Func = new Functions();
    
        $object = $Func-> getAllAssignment();
        $id = $_GET['id'];
            foreach ($object as $col => $data) {
                if($data->id == $id){
    ?>
    <section class="form p-5 text-center bg-light">
        <div class="row justify-content-center p-2 m-4">
        <form method="POST" class="form">
                <label for="fname" class="form-label">
                   ASSIGNMENT NAME:
                </label>
                <input type="text" class="form-control" id="fname" name="ass_name" placeholder="<?php print_r($data -> assignment_name) ?>">
                <label for="lname" class="form-label">
                   SUBJECT
                </label>
                <input type="text" class="form-control" id="lname" name="subject" placeholder="<?php print_r($data -> subject) ?>">
                <input type="submit" class="btn btn-secondary p-2 m-4" name="EditAssignmentSubmit" value="Submit">
                </div>
            </form>
        </div>
    </section>
    <?php 
        }
    }
    ?>
<?php require_once('formFoot.php'); ?> 