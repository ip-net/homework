<?php


namespace homework\core\db;


/**
 * Class PostgresFactory
 * @package homework\core\db
 */
class PostgresFactory extends DbAbstract
{
    /**
     * @param $connectionString
     * @return Postgres
     */
    public function connect($connectionString)
    {
        return new Postgres();
    }
}