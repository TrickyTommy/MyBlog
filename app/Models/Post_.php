<?php

namespace App\Models;


class Post
{
    private static  $blog_posts = [
        [
            "tittle" => "judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Walang kekek ",
            "body" => " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere excepturi atque voluptates consequatur animi rem expedita ad? Harum voluptatibus voluptas quam, tenetur saepe enim ea non nobis. Exercitationem amet illum sed animi nemo corporis voluptatum quisquam expedita, dolor deserunt error molestiae assumenda laudantium vitae harum doloribus iusto nostrum accusamus ullam eveniet? Voluptatibus impedit suscipit est odio voluptatum asperiores corrupti iure, nostrum itaque fugiat debitis et, modi mollitia, culpa quasi doloremque minima illo inventore aliquam excepturi nesciunt ipsam quia rerum numquam."
        ],
        [
            "tittle" => "judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "TrickyTommy",
            "body" => " Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere excepturi atque voluptates consequatur animi rem expedita ad? Harum voluptatibus voluptas quam, tenetur saepe enim ea non nobis. Exercitationem amet illum sed animi nemo corporis voluptatum quisquam expedita, dolor deserunt error molestiae assumenda laudantium vitae harum doloribus iusto nostrum accusamus ullam eveniet? Voluptatibus impedit suscipit est odio voluptatum asperiores corrupti iure, nostrum itaque fugiat debitis et, modi mollitia, culpa quasi doloremque minima illo inventore aliquam excepturi nesciunt ipsam quia rerum numquam."
        ],
        [
            "tittle" => "judul Post Ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Tommy Ferdian ",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum, maiores qui? Perferendis quaerat vero alias, facere asperiores iure voluptas laborum, consequuntur distinctio, repellendus ipsam? Officia quo fuga, non quod enim nisi aut provident, ratione impedit eligendi quos voluptatum blanditiis repellat, asperiores quibusdam. Sit provident quaerat inventore non quibusdam blanditiis omnis delectus natus neque accusamus sed error, facilis similique sapiente fugiat aut sint placeat molestiae atque consectetur vel nobis optio dolorem? Beatae fuga odit sunt quos quae possimus eaque quod. Fugiat totam facilis consequuntur quae hic esse in, ut magni, modi earum molestias tenetur recusandae ratione est nihil incidunt voluptatibus illum?
            , modi mollitia, culpa quasi doloremque minima illo inventore aliquam excepturi nesciunt ipsam quia rerum numquam."
        ],
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
    //     $post = [];

    //     foreach($posts as $p) {
    //         if($p["slug"] === $slug) {
    //             $post = $p;
    //         }
    //     }

    // return $post;
    return $posts->firstWhere('slug',$slug);
    }
}
