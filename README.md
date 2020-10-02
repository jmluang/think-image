# The ThinkPHP5 Image Package

[![Downloads](https://img.shields.io/github/downloads/jmluang/think-image/total.svg)](https://github.com/jmluang/think-image/releases)
[![Releases](https://img.shields.io/github/release/jmluang/think-image.svg)](https://github.com/jmluang/think-image/releases/latest)
[![Packagist Status](https://img.shields.io/packagist/v/jmluang/think-image.svg)](https://packagist.org/packages/jmluang/think-image)
[![Packagist Downloads](https://img.shields.io/packagist/dt/jmluang/think-image.svg)](https://packagist.org/packages/jmluang/think-image)

## 安装

> composer require jmluang/think-image

## 使用

~~~
$image = \think\Image::open('./image.jpg');
或者
$image = \think\Image::open(request()->file('image'));


$image->crop(...)
    ->thumb(...)
    ->water(...)
    ->text(....)
    ->save(..);

~~~