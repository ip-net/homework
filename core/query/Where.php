<?php


namespace homework\core\query;

/**
 * Class Where
 * @package homework\core\query
 */
class Where implements BuildInterface, AndInterface, OrInterface
{
    protected $sql;

    /**
     * Where constructor.
     * @param $sql
     * @param $condition
     */
    public function __construct($sql, $condition)
    {
        $this->sql = $sql . " WHERE " . $condition;
        return $this;
    }

    /**
     * @return string
     */
    public function build():string
    {
        return $this->sql;
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
     */
    public function orCondition($condition)
    {
        // TODO: Implement orCondition() method.
    }
}