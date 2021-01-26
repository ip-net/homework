<?php


namespace homework\core\query;

/**
 * Class From
 * @package homework\core\query
 *
 * after from only where or build query
 */
class From implements WhereInterface, BuildInterface
{
    protected $sql;

    /**
     * From constructor.
     * @param $sql
     * @param $table
     */
    public function __construct($sql, $table)
    {
        $this->sql = $sql . " FROM " . $table;
        return $this;
    }

    /**
     * @param $table
     * @return $this
     */
    public function from($table)
    {
        $this->sql .= " ," . $this;
        return $this;
    }

    /**
     * @param $condition
     * @return Where
     */
    public function where($condition)
    {
        return new Where($this->sql, $condition);
    }

    /**
     * @return string
     */
    public function build(): string
    {
        return $this->sql;
    }
}