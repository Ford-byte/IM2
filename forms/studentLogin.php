<?php include_once("formHead.php"); ?>

<section>

    <div class="form justify-content-center p-2 m-4">
        <div class="title">
            STUDENT LOGIN
        </div>
        <div class="container justify-content-center p-2 m-4">
            <form action="" method="POST" class="form">
                <label for="username" class="form-label">USERNAME : </label>
                <input type="text" class="form-control" name="username">
                <label for="password" class="form-label">PASSWORD : </label>
                <input type="text" class="form-control" name="password">
                <input type="submit" class="btn btn-secondary" name="studentLogin" value="LOGIN">
            </form>
        </div>
    </div>

</section>

<?php include_once("formFoot.php"); ?>