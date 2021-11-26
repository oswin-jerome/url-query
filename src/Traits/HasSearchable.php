<?php
namespace Oswin\UrlQuery\Traits;

trait HasSearchable
{
    public function scopeSearchable($query)
    {
        if(!request()->has('search')) {
            return $query;
        }
        $searchString = request()->get('search');
        foreach ($this->searchables as $key => $value) {
            $query->orWhere($value,"like", "%".$searchString."%");
        }
        return $query;
    }
}
