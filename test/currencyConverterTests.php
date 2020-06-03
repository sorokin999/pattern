<?php

use PHPUnit\Framework\TestCase;
use App\currencyConverter;

class currencyConverterTests extends TestCase
{
    private $currency;

    public function setUp():void
    {
        $this->currency=new currencyConverter();
    }

    /**
     * @test
     */

    function thisTwoCloneCurrency(){
        self::assertEquals(1,$this->currency->converter(1,'RUB','RUB'));
    }

    /**
     * @test
     */

    function thisNoCurrency(){
        self::assertEquals('error',$this->currency->converter(1,'PUB','RUB'));
    }

    /**
     * @test
     */

    function thisCurrency(){
        self::assertEquals(80,$this->currency->converter(1,'EUR','RUB'));
        self::assertEquals(2.16,$this->currency->converter(2,'EUR','USD'));
        self::assertEquals(240,$this->currency->converter(3,'EUR','RUB'));
        self::assertEquals(5.33,$this->currency->converter(2,'EUR','BYR'));
    }
}