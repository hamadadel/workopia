<?php

define('DS', DIRECTORY_SEPARATOR);

function basePath($path = '')
{
    return __DIR__ . DS . str_replace('\\', DS, $path);
}

function loadView($path = '')
{
    if (str_contains($path, '.'))
        $path = str_replace('.', DS, $path);

    $view =  basePath('views' . DS . $path) . '.view.php';
    if (file_exists($view))
        return $view;
    echo '<p>view ' . $path . ' not found</p>';
}

function loadPartial($partialName = '')
{
    $partial = basePath('views' . DS . 'partials' . DS . $partialName . '.php');
    if (file_exists($partial))
        return $partial;
    echo '<p>Partial ' . $partialName . ' not found</p>';
}
