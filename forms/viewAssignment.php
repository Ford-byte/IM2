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
                    <p class="container form-control"><?php print_r($data -> assignment_name) ?></p>
                <label for="lname" class="form-label">
                   SUBJECT
                </label>
                <p class="container form-control"><?php print_r($data -> subject) ?></p>
                <input type="submit" class="btn btn-secondary p-2 m-4" name="backTOmyASSIGNMENT" value="BACK">
                </div>
            </form>
        </div>
    </section>
    <?php 
        }
    }
    ?>
<?php require_once('formFoot.php'); ?> 