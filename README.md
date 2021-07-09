
See [Nyholm/psr7](https://github.com/Nyholm/psr7)


In porting Nyholm/psr7, some issues came up:
1. can't extend an interface and overwrite a method with a method taking an extended interface type:
```php
interface x{
	public function bob();
}
interface y extends x{
	public function bill();
}


interface bob{
	public function process(x $bob);
}
interface sue extends bob{
	public function process(y $bob);
}
```
2.	But I can extend with different return values
```php
interface x{
	public function bob();
}
interface y extends x{
	public function bill();
}


interface bob{
	public function process(x $bob): x;
}
interface sue extends bob{
	public function process(x $bob): y;
}
```
3. same case with `implement`.  As such, original Psr interfaces are used where necessary.
4. since PHP does not offer the ability to have a static and non-static method of the same name, Stream::create, which interferes with the new interface, has become Stream::defaultCreate.  Here, the concept is, the static version of create will use a default configuration for stream creation.
5. tests written for Response to accept status string, but status typed as int in __construct.  Remove int type declaration.
6. error occurs in phpunit tests on tests/UploadedFileTest.php cleanup when \file_exists encounters non-string.  Conformed input to string.
