<?php
namespace App\Repositories\Traits;

trait SearchPropertyByAddressTrait
{
    function searchByAddress(array $address)
    {
        $line_1 = data_get($address,'line_1','');
        $line_2 = data_get($address,'line_2','');
        $number = data_get($address,'number','');
        $city = data_get($address,'city','');
        $state = data_get($address,'state','');
        $borough = data_get($address,'borough','');

        $query = $this->newQuery();
        $query->where('line_1','like',"%$line_1%")
            ->where('line_2','like',"%$line_2%")
            ->where('number','like',"%$number%")
            ->orWhere('city','like',"%$city%")
            ->orWhere('state','like',"%$state%")
            ->where('borough','like',"%$borough%");

        return $this->doQuery($query);
    }
}