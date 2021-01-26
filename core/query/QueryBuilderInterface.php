<?php


namespace homework\core\query;

/**
 * Interface QueryBuilderInterface
 * @package homework\core\query
 */
interface QueryBuilderInterface
{
    /**
     * @return Select
     */
    public function createQueryBuilder(): Select;
}