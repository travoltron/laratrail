# laratrail

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Total Downloads][ico-downloads]][link-downloads]

Laravel has a brilliant handler for exceptions and reporting, and the Monolog implementation is second to none. 

Now, we'll get it piping logs to [Papertrail!](https://papertrailapp.com/?thank=221c03)

Other implementations have you editing your rsyslog.conf file, but that's not always an option of you can't SSH into the server, plus, it turns on the firehose of things that aren't necessarily related to your app.

## Installation

![Instruction GIF](https://media.giphy.com/media/3oKIPyZoo00a5oRD6U/giphy.gif)

First, add the `Travoltron\Laratrail\LaratrailServiceProvider::class,` to `config/app.php` and you're all set. 

Second, call `php artisan vendor:migrate` to publish the config file. 

End of the gif, I highlighted a url that was in the format of `logsX.papertrailapp.com:XXXXX`


Finally, you'll need these to add to your .env file:

* `PAPERTRAIL_DOMAIN` to logsX.papertrailapp.com, replacing X with what returns when you add a log destination. Leave off the port and colon.
* `PAPERTRAIL_PORT` to the port of your log destination (that's the part after, but not including `:`).


Thats all.


For further instructions on logging see the [official documentation](https://laravel.com/docs/5.4/errors#logging)

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email ben@travoltron.com instead of using the issue tracker.

## Credits

- [Ben Warburton][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/travoltron/laratrail.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/travoltron/laratrail.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/travoltron/laratrail

[link-downloads]: https://packagist.org/packages/travoltron/laratrail
[link-author]: https://github.com/travoltron
[link-contributors]: ../../contributors
