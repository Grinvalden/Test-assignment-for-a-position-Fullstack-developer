<?php 

class parseText 
{
public string $str;

public function __construct($str = '') 
    {
        $this->str = $str;
    }

public function checkStr() 
    {
        $countSymbols = 0;
        $arraySymbols = str_split($this->str);
        foreach ($arraySymbols as $i) {
            if ($i === "{") {
                $countSymbols += 1;
            }
            elseif ($i === "}") {
                $countSymbols -= 1;
            }
        }
        $result = ($countSymbols === 0) ? "Строка корректна" : "Строка некорректна";
        return $result;

    }


}

?>