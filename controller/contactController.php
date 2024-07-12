<?php 


function checkIfFormIsValid($request) {
    if ( 
        isset($request['name']) &&
        !empty(trim(($request['name']))) && 
        !empty(trim(($request['email']))) && 
        !empty(trim(($request['message']))) &&

        preg_match("/^[a-zA-Z0-9.%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/", $request['email'])

     ) {
        return true;
     } else {
        return false;
     }
}

