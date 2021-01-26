<?php


namespace homework\core\db;

/**
 * Class SqliteFactory
 * @package homework\core\db
 */
class SqliteFactory extends DbAbstract
{

    /**
     * @param $connectionString
     * @return Sqlite
     */
    public function connect($connectionString)
    {
        return new Sqlite();
    }
}