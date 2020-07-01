<?php

namespace AlibabaCloud\Tea\Console;

use Monolog\Handler\PHPConsoleHandler;
use Monolog\Logger;

/**
 * This is a console module.
 */
class Console
{
    private static $loggerDriver;

    /**
     * Print val with log level.
     *
     * @param string $val the printing string
     *
     * @throws \Exception
     */
    public static function log($val)
    {
        self::logger()->log('LOG', $val);
    }

    /**
     * Print val with info level.
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
     * Print val with warning level.
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
     * Print val with debug level.
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
     * Print val with error level.
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
            self::$loggerDriver->pushHandler(new PHPConsoleHandler());
        }

        return self::$loggerDriver;
    }
}
