<?php

namespace App\Services\Faker;

class IndonesianNameProvider extends \Faker\Provider\Base
{

    public function indonesianFemaleNames($length = 3): string
    {
        return implode(" ",
            static::randomElements(
                $this->getNameDataset('indonesianFemaleNames'),
                $length)
        );
    }

    public function indonesianMaleNames($length = 3): string
    {
        return implode(" ",
            static::randomElements(
                $this->getNameDataset('indonesianMaleNames'),
                $length)
        );
    }

    protected function getNameDataset($filename): array
    {
        return json_decode(
            file_get_contents(__DIR__ . '/Dataset/' . $filename . '.json')
        );
    }
}
