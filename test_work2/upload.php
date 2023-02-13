<?php

session_start();

?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>




<form class="form-inline m-4" method="get" action="click.php">
    <div class="form-group mb-2">
        <label for="exampleFormControlFile1">Example file input</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="file">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Confirm identity</button>
</form>

<!--<div class="alert alert-primary" role="alert">
    This is a primary alert—check it out!
</div>-->

<?php

if (count($_SESSION)>0) {
    echo $_SESSION['massege'];
    session_destroy();
}
?>


