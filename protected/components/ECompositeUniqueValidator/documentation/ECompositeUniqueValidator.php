<?php
/**
 * Tags
 */
unique, composite, unique key, composite unique key, validator, unique validator

/**
 * Name
 */
composite-unique-validator

/**
 * Short Summary
 */
Validates that the combination of several attributes values (composite key) is unique in the given database table.

/**
 * Description
 */
ECompositeUniqueValidator validates that the combined values of the given attributes (composite key) is unique in the corresponding database table. 

It is a modification of the build in _CUniqueValidator_. All properties and methods of the _CUniqueValidator_ should also work with this validator.

##Requirements
Tested with Yii 1.1.9, should work with Yii 1.1 or above

##Usage

#### Files
Extract the zip file.<br>
Put everything under `ECompositeUniqueValidator/components` into your `protected/components` folder.<br>
Put everything under `ECompositeUniqueValidator/extensions` into your `protected/extensions` folder.<br>
Make sure that the extension is imported in your config file `protected/config/main.php`:
~~~
[php]
'import'=>array(
	...
	'ext.ECompositeUniqueValidator',
	// 'ext.*', // <---- this works too
),
~~~



####Example 1 (Basic)
In your model file:
~~~
[php]
public function rules()
{
	return array(
		array('book_id, tag', 'ECompositeUniqueValidator'),
		...
	);
}
~~~
This validates that each (book_id, tag) combination is unique in the corresponding database table. 

####Example 2
In your model file:
~~~
[php]
public function rules()
{
	return array(
		array('book_id, tag', 'ECompositeUniqueValidator', 
			'attributesToAddError'=>'tag',
			'message'=>'The tag {value_tag} already exists for this book.'),
		...
	);
}
~~~
The property `attributesToAddError` defines to which attribute(s) the error message should be added to, if a validation error occurrs. It should be a comma separated list of attributes. If not specified, the error will be added to the first attribute in the list of attributes.<br>
The placeholder `{value_tag}` will be replaced with the current value of the attribute `tag`.

##Documentation
####Placeholders
When using the [message](http://www.yiiframework.com/doc/api/1.1/CUniqueValidator#message-detail "message property") property 
to define a custom error message, the message
may contain additional placeholders that will be replaced with the actual content.
ECompositeUniqueValidator allows for the following placeholders to be specified:

- {attributes}: replaced with a comma separated list of the labels of the given attributes.
- {values}: replaced with a comma separated list of the current values of the given attributes.
- {value_"attr"}: replaced with the value of the given attribute named "attr", 
e.g. use {value_name} to get the value of the attribute 'name' (see Example 2 above).

####Properties
ECompositeUniqueValidator introduces two additional public properties:

- `attributesToAddError`: comma separated list of attributes, to which the error message should be added (see Example 2 above).
- `attributeNames`: replaces the property `attributesName` of the _CUniqueValidator_. Thus, it is a comma separated list of 
the ActiveRecord class attribute names that should be used to look for the attribute values being validated. 
Defaults to null, meaning using the names of the attributes being validated.

#### The Component
The abstract class [_CValidator_](http://www.yiiframework.com/doc/api/1.1/CValidator "abstract validator class") 
does not facilitate a combined validation of multiple attributes. Rather, each attribute is validated separately.
We circumvent this by extending the _CValidator_ and overriding its `validate()` function, 
which is where the attributes are separately sent to the validator (see class file `Validator.php` for details). <br>
The _Validator_ class introduces a new property: 

- `enableCombinedValidation`: If set to true, all attributes are sent to the validator at once. 
Defaults to null, meaning each attribute is validated separately (default behaviour).

The _ECompositeUniqueValidator_ is derived from _Validator_ and has `enableCombinedValidation` set to `true`; 
therefore all listed attributes are validated together.


##Resources

* [composite-unique-key-validatable](http://www.yiiframework.com/extension/composite-unique-key-validatable "composite-unique-key-validatable"): An extension, that also validates composite unique keys of AR-models, implemented as a behaviour. 
* [unique-attributes-validator](http://www.yiiframework.com/extension/unique-attributes-validator "unique-attributes-validator"): Another extension that validates unique constraints with more then one attribute.