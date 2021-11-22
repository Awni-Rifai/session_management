<?php
function sessionStart($lifetime,$path,$admin,$secure,$httpOnly){
    session_set_cookie_params($lifetime,$path,$admin,$secure,$httpOnly);
    session_start();
}
