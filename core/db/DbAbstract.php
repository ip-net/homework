<?php

namespace homework\core\db;

/**
 * Class DbAbstract
 * @package homework\core\db
 */
abstract class DbAbstract
{
    public abstract function connect($connectionString);
}