<?php


class View
{
    public function render($page, $pageData) {
        $path = SITE_PATH . 'layout' . DIRSEP . $page . '.phtml';
        include $path;
    }
}