# 💜 laravel-notes

[![Build Status][ico-travis]][link-travis]
[![License][ico-license]][link-license]

Notes application based on Laravel.

## ⚡ Installation & Running

Via [GIT](https://git-scm.com/) & [Composer](https://getcomposer.org/)

```bash
$ git clone https://github.com/voyula/laravel-notes.git
$ cd laravel-notes
$ composer install
$ mv .env.example .env
$ vi .env
$ php artisan key:generate
$ php artisan migrate --force
$ php artisan serve
```

Your app should now be running on [http://localhost:8000/](http://localhost:8000/)

### 📜 Standards

- [PSR-1: Basic Coding Standard](https://www.php-fig.org/psr/psr-1/)
- [PSR-2: Coding Style Guide](https://www.php-fig.org/psr/psr-2/)
- [PSR-4: Autoloader](https://www.php-fig.org/psr/psr-4/)
- [Semantic Versioning 2.0.0](https://semver.org/)

### 🛠 Contributing

See [CONTRIBUTING](CONTRIBUTING.md) file for details.

### 🎙 Credits

- [voyula](https://github.com/voyula)
- [All Contributors](../../contributors)

### 📌 License

Licensed under the MIT License. See [License File](LICENSE.md) for more information.

[ico-travis]: https://img.shields.io/travis/voyula/websocket-chat/master.svg?longCache=true&style=flat-square

[ico-license]: https://img.shields.io/packagist/l/voyula/validate.svg?longCache=true&style=flat-square


[link-travis]: https://travis-ci.org/voyula/simple-chrome-extension

[link-license]: LICENSE.md
