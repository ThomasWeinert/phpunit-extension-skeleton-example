# PHPUnit Extension Skeleton Example

This a small example for a [PHPUnit](https://phpunit.de/) extension using the 
[skeleton](https://github.com/ThomasWeinert/phpunit-extension-skeleton).

## Requirements

* [Composer](https://getcomposer.org/)
* [Phive](https://phar.io/)

## Setup

After checkout you will need to install the tools and dependencies. Phive is used for the 
tools and Composer for the dependencies.

```
phive install
composer install
```

A Phing build file is included. More information about the targets can be found on
the [skeleton repository page](https://github.com/ThomasWeinert/phpunit-extension-skeleton).

## HelloWorld

The repository implements a Constraint class and two traits that can be used to add the
functions to you test case.

### Assertion

```php
class ExampleTestCase extends \PHPUnit\Framework\TestCase 
{
    use \ThomasWeinert\PHPUnitExtensionExample\Assert;
     
    public function testStringMatchesHelloWorld() {
        $this->assertHelloWorld('Hello World!');
    }
}
```

### Constraint

```php
class ExampleTestCase extends \PHPUnit\Framework\TestCase 
{
    use \ThomasWeinert\PHPUnitExtensionExample\Contraint;
     
    public function testStringMatchesHelloWorld() {
        $this->assertThat('Hello World!', $this->equalsHelloWorld());
    }
     
    public function testAssertMethodCalledWithHelloWorld():void
    {
        $mock = $this
            ->getMockBuilder(\stdClass::class)
            ->setMethods(['greet'])
            ->getMock();
        $mock
            ->expects($this->once())
            ->method('greet')
            ->with($this->equalsHelloWorld());

        $mock->greet('Hello World!');
    }
}
```





