<?php
/**
 * Created by PhpStorm.
 * User: Jhoseph Arango
 * Date: 22/10/2015
 * Time: 23:39
 */
session_start();
session_destroy();
header("Location:/LoginPHP/index.php");
