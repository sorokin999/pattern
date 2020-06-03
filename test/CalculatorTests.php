<?php

use PHPUnit\Framework\TestCase;
use App\Calculator;

class CalculatorTests extends TestCase
{
    
    private $calc;

    public function setUp():void
    {
        $this->calc=new Calculator();
    }

    /**
     * @test
     */

    function thisAddsTwoNumbers(){
        //$calc = new Calculator();
        self::assertEquals(3,$this->calc->add(1,2));
    }

    /**
     * @test
     */

    function thisAddsTwoNegativeNumbers(){
        //$calc = new Calculator();
        self::assertEquals(-30,$this->calc->add(-10,-20));
    }

    /**
     * @test
     */

    function thisAddsNegativeCases(){
        //$calc = new Calculator();
        self::assertEquals('error',$this->calc->add('hello', 'world'));
        self::assertEquals('error',$this->calc->add(1, 'world'));
        self::assertEquals('error',$this->calc->add('hello', 2));
    }

    /**
     * @test
     */

    function thisSubtractNumbers(){
        //$calc = new Calculator();
        self::assertEquals(3,$this->calc->subtract(5,2));
        self::assertEquals(30,$this->calc->subtract(50,20));
        self::assertEquals(-70,$this->calc->subtract(-50,20));
        self::assertEquals('error',$this->calc->subtract('hello', 'world'));
        self::assertEquals('error',$this->calc->subtract(1, 'world'));
        self::assertEquals('error',$this->calc->subtract('hello', 2));
    }

    /**
     * @test
     */

    function thisMultiply(){
        //$calc = new Calculator();
        self::assertEquals(6,$this->calc->Multiply(2,3));
        self::assertEquals(100,$this->calc->Multiply(20,5));
        self::assertEquals(-100,$this->calc->Multiply(-50,2));
        self::assertEquals('error',$this->calc->Multiply('hello', 'world'));
        self::assertEquals('error',$this->calc->Multiply(1, 'world'));
        self::assertEquals('error',$this->calc->Multiply('hello', 2));
    }

    /**
     * @test
     */

    function thisPower(){
        //$calc = new Calculator();
        self::assertEquals(8,$this->calc->power(2,3));
        self::assertEquals(-8,$this->calc->power(-2,3));
        self::assertEquals(16,$this->calc->power(-2,4));
        self::assertEquals('error',$this->calc->power('hello', 'world'));
        self::assertEquals('error',$this->calc->power(1, 'world'));
        self::assertEquals('error',$this->calc->power('hello', 2));
    }
}