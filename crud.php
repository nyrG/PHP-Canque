<?php
    include 'functions.php';
    if (isset($_POST['submit'])) {
        $menu_name = trim($_POST['menuName']);
        $menu_desc = trim($_POST['menuDesc']);
        add_data($menu_name, $menu_desc);
    }

    if (isset($_POST['edit'])) {
        $id = trim($_POST['id']);
        $menu_name = trim($_POST['menuName']);
        $menu_desc = trim($_POST['menuDesc']);

        update_data($menu_name, $menu_desc, $id);
    }

    if (isset($_POST['delete'])) {
        $id = trim($_POST['delete']);
        delete_data($id);
    }
?>