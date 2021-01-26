<?php


namespace homework\core\db;

/**
 * Class Postgres
 * @package homework\core\db
 */
class Postgres implements QueryInterface
{

    /**
     * @param $queryString
     */
    public function executeQuery($queryString)
    {
        echo "postgres " . $queryString . "\n";
    }
}