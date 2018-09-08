# PHPUnit Extension Skeleton Example

This a small example for a [PHPUnit](https://phpunit.de/) extension using the 
[skeleton]().

## Requirements

* [Composer](https://getcomposer.org/)
* [Phive](https://phar.io/)

## Build Targets

The repository includes a [Phing](https://www.phing.info/) build file. Phive installs
Phing and the other tools into the `tools/` subdirectory. 

### build

```
$ tools/phing build
```

Create a Phar package for the extension.

### clean

```
$ tools/phing clean
```

Delete build artifacts.

### package

```
$ tools/phing package
```

Create a Phar package for the extension and sign it using GPG.

### reformat

```
$ tools/phing reformat
```

Uses the [PHP Coding Standards Fixer](https://cs.sensiolabs.org/) to reformat the 
source code according the PHPUnit coding standard. 

### test

```
$ tools/phing test
```

Run unit tests.





