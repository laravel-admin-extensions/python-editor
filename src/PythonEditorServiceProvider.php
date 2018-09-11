<?php

namespace Encore\PythonEditor;

use Encore\Admin\Admin;
use Encore\Admin\Form;
use Illuminate\Support\ServiceProvider;

class PythonEditorServiceProvider extends ServiceProvider
{
    /**
     * {@inheritdoc}
     */
    public function boot(PythonEditor $extension)
    {
        if (! PythonEditor::boot()) {
            return ;
        }

        Admin::booting(function () {
            Form::extend('python', Editor::class);
        });
    }
}