<?php
class Olimpiadas
{
    public function getPosition($pos)
    {
        return substr(implode(null, range(1, $this->getMaxNumber($pos))), $pos-1, 1);
    }

    private function getMaxNumber($pos)
    {
        $x = (integer) str_repeat(9, strlen((string) $pos)-1);
        return floor($x + ($pos - $x) / 2) + 1;
    }
}