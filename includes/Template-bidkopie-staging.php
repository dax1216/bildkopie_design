<?php
function siteInfo($name = NULL) {
    $path = explode('/', $_SERVER['REQUEST_URI']);
    $template_url = 'template_url';
    $url = 'url';
    if (isset($name)) {
        if ($name == $template_url) {
            $path = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $path[1] . '/backend_photographer/assets/';
            echo $path;
        } elseif ($name == $url) {
            $path = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $path[1];
            echo $path;
        }
    }
}

function tplDir($name = NULL) {
    $path = explode('/', $_SERVER['REQUEST_URI']);
    if (isset($name)) {
        $path = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $path[1] . '/backend_photographer/template-files/' . $name;
    } else {
        $path = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $path[1] . '/backend_photographer/template-files/';
    }
    return $path;
}

function imgUrl($name = NULL) {
    $path = explode('/', $_SERVER['REQUEST_URI']);
    if (isset($name)) {
        $path = 'http://' . $_SERVER['HTTP_HOST'] . '/' . $path[1] . '/assets/images/' . $name;
        echo $path;
    }
}

function get_header($name = NULL) {
    $dir = explode('/', tplDir());

    $root = $_SERVER['DOCUMENT_ROOT'];
    

    

    if (isset($name)) {
        $root = $_SERVER['DOCUMENT_ROOT'];
        $file = $root . '/' . $dir[3] . '/' . $dir[4] .  $dir[5] .'/' . 'header-' . $name . '.php';

        $dir = explode('/', tplDir());
        if (file_exists($file)) {
            // echo $path = 'http://localhost/real-estate/' . $dir[4] . '/header-'.$name.'.php';
            include $dir[5] . '/header-' . $name . '.php';
        } else {
            include $dir[5] . '/header.php';
        }
        //$dir = tplDir();
        //$dir = explode('/', $dir);
        //return $path = 'http://localhost/real-estate/' . $dir[4] . '/header-'.$name.'.php';
    } else {
        $dir = tplDir('header.php');
        $dir = explode('/', $dir);

        

        include_once '../' . $dir[4] . '/' . $dir[5] . '/' . $dir[6];
    }
}

function get_template_part($name = NULL) {
    $dir = explode('/', tplDir());
    if (isset($name)) {
        $root = $_SERVER['DOCUMENT_ROOT'];
 

        $file = $root . '/' . $dir[3] . '/' . $dir[4] . '/' . $dir[5] .'/'. 'content-' . $name . '.php';

        $dir = explode('/', tplDir());
        if (file_exists($file)) {
            include $dir[4] .'/'. $dir[5] . '/content-' . $name . '.php';
        } else {
            include $dir[4] . '/content.php';
        }
    } else {
        $dir = tplDir('content.php');
        $dir = explode('/', $dir);
        include_once '/' . $dir[4] . '/' . $dir[5];
    }
}

function get_sidebar($name = NULL) {
    $dir = explode('/', tplDir());
    if (isset($name)) {
        $root = $_SERVER['DOCUMENT_ROOT'];
        $file = $root . '/' . $dir[3] . '/' . $dir[4] . '/' . 'sidebar-' . $name . '.php';
        $dir = explode('/', tplDir());
        if (file_exists($file)) {
            include $dir[4] . '/sidebar-' . $name . '.php';
        } else {
            include $dir[4] . '/sidebar.php';
        }
    } else {
        $dir = tplDir('sidebar.php');
        $dir = explode('/', $dir);
        include_once '../' . $dir[4]. '/'. $dir[5] . '/' . $dir[6];
    }
}

function get_footer($name = NULL) {
    $dir = explode('/', tplDir());
    if (isset($name)) {
        $root = $_SERVER['DOCUMENT_ROOT'];
        $file = $root . '/' . $dir[3] . '/' . $dir[4] .'/'. $dir[5] . '/' . 'footer-' . $name . '.php';
        $dir = explode('/', tplDir());


        if (file_exists($file)) {
            include_once '../'. $dir[4] .'/'. $dir[5]. '/footer-' . $name . '.php';
        } else {
            include $dir[4] . '/footer.php';
        }
    } else {
        $dir = tplDir('footer.php');
        $dir = explode('/', $dir);
        include_once '../' . $dir[4] . '/' . $dir[5] . '/' . $dir[6];;
    }
}

function get_uri_name() {
    $uri = $_SERVER['REQUEST_URI'];
    return explode('/', str_replace('?', '', str_replace('=', '/', $uri)));
}

function is_inner_page() {
    $name = get_uri_name();
    if (isset($name[2]))
        $key = $name[2];
    if (isset($name[3]))
        $val = $name[3];
    if (isset($key) && isset($val)) {
        return array('name' => $key, 'value' => $val);
    }
}

?>
