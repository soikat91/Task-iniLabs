<?php 
 class Employees {

    private $name,$employeeId;
    private $salary;

    function __construct($name,$employeeId){
        $this->name=$name;
        $this->employeeId=$employeeId;
    }
    function getName(){
        
        return $this->name;
    }
    function getId(){
        
        return $this->employeeId;
    }

    function getSalary(){
        
        return $this->salary;
    }

    function setSalary($salary){

        if($salary>0){
            $this->salary=$salary;   
        }else{
            echo "Salary Should Be Positive Number";
        }
       

    }
 }

 $emp=new Employees("Mehfuz","EMP101");
 echo "Employee Name :".$emp->getName().PHP_EOL;
 echo "Employee ID :".$emp->getId().PHP_EOL;
 $emp->setSalary('5000');
 echo "Employee Salary :".$emp->getSalary().PHP_EOL;
 
