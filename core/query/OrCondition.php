<?php


namespace homework\core\query;

/**
 * Class OrCondition
 * @package homework\core\query
 */
class OrCondition implements AndInterface, BuildInterface
{

    protected $sql;

    /**
     * OrCondition constructor.
     * @param $sql
     * @param $condition
     */
    public function __construct($sql, $condition)
    {
        $this->sql = $sql . " OR " . $condition;
    }

    /**
     * @param $condition
     * @return AndCondition
     */
    public function andCondition($condition)
    {
        return new AndCondition($this->sql, $condition);
    }

    /**
     * @param $condition
     * @return $this
     */
    public function orCondition($condition)
    {
        $this->sql .= " OR " . $condition;
        return $this;
    }

    /**
     * @return string
     */
    public function build():string
    {
        return $this->sql;
    }
}