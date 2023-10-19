<?php
        require_once('formHead.php'); 
        $Func = new Functions();
    
        $object = $Func-> getStudent();
        $id = $_GET['id'];
            foreach ($object as $col => $data) {
                if($data->student_id == $id){
    ?>
    <section class="form p-5 text-center bg-light">
        <div class="row justify-content-center p-2 m-4">
        <form method="POST" class="form">
                <label for="fname" class="form-label">
                    FIRST NAME:
                </label>
                <input type="text" class="form-control" id="fname" name="fname" placeholder="<?php print_r($data -> fname) ?>">
                <label for="lname" class="form-label">
                    LAST NAME:
                </label>
                <input type="text" class="form-control" id="lname" name="lname" placeholder="<?php print_r($data -> lname) ?>">
                <input type="submit" class="btn btn-secondary p-2 m-4" name="EditSubmit" value="Submit">
                </div>
            </form>
        </div>
    </section>
    <?php 
        }
    }
    ?>
<?php require_once('formFoot.php'); ?> 