CakePHP-Bootstrap3
==================

A CakePHP 3 Form Helper template for use with Twitter Bootstrap 3. This was built for the CakePHP 3 Beta 2. Updates in the Beta 3 means this might not give unexpected results until updated. See [/issues/1](https://github.com/davidyell/CakePHP3-Bootstrap3/issues/1)

**Deprecated**  
I've decided to discontinue development on this project for a number of reasons. The first is that the way helper templates works has changed and the second was that this approach isn't a complete solution for the implementation of Bootstrap into CakePHP3.

Why not check out one of the existing projects? [https://github.com/Holt59/cakephp3-bootstrap3-helpers](https://github.com/Holt59/cakephp3-bootstrap3-helpers)

#Requirements
* CakePHP 3 beta 2

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

#Gotchas
* **Checkboxes:** be sure to use `$this->Form->input('field', ['type' => 'checkbox', 'label' => 'My field']);`
* **Radios:** be sure to use `$this->Form->input('field', ['type' => 'radio', 'options' => $options]);`

#Done
That's it. Now when you look at the forms in your application they should all be styled like Twitter Bootstrap 3.

#Contribution
http://book.cakephp.org/3.0/en/views/helpers/form.html#customizing-the-templates-formhelper-uses
http://getbootstrap.com/css/#forms
