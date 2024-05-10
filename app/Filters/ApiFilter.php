<?php

namespace App\Filters;

use Illuminate\Http\Request;

class ApiFilter
{
    //Parametros a filtrar
    protected $safeParams = [];
    //Como queremos filtrar
    protected $columnMap = [];
    //Mapeamos los operadores
    protected $operatorMap = [];

    public function transform(Request $request)
    {
        $query = [];
        foreach ($this->safeParams as $params => $operators) {
            //Almacenamos la query
            $queryFor = $request->query($params);
            if (!isset($queryFor)) {
                continue;
            }
            $col = $this->columnMap[$params] ?? $params;
            foreach ($operators as $operator) {
                if (isset($queryFor[$operator])) {
                    $query[] = [$col, $this->operatorMap[$operator], $queryFor[$operator]];
                }
            }
        }

        return $query;
    }
}
