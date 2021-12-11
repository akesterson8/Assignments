<?php

$path = "index.php?page=login";
$nav="";
// function nav1(){
$adminnav=<<<HTML
    <nav>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php?page=welcome">Welcome</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=addContact">Add Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=deleteContacts">Delete Contact(s)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=addAdmin">Add Admin</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=deleteAdmin">Delete Admin(s)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=login">Logout</a>
            </li>
  
        </ul>


    </nav>
HTML;

$staffnav=<<<HTML
    <nav>
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="index.php?page=welcome">Welcome</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=addContact">Add Contact</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=deleteContacts">Delete Contact(s)</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.php?page=login">Logout</a>
            </li>
  
        </ul>


    </nav>
HTML;

function security(){
 session_start();
 global $nav, $staffnav, $adminnav;
 if($_SESSION['access']!='accessgranted'){
     header('location:logout.php'); 
     //header('location : index.php?page=login');
     exit;
 }elseif($_SESSION['status']== 'admin'){
     $nav = $adminnav;
 }elseif($_SESSION['status']=='staff'){
    $nav = $staffnav;
 }
}
 function admin(){
  if($_SESSION['status'] != 'admin'){
    header('location: logout.php');
    //header('location : index.php?page=login');
    exit;
  }
}




if(isset($_GET)){
     if($_GET['page'] === "login"){
         require_once('pages/login.php');
         $result = init();
         $nav="";
    
    }
    else if($_GET['page'] === "addContact"){
        require_once('pages/addContact.php');
        security();
        $result = init();
    }
    
    else if($_GET['page'] === "deleteContacts"){
        require_once('pages/deleteContacts.php');
        security();
        $result = init();
    }
    else if($_GET['page'] === "addAdmin"){
        require_once('pages/addAdmin.php');
        security();
        admin();
        $result = init();
    }
    else if($_GET['page'] === "deleteAdmin"){
        require_once('pages/deleteAdmin.php');
        security();
        admin();
        $result = init();
    }

    else if($_GET['page'] === "welcome"){
        require_once('pages/welcome.php');
        security();
        $result = init($_SESSION['name']);
        
    }
    else if($_GET['page'] === "logout"){
        require_once('pages/logout.php');
        session_destroy();
        $result = header('Location: index.php?page=login');
        
    }

    else {
        //header('Location: http://russet.php?page=form');
        header('location: '.$path);
    }
}

else {
    //header('Location: http://198.199.80.235/cps276/cps276_assignments/assignment10_final_project/solution/index.php?page=form');
    header('location: '.$path);
}


?>