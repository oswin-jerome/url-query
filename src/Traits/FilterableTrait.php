<?php
namespace Ideaux\UrlQuery\Traits;

trait FilterableTrait
{
    
    public function scopeFilterable($query)
    {
        foreach (request()->all() as $key => $value) {
            if (in_array($key, $this->filterables)) {
                $query->where($key,"like", "%".$value."%");
            }
        }

        if(request()->has('sort_by') && request()->get('sort_by')!=""){
            $query->orderBy(request()->sort_by, request()->sort_order??"asc");
        }
        return $query;
    }

}
