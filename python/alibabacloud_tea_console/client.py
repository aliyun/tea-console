class Client:
    @staticmethod
    def log(val):
        """
        Console val with log level
        @param val: the printing string
        @return void
        @example [LOG] tea console example
        """
        print('[LOG] %s' % val)

    @staticmethod
    def info(val):
        """
        Console val with info level
        @param val: the printing string
        @return void
        @example [INFO] tea console example
        """
        print('[INFO] %s' % val)

    @staticmethod
    def warning(val):
        """
        Console val with warning level
        @param val: the printing string
        @return void
        @example [WARNING] tea console example
        """
        print('[WARNING] %s' % val)

    @staticmethod
    def debug(val):
        """
        Console val with debug level
        @param val: the printing string
        @return void
        @example [DEBUG] tea console example
        """
        print('[DEBUG] %s' % val)

    @staticmethod
    def error(val):
        """
        Console val with error level
        @param val: the printing string
        @return void
        @example [ERROR] tea console example
        """
        print('[ERROR] %s' % val)
