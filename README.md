Python editor extension for laravel-admin based on code-mirror
======

[DEMO](http://demo.laravel-admin.org/code-mirror/python) (Login using `admin/admin`)

## Installation 

```bash
composer require laravel-admin-ext/python-editor

php artisan vendor:publish --tag=laravel-admin-code-mirror
```

## Configuration

In the `extensions` section of the `config/admin.php` file, add some configuration that belongs to this extension.
```php

    'extensions' => [

        'python-editor' => [
        
            //Set to false if you want to disable this extension
            'enable' => true,
            
            // Editor configuration
            'config' => [
                
            ]
        ]
    ]

```

The configuration of the editor can be found in [CodeMirror Documentation](https://codemirror.net/)

## Usage

Use it in the form:
```php
$form->python('code');
```

Set height
```php
$form->python('code')->height(500);

// Set python version，defaults t 3
$form->python('code')->version(2);
```

## Donate

> Help keeping the project development going, by donating a little. Thanks in advance.

[![PayPal Me](https://img.shields.io/badge/Donate-PayPal-green.svg)](https://www.paypal.me/zousong)

![-1](https://cloud.githubusercontent.com/assets/1479100/23287423/45c68202-fa78-11e6-8125-3e365101a313.jpg)

License
------------
Licensed under [The MIT License (MIT)](LICENSE).
