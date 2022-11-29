<?php

namespace App\Services;

use Illuminate\Http\Request;

class ParticipantExpenseQueryBuilder
{
    /**
     * @var string[]
     */
    protected $safeParams = [
        'amount' => ['eq', 'gt', 'lt'],
        'type' => ['eq']
    ];

    /**
     * @var string[]
     */
    protected $columnMap = [
        'type' => 'expense_type'
    ];

    protected $operatorMap = [
        'eq' => '=',
        'lt' => '<',
        'gt' => '>'
    ];

    /**
     * @param Request $request
     *
     * @return array
     */
    public function trasform(Request $request): array
    {
        $dbQuery = [];

        foreach ($this->safeParams as $param => $operators) {
            $queryParam = $request->query($param);

            if (!isset($queryParam)) {
                continue;
            }

            $column = $this->columnMap[$param] ?? $param;

            foreach ($operators as $operator) {
                if (isset($queryParam[$operator])) {
                    $dbQuery[] = [$column, $this->operatorMap[$operator], $queryParam[$operator]];
                }
            }
        }

        return $dbQuery;
    }
}
