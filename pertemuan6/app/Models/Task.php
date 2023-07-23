<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    private static $tasks = [
        [
            'id' => 1,
            'name' => 'Tugas 3 Statistik',
            'description' => 'Mengitung probabilitas pada data yang diberikan',
            'deadline' => '2023-07-29',
            'status' => 'selesai'
        ],
        [
            'id' => 2,
            'name' => 'Tugas 4 Statistik',
            'description' => 'Mengitung probabilitas pada data yang diberikan',
            'deadline' => '2023-08-29',
            'status' => 'selesai'
        ],
        [
            'id' => 3,
            'name' => 'Tugas 5 Statistik',
            'description' => 'Mengitung probabilitas pada data yang diberikan',
            'deadline' => '2023-09-29',
            'status' => 'belum selesai'
        ],
    ];

    public static function getAll()
    {
        return self::$tasks;
    }

    public static function getId($id){
        foreach(self::$tasks as $item){
            if($item['id'] == $id){
                return $item;
            }
        }
    }
}
