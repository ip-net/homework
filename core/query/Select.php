<?php

namespace homework\core\query;

use homework\core\db\DbAbstract;

/**
 * Class Select
 * @package homework\core\query
 *
 * after select only from
 */
class Select implements FromInterface
{

    public string $sql;


    /**
     * @param $column
     * @return $this
     */
    public function Select($column)
    {
        if (empty($this->sql))
        {
        $this->sql = "SELECT " . $column;
        }
        else
        {
            $this->sql .= ", " . $column;
        }
        return $this;
    }

    /**
     * @param $table
     * @return From
     */
    public function from($table)
    {
        return new From($this->sql, $table);
    }
}