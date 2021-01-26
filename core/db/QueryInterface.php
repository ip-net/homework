<?php


namespace homework\core\db;


use homework\core\query\SqlExpressionInterface;
use http\QueryString;

/**
 * Interface QueryInterface
 * @package homework\core\db
 */
interface QueryInterface
{
    /**
     * @param $queryString
     * @return mixed
     */
    public function executeQuery($queryString);
}