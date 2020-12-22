<?php
switch (htmlspecialchars($_GET['page'] ?? "home")){
    case 'home':
        include "templates/".active_template."/pages/pagrindinis.view.php";
    break;
    case 'filmai':
        include "templates/".active_template."/pages/all.films.page.php";
    break;
    case 'visi':
        include "templates/".active_template."/pages/visi.view.php";
    break;
    default:
        include "templates/".active_template."/pages/error.view.php";
}