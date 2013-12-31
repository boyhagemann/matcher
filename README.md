Matcher
=======

With Matcher you can match an object to specified rules and get data returned.


### Example usage
```php
// Add some rules
$matcher->whenProperty('title')->contains('Hi')->provide(['foo' => 'bar']);

// Get an object to match against
$object = Your\Object;
$object->title = 'Hi';

// Check if the object matches the rules
$data = $matcher->match($object); // Will return "array(array('foo' => 'bar'))"
```


Documentation will be updated with:
* Using tags
* Unique fields
* Match logic explained
* Match against multiple values
* Helpful scenarios when you can use this library
