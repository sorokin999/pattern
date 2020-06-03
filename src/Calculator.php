<?php

namespace App;

class Calculator
{
    /**
     * @param $a Слагемое 1
     * @param $b Слагемое 2 
     * @return string|int Результат */   
    
    public function add($a,$b)
    {
        if($this->testArgs($a,$b)){
            return $a+$b;      
        }

        return 'error';
    }

    /**
     * @param $a уменьшаемое
     * @param $b вычитаемое 
     * @return string|int разность */

    public function subtract($a,$b)
    {
        if($this->testArgs($a,$b)){
            return $a-$b;      
        }

        return 'error';
    }

    public function multiply($a,$b)
    {
        if($this->testArgs($a,$b)){
            return $a*$b;      
        }

        return 'error';
    }

    public function power($a,$b)
    {
        if($this->testArgs($a,$b)){
            $result=1;
            for($i=0;$i<$b;$i++)
            {
                $result = $this->multiply($result,$a);
            }
            
            return $result;      
        }

        return 'error';
    }

    private function testArgs($a,$b)
    {
        if(!(int)$a or !(int)$b){
            return false;
        }

        return true;
    }
}