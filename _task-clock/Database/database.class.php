<?php
namespace taskclock
{
    use PDOException;

    class database
    {
        protected const DB_NAME = "task_clock";
        protected const DB_HOST = "localhost";
        protected const DB_PORT = "8889";


        function __construct()
        {
            $this->connectDatabase();
        }

        function connectDatabase()
        {
            $dsn = "mysql:dbname=${DB_NAME};host=localhost;port=8889";
            $user = 'task_clock';
            $password = 'LN8AXJnwcDGtdDFh';

            try
            {
                $dbh = new \PDO($dsn, $user, $password);
                print("connectsded");
            }
            catch(PDOException $e)
            {
                exit($e->getMessage());
            }
        }

    }
}