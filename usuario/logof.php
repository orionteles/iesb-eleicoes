<?php
session_start();

session_unset();    # Limpa as variáveis de sessão.
session_destroy();  # Destrói as variáveis de sessão.


header('location: login.php');
