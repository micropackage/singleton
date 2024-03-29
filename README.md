# Singleton

[![BracketSpace Micropackage](https://img.shields.io/badge/BracketSpace-Micropackage-brightgreen)](https://bracketspace.com)
[![Latest Stable Version](https://poser.pugx.org/micropackage/singleton/v/stable)](https://packagist.org/packages/micropackage/singleton)
[![PHP from Packagist](https://img.shields.io/packagist/php-v/micropackage/singleton.svg)](https://packagist.org/packages/micropackage/singleton)
[![Total Downloads](https://poser.pugx.org/micropackage/singleton/downloads)](https://packagist.org/packages/micropackage/singleton)
[![License](https://poser.pugx.org/micropackage/singleton/license)](https://packagist.org/packages/micropackage/singleton)

<p align="center">
    <img src="https://bracketspace.com/extras/micropackage/micropackage-small.png" alt="Micropackage logo"/>
</p>

## 💾 Installation

``` bash
composer require micropackage/singleton
```

## 🕹 Usage

```php
use Micropackage\Singleton\Singleton;

class Example extends Singleton {}

Example::get();
```

## 📦 About the Micropackage project

Micropackages - as the name suggests - are micro packages with a tiny bit of reusable code, helpful particularly in WordPress development.

The aim is to have multiple packages which can be put together to create something bigger by defining only the structure.

Micropackages are maintained by [BracketSpace](https://bracketspace.com).

## 📖 Changelog

[See the changelog file](./CHANGELOG.md).

## 📃 License

This software is released under MIT license. See the [LICENSE](./LICENSE) file for more information.
