A implementation of SR-1 using Nyholm's [implementation of PSR 7](https://github.com/Nyholm/psr7) as the base.


```sh
composer require psg/sr1-implementation
```


```php
$Factory = new \Psg\Sr1\Implementation\Factory\Sr1Factory;
$request = $Factory->createRequest('GET', 'http://tnyholm.se');
$request = $request->withBodyString('{"name":"bob"}');
```