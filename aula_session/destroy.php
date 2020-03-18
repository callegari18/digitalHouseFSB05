<?php

session_start();

// destroi somente o elemento logado da array de sessão
unset($_SESSION['logado']);

//session_destroy();