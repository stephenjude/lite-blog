# Laravel Lite Blog

[![Latest Version on Packagist](https://img.shields.io/packagist/v/stephenjude/lite-blog.svg?)](https://packagist.org/packages/stephenjude/lite-blog)
[![Build Status](https://img.shields.io/travis/stephenjude/lite-blog/master.svg?)](https://travis-ci.org/stephenjude/lite-blog)
[![Quality Score](https://img.shields.io/scrutinizer/g/stephenjude/lite-blog.svg?)](https://scrutinizer-ci.com/g/stephenjude/lite-blog)
[![Total Downloads](https://img.shields.io/packagist/dt/stephenjude/lite-blog.svg?)](https://packagist.org/packages/stephenjude/lite-blog)

A Laravel Lite Blog. This a minimal full blog generator built with [tailwindcss](https://tailwindcss.com/) and [wink](https://github.com/writingink/wink). The frontend is a replicate of [jigsaw blog template](https://jigsaw.tighten.co/) and the editor is [wink](https://github.com/writingink/wink) a laravel publishing package by [Mohamed Said](https://github.com/themsaid). 


## Requirement
Laravel Lite blog make use of [Laravel 6](https://laravel.com/docs/6.x/installation#server-requirements), so make sure you have meet laravel 6 server [requirements](https://laravel.com/docs/6.x/installation#server-requirements).

## Installation

You can install the package via composer:

```bash
composer create-project --prefer-dist  stephenjude/lite-blog myblog
```

create your database and update your `.env` file
```bash
cd myblog

php artisan setup:blog
```

## Usage

Homepage - `myblog.test`

List Articles - `myblog.test/articles`

View Article - `myblog.test/articles/{slug}`

Editor - `myblog.test/editor`

Refresh Indexed Articles - `myblog.test/fresh` 

This route should be called after publishing a new post. I am still working on automating it.



### Security

If you discover any security related issues, please email stephen@deacons.online instead of using the issue tracker.


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.