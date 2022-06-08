<?php
    class SitioController
    {
        public static function index()
        {
            include '../views/layouts/app.php';
        }
        public static function header()
        {
            include '../views/partials/header.php';
        }
        public static function footer()
        {
            include '../views/partials/footer.php';
        }
        public static function login()
        {
            include '../views/login/login.php';
        }
    }
    




    