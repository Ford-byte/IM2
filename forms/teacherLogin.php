<?php require_once('formHead.php'); ?> 
<div>
    <section class="form">
        <div class="row justify-content-center p-2 m-4">
            <div class="title font-weight-bold">
                Teacher's Login Page
            </div>
            <div class="col-lg-6">
                <form action="" method="POST" class="form">
                    <label for="firtname" class="form-label">
                        USERNAME:
                    </label>
                    <input type="text" class="form-control" name="uname">
                    <label for="" class="form-label">
                        PASSWORD:
                    </label>
                    <input type="password" class="form-control" name="pass">
                    <button class="btn btn-secondary p-2 m-4" name="TeacherLogin" value="submit">SUBMIT</button>
                </form>
            </div>
        </div>
    </section>
</div>
<?php require_once('formFoot.php'); ?> 