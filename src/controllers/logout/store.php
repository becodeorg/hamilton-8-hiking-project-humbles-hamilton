<?php
   function logout(): void
   {
       session_start();

       unset($_SESSION['users']);
       http_response_code(302);
       header('Location: /');
   }
   
   logout();