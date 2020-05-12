<?php
/**
 * Project: swuuws
 * Producer: swuuws [ http://www.swuuws.com ]
 * Author: A.J <804644245@qq.com>
 * Copyright: http://www.swuuws.com All rights reserved.
 */

define('SWUUWS_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Directory separator
|--------------------------------------------------------------------------
|
| Define directory separators to simplify use
|
*/

define('DS', DIRECTORY_SEPARATOR);

/*
|--------------------------------------------------------------------------
| Application directory
|--------------------------------------------------------------------------
|
| The root directory of the application, which can be directly
| expressed by the constant APP
|
*/

define('APP', dirname(__DIR__) . DS);

/*
|--------------------------------------------------------------------------
| Root directory
|--------------------------------------------------------------------------
|
| The root directory of the website, which can be directly
| expressed by the constant ROOT
|
*/

define('ROOT', dirname(APP) . DS);

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| our application. We just need to use it!
|
*/

require ROOT . '/vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Here we open the application. Once opened, we can process
| the incoming request, and after processing, return the result
| to the user's browser.
|
*/

swuuws\Application::launch();
