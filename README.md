## Alert package for Laravel 5+

Laravel package to use the javascript NotyJs with Laravel Service Provider.
Simple package, but effective.

##Installation

````
composer require leandreaci/alerts *@dev
````

After install this package you have to set the service provider on your config/app.php file

````
Leandreaci\Alerts\AlertServiceProvider::class
````


Copy the required assets of SweetAlert to your public folder. Those assets would be place in the css and js respective directory.

````
php artisan vendor:publish --tag=alerts
````

Then in your master view add those styles and scripts. Put this style between the <head> </head> tags

````
<link rel="stylesheet" type="text/css" href="css/alert.css">
````

Add the JS script before close your </body> tag.

````
<script src="js/alert.js"></script>
````

Include the alerts view to your master view. Add this code right after set the JS script file.

````
@include('Alerts::alerts')
````

###Usage

On your controllers is a perfect place to use it, any way you can fire the alerts from jobs or events.

````
alert('Message');
alert()->success('Message');
alert()->info('Message');
````