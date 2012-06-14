<?php
class Olimpiadas
{
    public function getPossition($pos)
    {
        return substr(implode(null, range(1, $pos)), $pos-1, 1);
    }
}