<?php


use homework\core\db\OracleFactory;
use homework\core\db\PostgresFactory;
use homework\core\query\QueryBuilder;

include '../vendor/autoload.php';




$oracle = new OracleFactory();
$oracleObj = $oracle->connect("connectionString");

$queryBuilder = new QueryBuilder();
$queryBuilderObj = $queryBuilder->createQueryBuilder();
$query = $queryBuilderObj->Select("a")->Select("b")->from("c")->where("d")->andCondition("e")->
                            orCondition("f")->orCondition("g")->build();

$result = $oracleObj->executeQuery($query);


echo $result;

$postgres = new PostgresFactory();
$postgresObj = $postgres->connect("connectionString");
$result = $postgresObj->executeQuery($query);

echo $result;

//////// Reflection   /////////////////////////

class TestPrivate
{
    private function getName(): string
    {
        return 'Foo';
    }
}


$method = new ReflectionMethod('TestPrivate', 'getName');
// проверим является ли метод закрытым и сделаем его доступным
if ($method->isPrivate()) {
    $method->setAccessible(true);
}
echo $method->invoke(new TestPrivate());

echo "Method parameters" . "\n";

var_dump($method->getParameters());

echo "\n";





