<?php

session_start();

//Destroi somente o elemento da array de sessão
unset($_SESSION['logado']);

session_destroy();