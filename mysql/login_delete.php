<?php
include "db.php";
include "functions.php";
include "includes/header.php";
include "includes/footer.php";
?>

<?php
if (isset($_POST['submit'])) {
    deleteRow();
}
?>

<div class="container">
    <div class="col-sm-6">
        <h1 class="text-center">Delete</h1>
        <form action="login_delete.php" method="post">
            <div class="form-group">
                <select name="id" id="">
                    <?php showAllData(); ?>
                </select>
            </div>
            <input class="btn btn-primary" type="submit" name="submit" value="DELETE USER">
        </form>
    </div>
</div>