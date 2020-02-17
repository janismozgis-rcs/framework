<?php

class PostsRepository
{
    public static function getPosts(): array
    {
        $data = [
            [
                'id' => 123,
                'title' => 'Dievietes atziņa 123',
                'text' => 'Netici visam, ko lasi internetā. /A. Linkons',
            ],
            [
                'id' => 124,
                'title' => 'Dievietes atziņa 124',
                'text' => 'Netici visam, ko lasi internetā. /Alberts',
            ],
            [
                'id' => 125,
                'title' => 'Dievietes atziņa 125',
                'text' => 'Netici visam, ko lasi internetā. /Kārlis U.',
            ],
        ];

        return $data;
    }
}