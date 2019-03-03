<?


/* Bakaev O. Wordpress custom dev */

// формирует массив URI
$bUriArray = explode('/', $_SERVER['REQUEST_URI']);
array_shift($bUriArray);

// основные настройки
$bDataArray = array(
    "BLOCKS"=>array(
        "PROJECTS"=>"48",    // проекты
        "TECHNOLOGY"=>"97",  // технология
        "PARTNERS"=>"243",   // технология наши клиенты
        "DOCUMENTS"=>"100",  // документы
        "NEWS"=>"104",       // новости
        "PERSONAL"=>"130",   // персонал
        "OFFICES"=>"94"     // филиалы
    ),
    "URI_ARRAY"=>$bUriArray,
    "NAV_ARRAY"=>array(
        array(
            "title"=>"Главная",
            "href"=>"/"
        ),
        array(
            "title"=>"Наши проекты",
            "href"=>"/projects/"
        ),
        array(
            "title"=>"Технология",
            "href"=>"/technology/"
        ),
        array(
            "title"=>"Документы",
            "href"=>"/documents/"
        ),
        array(
            "title"=>"Новости",
            "href"=>"/news/"
        ),
        array(
            "title"=>"Контакты",
            "href"=>"/contacts/"
        )
    )
);

define("B_DATA_ARRAY", $bDataArray);

function edit_admin_menus(){
    global $menu;

    $menu[25][0] = 'Обратаня связь';

    remove_submenu_page('edit.php','edit-tags.php?taxonomy=category');
    remove_submenu_page('edit.php','edit-tags.php?taxonomy=post_tag');

    remove_menu_page('index.php');
    remove_menu_page('edit.php');
    remove_menu_page('upload.php');
    remove_menu_page('themes.php');
    remove_menu_page('plugins.php');
    remove_menu_page('users.php');
    remove_menu_page('tools.php');
    remove_menu_page('edit.php?post_type=acf-field-group');

    return true;
}



function edit_admin_custom() {
    echo '<style>';
    echo '#wp-admin-bar-updates {display:none !important;}'; // hide updates
    echo '#adminmenu .wp-submenu.wp-submenu-wrap {display:none !important;}'; // hide sub menu
    echo '</style>';
}

add_action('admin_menu','edit_admin_menus');
add_action('admin_head', 'edit_admin_custom');


// показывает ID всех страниц для набора в массив
function bDefinePagesData(){
    $t = "";
    $pages = get_pages();
    foreach ( $pages as $page ) {
        $t .= '<div>Title: ' . $page->post_title . ', ID: ' . $page->ID . '</div>';
    }
    return $t;
}

// отдаёт переменную в header,footer
function bCustomState(){
    global $bCustomState;
    return $bCustomState;
};

add_image_size('extra-1600', 1600, 1600);
?>