CakePHP-Bootstrap3
==================

A CakePHP 3 Form Helper template for use with Twitter Bootstrap 3.

#Installation
You need to put the `twbs3.php` file into your `config` folder. `config/twbs3.php`

#Setup
When you are including your helpers you need to tell the helper to use the `twbs3.php` file.

```php
// src/Controller/AppController.php

public $helpers = [
  'Form' => [
    'templates' => 'twbs3.php'
  ]
];

//etc
```

#Done
That's it. Now when you look at the forms in your application they should all be styled like Twitter Bootstrap 3.
