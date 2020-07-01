/**
 * This is a console module
 */
// This file is auto-generated, don't edit it. Thanks.

using System;

namespace AlibabaCloud.TeaConsole
{
    public class Client 
    {

        /**
         * Console val with log level
         * @param val the printing string
         * @return void
         * @example [LOG] tea console example
         */
        public static void Log(string val)
        {
            Console.WriteLine("[LOG] " + val);
        }

        /**
         * Console val with info level
         * @param val the printing string
         * @return void
         * @example [INFO] tea console example
         */
        public static void Info(string val)
        {
            Console.WriteLine("[INFO] " + val);
        }

        /**
         * Console val with warning level
         * @param val the printing string
         * @return void
         * @example [WARNING] tea console example
         */
        public static void Warning(string val)
        {
            Console.WriteLine("[WARNING] " + val);
        }

        /**
         * Console val with debug level 
         * @param val the printing string
         * @return void
         * @example [DEBUG] tea console example
         */
        public static void Debug(string val)
        {
            Console.WriteLine("[DEBUG] " + val);
        }

        /**
         * Console val with error level 
         * @param val the printing string
         * @return void
         * @example [ERROR] tea console example
         */
        public static void Error(string val)
        {
            Console.WriteLine("[ERROR] " + val);
        }

    }
}
