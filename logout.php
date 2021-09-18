<?php
session_start();
if(session_destroy())    //destroying all sessions
{
    header("location: society.html");
}
?>