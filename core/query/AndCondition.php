<?php


namespace homework\core\query;

/**
 * Class AndCondition
 * @package homework\core\query
 */
class AndCondition implements OrInterface, BuildInterface
{
    protected $sql;

    /**
     * AndCondition constructor.
     * @param $sql
     * @param $condition
     */
    public function __construct($sql, $condition)
    {
        $this->sql = $sql . " AND " . $condition;
    }

    /**
     * @param $condition
     * @return $this
     */
    public function andCondition($condition)
    {
        $this->sql .= $this->sql . " AND " . $condition;
        return $this;
    }

    /**
     * @param $condition
     * @return OrCondition
     */
    public function orCondition($condition)
    {
        return new OrCondition($this->sql, $condition);
    }

    /**
     * @return string
     */
    public function build()
    {
        return $this->sql;
    }
}