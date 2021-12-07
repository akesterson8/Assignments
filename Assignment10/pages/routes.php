<?php

$path = "index.php?page=login";

// function nav1(){
$nav=<<<HTML
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
// function nav2(){
// $nav2=<<<HTML
//     <nav>
//         <ul class="nav">
//             <li class="nav-item">
//                 <a class="nav-link" aria-current="page" href="index.php?page=welcome">Welcome</a>
//             </li>
//             <li class="nav-item">
//                 <a class="nav-link" href="index.php?page=addContact">Add Contact</a>
//             </li>
//             <li class="nav-item">
//                 <a class="nav-link" href="index.php?page=deleteContacts">Delete Contact(s)</a>
//             </li>
//             <li class="nav-item">
//                 <a class="nav-link" href="index.php?page=login">Logout</a>
//             </li>
  
//         </ul>


//     </nav>
// HTML;}
if(isset($_GET)){
     if($_GET['page'] === "login"){
         require_once('pages/login.php');
         $result = check();
    
    }
    else if($_GET['page'] === "addContact"){
        require_once('pages/addContact.php');
        $result = init();
    }
    
    else if($_GET['page'] === "deleteContacts"){
        require_once('pages/deleteContacts.php');
        $result = init();
    }
    else if($_GET['page'] === "addAdmin"){
        require_once('pages/addAdmin.php');
        $result = init();
    }
    else if($_GET['page'] === "deleteAdmin"){
        require_once('pages/deleteAdmin.php');
        $result = init();
    }

    else if($_GET['page'] === "welcome"){
        require_once('pages/welcome.php');
        $result = init();
        //checking for admin
         // if($_POST['status'] === "admin"){
                //     //then go to admin welcome with admin privelages
               // $_SESSION['name'] = $_POST['name'];
                // }elseif($_POST['status'] === "staff"){
                //     //then go to staff welcome with staff privelages
                // $_SESSION['name'] = $_POST['name'];
                // }
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

//     if(isset($_POST['submit'])){
    //         $pdo = new PdoMethods();
          
    //           /* HERE I CREATE THE SQL STATEMENT I AM BINDING THE PARAMETERS */
    //           $sql = "SELECT * FROM admins WHERE email = $_POST['email'] AND password = $_POST['password']";
    //           $records = $pdo->selectNotBinded($sql);
    //           if($_POST['email'] === "email" && $_POST['password'] === "password"){
    
    //             session_start();
    //             $_SESSION['access'] = "accessGranted";
            
    //             header('location:pages/welcome.php');
    //           }
    //           else {
    //             return "Incorrect username or password";
    //           }
    // }

?>