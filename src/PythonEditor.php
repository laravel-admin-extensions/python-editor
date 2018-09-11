<?php

namespace Encore\PythonEditor;

use Encore\Admin\Extension;

class PythonEditor extends Extension
{
    public $name = 'python-editor';

    public $views = __DIR__.'/../resources/views';

    public $assets = __DIR__.'/../resources/assets';

    public $menu = [
        'title' => 'Pythoneditor',
        'path'  => 'python-editor',
        'icon'  => 'fa-gears',
    ];
}