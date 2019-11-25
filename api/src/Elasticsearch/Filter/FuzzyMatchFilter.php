<?php

namespace App\Elasticsearch\Filter;

use ApiPlatform\Core\Bridge\Elasticsearch\DataProvider\Filter\AbstractSearchFilter;

final class FuzzyMatchFilter extends AbstractSearchFilter
{
    protected function getQuery(string $property, array $values, ?string $nestedPath): array
    {
        $matches = [];

        foreach ($values as $value) {
            $matches[] = ['match' => [$property => [
                'query' => $value,
                'fuzziness' => 'AUTO',
            ]]];
        }

        $matchQuery = isset($matches[1]) ? ['bool' => ['should' => $matches]] : $matches[0];

        if (null !== $nestedPath) {
            $matchQuery = ['nested' => ['path' => $nestedPath, 'query' => $matchQuery]];
        }

        return $matchQuery;
    }
}