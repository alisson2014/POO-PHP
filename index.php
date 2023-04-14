<?php

require_once "autoload.php";

use POO_PHP\Bank\Model\Employee\{Developer, Director, Manager};

//Employees 
$director = new Director("Wagner", "122.466.187-05", "Diretor de TI", 39000);
$manager = new Manager("André Cabral", "166.455.122-15", "Gerente de Projetos", 14000);
$developer = new Developer("Matheus", "116.455.711-10", "PHP Developer", 8000);

//Array com os funcionários
$employees = [$developer, $manager, $director];

//Mostra as informções do funcionário (Developer)
echo "---------Desenvolvedores---------" .
    PHP_EOL . "Nome: {$developer->getName()}" . PHP_EOL .
    "CPF: {$developer->getCpf()}" . PHP_EOL .
    "Cargo: {$developer->getOffice()}" . PHP_EOL .
    "Salário: {$developer->getWage()}" . PHP_EOL;

//Mostra as informações do funcionário (Manager)
echo "---------Gerentes---------" .
    PHP_EOL . "Nome: {$manager->getName()}" . PHP_EOL .
    "CPF: {$manager->getCpf()}" . PHP_EOL .
    "Cargo: {$manager->getOffice()}" . PHP_EOL .
    "Salário: {$manager->getWage()}" . PHP_EOL;

//Mostra as informações do funcionário (Director)
echo "---------Diretores---------" .
    PHP_EOL . "Nome: {$director->getName()}" . PHP_EOL .
    "CPF: {$director->getCpf()}" . PHP_EOL .
    "Cargo: {$director->getOffice()}" . PHP_EOL .
    "Salário: {$director->getWage()}" . PHP_EOL;

//Mostra os bonus de cada funcionário
echo "---------Bonus---------" . PHP_EOL;
foreach ($employees as $employee) {
    echo PHP_EOL .
        "Funcionário: {$employee->getName()}" . PHP_EOL .
        "Cargo: {$employee->getOffice()}" . PHP_EOL .
        "Bonus: {$employee->calcBonus()}" . PHP_EOL;
}
