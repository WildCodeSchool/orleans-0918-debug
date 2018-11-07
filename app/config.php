<php?

/**
 * This file define app constants .
 *
 * PHP version 7
 *
 * @author   WCS <contact@wildcodeschool.fr>
 *
 * @link     https://github.com/WildCodeSchool/simple-mvc
 */


define('APPDEV', true);

//Model (for connexion data, see unversionned db.php)
//VIew
define('APP_VIEW_PATH', __DIR__ . '/../src/View/');
define('APP_CACHE_PATH', __DIR__ . '/../temp/cache/');

//Controler
define('APP_CONTROLLER_NAMESPACE', '\Controller\\');
define('APP_CONTROLLER_SUFFIX', 'Controller');
