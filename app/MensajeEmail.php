<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MensajeEmail extends Model
{
    protected $table = 'mensaje_emails';

    public function scopeCliente($query, $cliente)
    {
        if (!is_null($cliente)) {
            return $query->where('cliente', 'like', '%'.$cliente.'%');
        }

        return $query;
    }

    public function scopefilterFroms($query, $filterFroms)
    {
        if (!is_null($filterFroms)) {
            return $query->whereIn('from', $filterFroms);
        }

        return $query;
    }

    public function scopeDesde($query, $desde)
    {
        if (!is_null($desde)) {
            return $query->where('created_at','>=' , $desde);
        }

        return $query;
    }

    public function scopeHasta($query, $hasta)
    {
        if (!is_null($hasta)) {
            return $query->where('created_at','<=' , $hasta);
        }

        return $query;
    }
}
