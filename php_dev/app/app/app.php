<?php 
namespace Juniper;

use Whoops\Run;
use Whoops\Handler\PrettyPageHandler;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;
use ActiveRecord\Config;
class App
{
	/**
	 *
	 * @var Logger
	 */
	public static $logger;

	public static $soap_config;

	public static $version = "0.21";
	public static $mod_date = "5-04-2015";

	public static $AVAIL_RESTRICTIONS;

	public static function initializeDatabase($database_config)
	{

		$config = Config::instance();
		$config->set_model_directory($database_config["models_directory"]);
		$config->set_connections(array(
			'development' => 'mysql://' . $database_config["login"] . ':' . $database_config["password"] . '@' . $database_config["host"] . '/' . $database_config["database"] . '?charset=' . $database_config["charset"]
		));
	}

	public static function initializeLogger($logger_config)
	{
		self::$logger = new Logger('appLogger');
		self::$logger->pushHandler(new StreamHandler($logger_config["log_file_path"], Logger::toMonologLevel($logger_config["log_level"])));
	}

	public static function initializeDebug($debug_config)
	{
		if ($debug_config["debug_mode"] == "true") {
			$whoops = new Run();
			$whoops->pushHandler(new PrettyPageHandler());
			$whoops->register();
		}

	}
}