<?php require_once('formHead.php'); ?>
    <section class="form">
        <div class="form">
            <div class="title">
                
            </div>
            <div class="row justify-content-center p-2 m-4">
                <form action="" method="post">
                    <label for="Assignment Name" class="form-label">
                        <h3>ASSIGNMENT NAME : </h3>
                    </label>
                    <input type="text" class="form-control" name="assname">
                    <label for="subject" class="form-label">
                        <h3>SUBJECT</h3>
                    </label>
                    <input type="text" class="form-control" name="subject">
                    <label for="teacher" class="form-label">
                        <h3>TEACHER</h3>
                    </label>
                    <input type="text" class="form-control" name="teachers_id">
                    <input type="submit" value="SUBMIT" name="AssignmentSubmit">
                </form>
            </div>
        </div>
    </section>

<?php require_once('formFoot.php'); ?> 