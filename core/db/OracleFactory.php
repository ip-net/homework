<?php


namespace homework\core\db;

/**
 * Class OracleFactory
 * @package homework\core\db
 */
class OracleFactory extends DbAbstract
{

    /**
     * @param $connectionString
     * @return Oracle
     */
    public function connect($connectionString)
    {
        return new Oracle();
    }
}