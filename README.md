# Lite Blog - A Laravel Blog Generator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/stephenjude/lite-blog.svg)](https://packagist.org/packages/stephenjude/lite-blog)
[![Build Status](https://img.shields.io/travis/stephenjude/lite-blog/master.svg)](https://travis-ci.org/stephenjude/lite-blog)
[![Quality Score](https://img.shields.io/scrutinizer/g/stephenjude/lite-blog.svg)](https://scrutinizer-ci.com/g/stephenjude/lite-blog)
[![Total Downloads](https://img.shields.io/packagist/dt/stephenjude/lite-blog.svg)](https://packagist.org/packages/stephenjude/lite-blog)

Lite Blog  a minimal full (frontend & backend) blog generator built with [tailwindcss](https://tailwindcss.com/) and [wink](https://github.com/themsaid/wink) a laravel publishing platform by [Mohamed Said](https://github.com/themsaid). The frontend is a replicate of [jigsaw blog template](https://jigsaw.tighten.co/). 

I made a blog post on how to get started. [Check it here](http://stephenjude.me/articles/lite-blog-a-laravel-blog-generator).

<p align="center">
  <img src="https://ucarecdn.com/a571a7d3-c4d5-400d-8805-c1b6e2e5afc0/homepage.PNG">
</p>

## Requirement

Lite Blog make use of [Laravel 7](https://laravel.com/docs/7.x/installation#server-requirements), so make sure you have meet Laravel 6 server [requirements](https://laravel.com/docs/7.x/installation#server-requirements).

Requires  >= PHP 7.3

## Installation

You can install the Lite Blog via composer create-project

```bash
composer create-project --prefer-dist  stephenjude/lite-blog myblog
```

```bash
cd myblog
```

Create your database and update your `.env` file. Make sure you update you `APP_URL`. Here is an example: 
```
APP_URL=http://myblog.test
```

Setup your blog.

```bash
php artisan setup:blog
```

Start the local development server
```
php artisan serve
```
## Configs

### Site Config
Update site details in the `config/services.php` file.
```
'meta' => [
    'site_name' => 'My Perosnal Blog',
    'mantra' => 'Web & Mobile Developer',      
],
```

### Social Profile Links
Update site social profile link in the `config/services.php` file.
```
'social' => [
    'linkedin' => 'https://www.linkedin.com/in/username/',
    'email' => 'mailto:mail@gmail.com',
    'medium' => 'https://medium.com/@username',
    'github' => 'https://github.com/username',
    'twitter' => 'https://twitter.com/username',
    'atom' => '#',
],
```

### Unsplash Integration
To use unsplash images add this to your `.env` file
```
UNSPLASH_ACCESS_KEY=xxxxxxxxxxxxx
```

### Usage

|Routes|Url|
|:------------- | :---------- |
|Homepage|`myblog.test`|
|List Articles|`myblog.test/articles`|
|View Published Article|`myblog.test/articles/{slug}`|
|View Draft Article|`myblog.test/draft/{slug}/preview`|
|Editor (Publishing Platform)|`myblog.test/editor`|
|Refresh Indexed Articles|`myblog.test/fresh`|


### Compiling assets (Optional)
```bash 
npm install

npm run dev
```

### Screenshots

About
<p align="center">
  <img src="https://ucarecdn.com/8bcc5dc2-dbab-4e55-b144-1ec5d13ee6a9/about.PNG">
</p>

Newsletter
<p align="center">
  <img src="https://ucarecdn.com/2ea5aca3-1664-4c51-8f7f-689a9221011e/footer.PNG">
</p>

Publishing Platform (Wink)
<p align="center">
  <img src="https://ucarecdn.com/94f0f4d8-4cfd-42df-a5a5-565b43256884/editor.PNG">
</p>


### Security

If you discover any security related issues, please email stephen@deacons.online instead of using the issue tracker.


## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
