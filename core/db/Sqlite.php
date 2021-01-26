<?php


namespace homework\core\db;


/**
 * Class Sqlite
 * @package homework\core\db
 */
class Sqlite implements QueryInterface
{
    /**
     * @param $queryString
     * @return mixed|void
     */
    public function executeQuery($queryString)
    {
        echo $queryString . "\n";
    }
}