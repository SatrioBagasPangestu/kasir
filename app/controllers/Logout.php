<?php
class Logout extends Controller
{
    public function index()
    {
        $_SESSION = [];
        session_unset();
        session_destroy();
        header('location: '.BASEURL.'/login');
    }
}