<?php


namespace homework\core\query;

/**
 * Class QueryBuilder
 * @package homework\core\query
 */
class QueryBuilder implements QueryBuilderInterface
{

    /**
     * @return Select
     */
    public function createQueryBuilder(): Select
    {
        return new Select();
    }
}