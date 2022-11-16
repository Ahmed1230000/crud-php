<?php
    if(isset($_SESSION['message'])):
?>

<div class="alert alert-secondary" role="alert">
        <strong>Hay!</strong> <?= $_SESSION['message'];?>
        <button type="button" class="btn btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>

<?php 
    unset($_SESSION['message']);
    endif ;
?>