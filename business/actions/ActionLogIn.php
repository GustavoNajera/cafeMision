<?php
    include_once '../../business/SessionBusiness.php';
    (new SessionBusiness())->logIn($_POST["user"], $_POST["password"]);