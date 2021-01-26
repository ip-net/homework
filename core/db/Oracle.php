<?php


namespace homework\core\db;



use homework\core\query\SqlExpressionInterface;

/**
 * Class Oracle
 * @package homework\core\db
 */
class Oracle implements QueryInterface
{
    /**
     * @param $queryString
     * @return string
     */
    public function executeQuery($queryString)
    {
        return "oracle " . $queryString . "\n";
    }
}