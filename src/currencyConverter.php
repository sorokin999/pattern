<?php

namespace App;

class currencyConverter
{
   /**
    *Конвертирует одну валюту в другую
    * @param float $sum Сумма
    * @param string $from Исходная валюта
    * @param string $to Валюта на выходе
    * @return float|string Результат конвертации
    */
  
    //Массив с курсами валют
    private $currency = [
        'USD' => [
            //Номинал валюты
            'nominal' => 1,
            //Курс по отношению к рублю
            'value' => 74,
        ],
        'EUR' => [
            'nominal' => 1,
            'value' => 80,
        ],
        'BYR' => [
            'nominal' => 1,
            'value' => 30,
        ],
        'RUB' => [
           'nominal' => 1,
           'value' => 1,
        ],
    ];
    
    public function converter($sum, $from, $to)
    {
    
    //Если валюты равны, то просто возвращаем сумму
    if ($from == $to)
    {
       return $sum;
    }
 
    //Если не существует элемента массива с индексом $from или $to
    if (!isset($this->currency[$from]) || !isset($this->currency[$to]))
    {
        return 'error';
    }

    //Считаем и возвращаем сконвертированную сумму
    return round(($sum * $this->currency[$from]['value'] / $this->currency[$to]['value']),2);
    } 
}
