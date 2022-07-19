class Client:
    @staticmethod
    def log(val):
        print('[LOG] %s' % val)

    @staticmethod
    def info(val):
        print('[INFO] %s' % val)

    @staticmethod
    def warning(val):
        print('[WARNING] %s' % val)

    @staticmethod
    def debug(val):
        print('[DEBUG] %s' % val)

    @staticmethod
    def error(val):
        print('[ERROR] %s' % val)
