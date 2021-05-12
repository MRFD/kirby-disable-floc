# Kirby 3 disable Google's FLoC

This plugin for [Kirby 3](https://getkirby.com) disables Google's FLoC automatically.

## Commerical Usage

This plugin is free but if you use it in a commercial project please consider to
- [Make a donation](https://paypal.me/mrfdnl/5) or
- [Buy me a coffee](https://buymeacoff.ee/mrfd)

## Requirements

-   PHP 7.3+
-   Kirby 3

## Installation

### Download

[Download](https://github.com/MRFD/kirby-disable-floc/archive/master.zip) and copy the files to `/site/plugins/kirby-disable-floc`.

### Git submodule

```bash
$ git submodule add https://github.com/MRFD/kirby-disable-floc.git site/plugins/kirby-disable-floc
```

### Composer

```bash
composer require MRFD/kirby-disable-floc
```

## Usage

After installing this plugin, the `Permissions-Policy` header is automatically added to every route by utilising Kirby's `route:before` hook. This ensures that FLoC is disabled.

### Options

| mrfd.kirby-disable-floc. | Default | Description                                    |
| ------------------------ | ------- | ---------------------------------------------- |
| enable                   | `true`  | enables or disables the plugin                 |
| replace                  | `true`  | replacing existing `Permissions-Policy` header |

## Disclaimer

This plugin is provided "as is" with no guarantee. Use it at your own risk and always test it yourself before using it in a production environment. If you find any issues, please [create a new issue](https://github.com/MRFD/kirby-disable-floc/issues/new).

## License

Kirby Disable FLoC is open-sourced software licensed under the [MIT](https://opensource.org/licenses/MIT) license.

Copyright © 2021 [Marijn Roovers](https://www.mrfd.nl)

## Credits

-   [Spatie's Laravel implementation](https://github.com/spatie/laravel-disable-floc/)
