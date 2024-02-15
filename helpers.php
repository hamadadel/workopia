<?php

define('DS', DIRECTORY_SEPARATOR);

function basePath($path = '')
{
    return __DIR__ . DS . str_replace('\\', DS, $path);
}

function viewsPath($path = '')
{
    return basePath('views' . DS . $path);
}
