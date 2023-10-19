<?php 
require_once('formHead.php'); 
?>
<!-- <div class="p-5 text-center bg-light"> -->
    <section class="form">
    <div class="container">
        <div class="row justify-content-center my-5 border border-secondary p-2 m-2">
            <div class="title font-weight-bold">
            ADD STUDENT
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
                <input type="submit" class="btn btn-secondary p-2 m-4" name="addStudent" value="Submit">
                </div>
            </form>
        </div>
        </div>
<!-- </div> -->
<?php require_once('formFoot.php'); ?> 