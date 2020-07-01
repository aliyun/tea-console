// This file is auto-generated, don't edit it. Thanks.
package com.aliyun.teaconsole;

public class Client {

    /**
     * Print val with log level
     *
     * @param val the printing string
     * @return void
     */
    public static void log(String val) throws Exception {
        System.out.println(String.format("[LOG] %s", val));
    }

    /**
     * Print val with info level
     *
     * @param val the printing string
     * @return void
     */
    public static void info(String val) throws Exception {
        System.out.println(String.format("[INFO] %s", val));
    }

    /**
     * Print val with warning level
     *
     * @param val the printing string
     * @return void
     */
    public static void warning(String val) throws Exception {
        System.out.println(String.format("[WARNING] %s", val));
    }

    /**
     * Print val with debug level
     *
     * @param val the printing string
     * @return void
     */
    public static void debug(String val) throws Exception {
        System.out.println(String.format("[DEBUG] %s", val));
    }

    /**
     * Print val with error level
     *
     * @param val the printing string
     * @return void
     */
    public static void error(String val) throws Exception {
        System.err.println(String.format("[ERROR] %s", val));
    }
}
