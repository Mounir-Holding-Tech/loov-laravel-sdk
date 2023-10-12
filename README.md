<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Introduction
Loov Solutions is an online payment tools.

## Installation
Run this in your terminal to install loov fro comand line

composer require loov/laravel-sdk

## Requirements
<ul>
<li><b>amount</b>: The payment amount in the specified currency.</li>
<li><b>currency</b>: The currency code of the payment amount.</li>
<li><b>payment_mode</b>: The chosen payment mode. value: <b>ALL<b>, <b>CARD<b>, <b>MOBILE_MONEY<b>.</li>
<li><b>return_url</b>: URL to redirect after successful payment.</li>
<li><b>cancel_url</b>: URL to redirect if payment is canceled.</li>
<li><b>callback_url</b>: URL for payment notifications (webhook).</li>
<li><b>description</b>: Description of the payment purpose.</li>
<li><b>username</b>: Customer name.</li>
<li><b>email</b>: Customer email.</li>
<li><b>operator</b>: The mobile operator code used for the payment (e.g., "orange-money-cm")</li>
<li><b>phoneNumber</b>: Customer phone number.</li>
</ul>

## Pay In 
<?php
namespace App\Htpp\Controllers;
use LoovLaravelSdk\LoovService; 

class payment extends Controller{
     $data =[
        'amount' =>50000,
        'currency' => 'XAF',
        'payment_mode' => 'CARD',
        "return_url" => "https://google.com?state=return_url",
        "cancel_url" => "https://google.com?state=cancel",
        "callback_url" => "https://webhook.site/9c647add-6b43-4832-bd5d-db529c7c9b79",
        "description" => "test payment de service en ligne",
        "username" => "Arolle Fona",
        "email" =>"arollefona11@gmail.com",
        "phoneNumber" => "237699009999"
     ];
     $response = (new LoovService())->setKeys(AppKey MerchantKey)->payIn($data);
}

<h1>Success Response</h1>
<p>Upon successful payment initiation, the API will respond with a status code of 200 along with the following response body:</p>
{
    "status": 200,
    "message": "Payment initiated",
    "payment_url": "https://api.secure.payment.loov-solutions.com/payinit/oa7DZzEd8gwJ5PYQ",
    "reference": "LOC8SXoZuDVEvu1ODxs"
}

## Mobile SoftPay 
<?php
namespace App\Htpp\Controllers;
use LoovLaravelSdk\LoovService; 

class payment extends Controller{
     $data =[
        'amount' =>50000,
        'operator' => 'XAF',
        "callback_url" => "https://webhook.site/9c647add-6b43-4832-bd5d-db529c7c9b79",
        "username" => "Arolle Fona",
        "email" =>"arollefona11@gmail.com",
        "phoneNumber" => "237699009999"
     ];
     $response = (new LoovService())->setKeys(AppKey MerchantKey)->mobileSoftPay($data);
}

<p>Success Response</p>
<p>Upon successfully initiating the mobile payment, the API will respond with a JSON object containing payment information.</p>
{
    "error": false,
    "status": "success",
    "amount": "500",
    "fees": 10,
    "message": "Paiement e la clientele done. The devrez confirmer le paiement en saisissant son code PIN et vous recevrez alors un SMS. Merci d'utiliser des services Orange Money.",
    "reference": "LOMoac3hqZXuBHUHKy8"
}

## Supported Operators

<table>
<thead>
<tr>country</tr>
<tr>operator</tr>
<tr>operator_code</tr>
</thead>

<tbody>
<tr>
<td>Benin</td>
<td>Mtn</td>
<td>mtn-benin</td>
</tr>
<tr>
<td>Benin</td>
<td>Moov</td>
<td>moov-benin</td>
</tr>
<tr>
<td>Cameroon</td>
<td>Orange</td>
<td>orange-money-cm</td>
</tr>
<tr>
<td>Cameroon</td>
<td>Mtn</td>
<td>mtn-cm</td>
</tr>
<tr>
<td>Ivory Coast</td>
<td>Mtn</td>
<td>mtn-ci</td>
</tr>
<tr>
<td>Ivory Coast</td>
<td>Moov</td>
<td>moov-ci</td>
</tr>
<tr>
<td>Mali</td>
<td>Moov</td>
<td>moov-ml</td>
</tr>
<tr>
<td>Mali</td>
<td>Orange</td>
<td>orange-money-ml</td>
</tr>
<tr>
<td>Senegal</td>
<td>Orange</td>
<td>orange-money-senegal</td>
</tr>
<tr>
<td>Senegal</td>
<td>Expresso</td>
<td>expresso-senegal</td>
</tr>
<tr>
<td>Senegal</td>
<td>Free</td>
<td>free-money-senegal</td>
</tr>
<tr>
<td>Senegal</td>
<td>Wave Senegal</td>
<td>wave-senegal</td>
</tr>
<tr>
<td>Togo</td>
<td>T-money</td>
<td>t-money-togo</td>
</tr>
</tbody>
</table>

## Pay Out
<?php
namespace App\Htpp\Controllers;
use LoovLaravelSdk\LoovService; 

class payment extends Controller{
     $data =[
        'amount' =>50000,
        "operator": "orange-money-cm",
        'phoneNumber' => '237699009999',
        "currency" => "XAF"
     ];
     $response = (new LoovService())->setKeys(AppKey MerchantKey)->payOut($data);
}

<p>Success Response</p>
<p>Upon successfully initiating the mobile payment, the API will respond with a JSON object containing payment information.</p>
{
    "error": false,
    "status": "success",
    "amount": "50000",
    "reference": "MOMAVzvTY7DLyiRCR38",
    "message": "Transfer of 500 XAF transferred to 237699009999"
}

## Check Status

<?php
namespace App\Htpp\Controllers;
use LoovLaravelSdk\LoovService; 

class payment extends Controller{
     $response = (new LoovService())->setKeys(AppKey MerchantKey)->checkStatus($reference);
}

<p>Success Response</p>
<p>Upon successfully retrieving the payment status, the API will respond with a JSON object containing the payment status information.</p>
{
    "error": false,
    "reference": "MOMAVzvTY7DLyiRCR38",
    "amount": "500",
    "currency": "XAF",
    "status": "initiated",
    "date": "2023-08-08 09:08:17",
    "customer": null
}

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
