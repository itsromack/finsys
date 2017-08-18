# Database Library
# @author Romack L. Natividad <romacknatividad@gmail.com>
# @since February 27, 2016

import MySQLdb
import MySQLdb.cursors

class DB:
    conn = False
    cursor = False
    conf = False

    def __init__(self, **kwargs):
        self.conf = kwargs
        self.conf["keep_alive"] = kwargs.get("keep_alive", False)
        self.conf["charset"] = kwargs.get("charset", "utf8")
        self.conf["host"] = kwargs.get("host", "localhost")
        self.conf["port"] = kwargs.get("port", 3306)
        self.conf["autocommit"] = kwargs.get("autocommit", False)
        self.connect()

    def connect(self):
        try:
            self.conn = MySQLdb.connect(db=self.conf['db'], host=self.conf['host'],
                                        port=self.conf['port'], user=self.conf['user'],
                                        passwd=self.conf['passwd'],
                                        charset=self.conf['charset'],
					cursorclass=MySQLdb.cursors.DictCursor)
            self.cursor = self.conn.cursor()
            self.conn.autocommit(self.conf["autocommit"])
        except:
            print ("MySQL connection failed")
            raise