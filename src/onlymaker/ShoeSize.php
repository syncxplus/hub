<?php

namespace onlymaker;

class ShoeSize extends \Prefab
{
    function available()
    {
        return [
            'US' => [
                0 => 'US5',
                1 => 'US6',
                2 => 'US7',
                3 => 'US8',
                4 => 'US9',
                5 => 'US9.5',
                6 => 'US10',
                7 => 'US11',
                8 => 'US12',
                9 => 'US13',
                10 => 'US14',
                11 => 'US15',
            ],
            'EU' => [
                0 => 'EU35',
                1 => 'EU36',
                2 => 'EU37',
                3 => 'EU38',
                4 => 'EU39',
                5 => 'EU40',
                6 => 'EU41',
                7 => 'EU42',
                8 => 'EU43',
                9 => 'EU44',
                10 => 'EU45',
                11 => 'EU46',
            ],
            'UK' => [
                0 => 'UK2',
                1 => 'UK3',
                2 => 'UK4',
                3 => 'UK5',
                4 => 'UK6',
                5 => 'UK7',
                6 => 'UK8',
                7 => 'UK9',
                8 => 'UK10',
                9 => 'UK11',
                10 => 'UK12',
                11 => 'UK13',
            ],
        ];
    }

    function normalize($size)
    {
        $available = $this->available();
        $result = [
            'us' => '',
            'eu' => '',
            'uk' => '',
        ];
        $prefix = substr($size, 0, 2);
        $match = $available[$prefix] ?? false;
        if ($match) {
            $i = array_search($size, $match);
            if ($i === false) {
                switch ($prefix) {
                    case 'US':
                        $result['us'] = $size;
                        break;
                    case 'EU':
                        $result['eu'] = $size;
                        break;
                    case 'UK':
                        $result['uk'] = $size;
                        break;
                }
            } else {
                foreach ($available as $k => $v) {
                    $result[strtolower($k)] = $v[$i] ?? '';
                }
            }
        }
        return $result;
    }
}
