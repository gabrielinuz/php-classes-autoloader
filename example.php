<?php
/**
* Copyright Gabriel Nicolás González Ferreira <gabrielinuz@gmail.com>
* Released under the MIT license
* https://opensource.org/licenses/MIT
**/

/*******************************USAGE EXAMPLE:**************************************/
include_once('Autoloader/Autoloader.php');
include_once('Autoloader/ConcretePathsProvider.php');

/*PATHS PROVIDER*/
$pathsProvider = new ConcretePathsProvider;

/*Esta es una forma de uso:*/
// $pathsProvider->appendPath('Autoloader/TestClassesFolder01/');
// $pathsProvider->appendPath('Autoloader/TestClassesFolder02/');

/*O esta es otra forma:*/
$pathsProvider->setFile('paths.ini');

Autoloader::initWith( $pathsProvider );

new TestClass01a;
new TestClass01b;
new TestClass01c;
new TestClass01d;
new TestClass01e;
new TestClass01f;
new TestClass01g;

new TestClass02a;
new TestClass02b;
new TestClass02c;
new TestClass02d;
new TestClass02e;
new TestClass02f;
new TestClass02g;

/*Este caso no funciona porque no está incluído el directorio en el 
archivo de rutas paths.ini:*/
new TestClass03; //Fatal error: Uncaught Error: Class 'TestClass03' not found... 