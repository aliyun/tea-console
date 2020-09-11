<?php

namespace AlibabaCloud\Tea\Console;

use Monolog\Handler\StreamHandler;
use Monolog\Logger;

/**
 * This is a console module.
 */
class Console
{
    private static $loggerDriver;

    /**
     * Console val with log level into stdout.
     *
     * @example \[LOG\] tea console example
     *
     * @param string $val the printing string
     *
     * @throws \Exception
     */
    public static function log($val)
    {
        self::logger()->log(0, $val);
    }

    /**
     * Console val with info level into stdout.
     *
     * @example \[INFO\] tea console example
     *
     * @param string $val the printing string
     *
     * @throws \Exception
     */
    public static function info($val)
    {
        self::logger()->info($val);
    }

    /**
     * Console val with warning level into stdout.
     *
     * @example \[WARNING\] tea console example
     *
     * @param string $val the printing string
     *
     * @throws \Exception
     */
    public static function warning($val)
    {
        self::logger()->warning($val);
    }

    /**
     * Console val with debug level into stdout.
     *
     * @example \[DEBUG\] tea console example
     *
     * @param string $val the printing string
     *
     * @throws \Exception
     */
    public static function debug($val)
    {
        self::logger()->debug($val);
    }

    /**
     * Console val with error level into stderr.
     *
     * @example \[ERROR\] tea console example
     *
     * @param string $val the printing string
     *
     * @throws \Exception
     */
    public static function error($val)
    {
        self::logger()->error($val);
    }

    /**
     * @return Logger
     */
    private static function logger()
    {
        if (null === self::$loggerDriver) {
            self::$loggerDriver = new Logger('tea-console-log');
            self::$loggerDriver->pushHandler(new StreamHandler('php://stderr', 0));
        }

        return self::$loggerDriver;
    }
}
