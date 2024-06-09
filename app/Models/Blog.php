<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    public static $blogs = [];

    public static function getBlog()
    {
        self::$blogs = [
            0 => [
                'id' => 1,
                'title' => 'This is blog title one',
                'author' => 'This is Author one',
                'short_description' => 'This is blog short description officis dolor earum harum ipsum nemo neque, nesciunt nihil non quam',
                'long_description' => 'This is blog long description. Accusamus at culpa, cumque debitis doloremque, error id laborum molestias officia quae, quasi recusandae repellendus. Accusantium, aliquid, blanditiis dolor earum harum ipsum nemo neque, nesciunt nihil non quam quos reprehenderit veniam. Ad delectus fugiat fugit illum magnam neque nihil quidem tempora voluptates.',
                'image' => 'img/blog/blog (1).jpg',
            ],
            1 => [
                'id' => 2,
                'title' => 'This is blog title two',
                'author' => 'This is Author two',
                'short_description' => 'This is blog short description officis dolor earum harum ipsum nemo neque, nesciunt nihil non quam',
                'long_description' => 'This is blog long description. Accusamus at culpa, cumque debitis doloremque, error id laborum molestias officia quae, quasi recusandae repellendus. Accusantium, aliquid, blanditiis dolor earum harum ipsum nemo neque, nesciunt nihil non quam quos reprehenderit veniam. Ad delectus fugiat fugit illum magnam neque nihil quidem tempora voluptates.',
                'image' => 'img/blog/blog (2).jpg',
            ],
            2 => [
                'id' => 3,
                'title' => 'This is blog title three',
                'author' => 'This is Author three',
                'short_description' => 'This is blog short description officis dolor earum harum ipsum nemo neque, nesciunt nihil non quam',
                'long_description' => 'This is blog long description. Accusamus at culpa, cumque debitis doloremque, error id laborum molestias officia quae, quasi recusandae repellendus. Accusantium, aliquid, blanditiis dolor earum harum ipsum nemo neque, nesciunt nihil non quam quos reprehenderit veniam. Ad delectus fugiat fugit illum magnam neque nihil quidem tempora voluptates.',
                'image' => 'img/blog/blog (3).jpg',
            ],

        ];
        return self::$blogs;
    }

    public static function getSingleBlogById($id){
        foreach (self::getBlog() as $item){
            if ($item['id']==$id){
                return $item;
            }
        }

    }
}
