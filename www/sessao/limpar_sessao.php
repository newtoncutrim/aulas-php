<?php
session_start();
session_destroy();
header('location: basaico_sessao.php');