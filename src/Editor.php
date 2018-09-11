<?php

namespace Encore\PythonEditor;

use Encore\Admin\Form\Field;
use Jxlwqq\CodeMirror\CodeMirror;

class Editor extends Field
{
    /**
     * {@inheritdoc}
     */
    protected $view = 'laravel-admin-code-mirror::editor';

    /**
     * {@inheritdoc}
     */
    protected static $css = [
        CodeMirror::ASSETS_PATH.'lib/codemirror.css',
    ];

    /**
     * {@inheritdoc}
     */
    protected static $js = [
        CodeMirror::ASSETS_PATH.'lib/codemirror.js',
        CodeMirror::ASSETS_PATH.'addon/edit/matchbrackets.js',
        CodeMirror::ASSETS_PATH.'mode/python/python.js',
    ];

    protected $version = 3;

    /**
     * Set editor height.
     *
     * @param int $height
     * @return $this
     */
    public function height($height = 10)
    {
        return $this->addVariables(compact('height'));
    }

    /**
     * Set python version.
     *
     * @param int $version
     * @return $this
     */
    public function version($version = 3)
    {
        $this->version = $version;

        return $this;
    }

    /**
     * {@inheritdoc}
     */
    public function render()
    {
        $options = array_merge(
            [
                'mode' => [
                    'name' => 'python',
                    'version' => $this->version,
                    'singleLineStringErrors' => false,
                ],
                'lineNumbers' => true,
                'matchBrackets' => true,
                'indentUnit' => 4,
            ],
            PythonEditor::config('config', [])
        );

        $options = json_encode($options);

        $this->script = <<<EOT
CodeMirror.fromTextArea(document.getElementById("{$this->id}"), $options);
EOT;

        return parent::render();
    }
}