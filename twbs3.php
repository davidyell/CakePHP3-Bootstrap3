<?php
/**
 * Collection of CakePHP3 Form Templates for use with Twitter Bootstrap 3
 *
 * User: David Yell <neon1024@gmail.com>
 * Date: 21/10/2014
 * Time: 16:40
 */
$config = [
	'button' => '<button{{attrs}} class="btn btn-default">{{text}}</button>',
	'checkbox' => '',
	'checkboxFormGroup' => '<label><input type="checkbox" name="{{name}}" value="{{value}}"{{attrs}}> {{label}}</label>',
	'checkboxWrapper' => '<div class="checkbox">{{input}}{{label}}</div>',
	'dateWidget' => '{{year}}{{month}}{{day}}{{hour}}{{minute}}{{second}}{{meridian}}',
	'error' => '<div class="error-message">{{content}}</div>',
	'errorList' => '<ul>{{content}}</ul>',
	'errorItem' => '<li>{{text}}</li>',
	'file' => '<input type="file" name="{{name}}"{{attrs}}>',
	'fieldset' => '<fieldset>{{content}}</fieldset>',
	'formstart' => '<form{{attrs}}>',
	'formend' => '</form>',
	'formGroup' => '{{label}}{{input}}',
	'hiddenblock' => '<div style="display:none;">{{content}}</div>',
	'input' => '<input class="form-control" type="{{type}}" name="{{name}}"{{attrs}}>',
	'inputsubmit' => '<input type="{{type}}"{{attrs}}>',
	'inputContainer' => '<div class="form-group {{type}}{{required}}">{{content}}</div>',
	'inputContainerError' => '<div class="form-group {{type}}{{required}} has-error">{{content}}{{error}}</div>',
	'label' => '{{text}}',
	'legend' => '<legend>{{text}}</legend>',
	'option' => '<option value="{{value}}"{{attrs}}>{{text}}</option>',
	'optgroup' => '<optgroup label="{{label}}"{{attrs}}>{{content}}</optgroup>',
	'select' => '<select class="form-control" name="{{name}}"{{attrs}}>{{content}}</select>',
	'selectMultiple' => '<select class="form-control" name="{{name}}[]" multiple="multiple"{{attrs}}>{{content}}</select>',
	'radio' => '',
	'radioWrapper' => '<div class="radio"><label><input type="radio" name="{{name}}" value="{{value}}"{{attrs}}> {{label}}</label></div>',
	'textarea' => '<textarea class="form-control" name="{{name}}"{{attrs}}>{{value}}</textarea>',
	'submitContainer' => '<div class="submit">{{content}}</div>',
];