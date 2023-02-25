<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(7)->create();


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Tommy Ferdian Hadimarta',
        //     'email' => 'tommyferdian.hadimarta@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Tommy Ferdian',
        //     'email' => 'hadimarta@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        // User::create([
        //     'name' => 'Thinking',
        //     'email' => 'thinking.hadimarta@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);
        Category::create([
            'name' => 'Programming',
            'slug' => 'programming'
        ]);
        Category::create([
            'name' => 'Personal',
            'slug' => 'Personal'
        ]);
        Category::create([
            'name' => 'Web Desain',
            'slug' => 'web-desain'
        ]);
        Category::create([
            'name' => 'People',
            'slug' => 'people'
        ]);

        Post::factory(50)->create();

        // Post::create([
        //     'tittle' => 'Siapa aku',
        //     'category_id' => 2,
        //     'user_id' => 1,
        //     'slug' => 'siapa-aku',
        //     'excerpt' => 'lorem consectetur adipisicing elit',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam magni nemo est error nulla autem cum et, libero at beatae nesciunt dolorum aperiam temporibus soluta, velit dolores ducimus quaerat aspernatur.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure labore iusto necessitatibus, est expedita ipsa, harum assumenda voluptas obcaecati omnis aliquam soluta in error hic optio quod dicta quidem officia id laudantium aspernatur! Iure temporibus accusamus cupiditate quisquam voluptatem sit vel ullam, aliquam eveniet expedita, nostrum deserunt neque! Labore, ut.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, velit!</p>'

        // ]);
        // Post::create([
        //     'tittle' => 'Programming Itu Mudah',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'programming-itu-mudah-tommy',
        //     'excerpt' => 'Mempelajari bahasa pemrograman memang membutuhkan waktu dan usaha, namun jika dipelajari dengan tekun dan memahami dasar-dasar logika pemrograman, programming dapat menjadi mudah dipahami dan dilakukan.',
        //     'body' => '<p>Programming adalah proses pembuatan kode untuk membuat suatu program komputer. Saat ini, banyak bahasa pemrograman yang digunakan untuk membuat aplikasi, website, dan berbagai proyek lainnya.<p>>Mempelajari bahasa pemrograman memang membutuhkan waktu dan usaha, namun jika dipelajari dengan tekun dan memahami dasar-dasar logika pemrograman, programming dapat menjadi mudah dipahami dan dilakukan.</p><p>Beberapa tips untuk membuat programming menjadi mudah:</p><li>Pelajari dasar-dasar logika pemrograman seperti variabel, perulangan, kondisional, dan struktur data.</li><li>Pilih bahasa pemrograman yang sesuai dengan proyek dan minat Anda. Misalnya, jika ingin membuat aplikasi mobile, belajar bahasa pemrograman seperti Java atau Swift.</li><li>Gunakan sumber belajar yang berkualitas seperti buku, tutorial online, atau video tutorial.</li><li>Latih kemampuan Anda dengan membuat proyek kecil dan berlanjut ke proyek yang lebih besar dan kompleks.</li><li>Bergabung dengan komunitas programmer dan berbagi pengalaman dengan orang lain.</li><p>Dengan mempelajari programming dengan baik, Anda akan memiliki keterampilan yang berguna dan dapat mengembangkan karier dalam bidang teknologi informasi. Jadi, jangan takut untuk memulai belajar programming, karena pada dasarnya itu mudah!</p></p>'
        // ]);
        // Post::create([
        //     'tittle' => 'Judul Ke Tiga',
        //     'category_id' => 1,
        //     'user_id' => 1,
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'lorem consectetur adipisicing elit',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam magni nemo est error nulla autem cum et, libero at beatae nesciunt dolorum aperiam temporibus soluta, velit dolores ducimus quaerat aspernatur.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure labore iusto necessitatibus, est expedita ipsa, harum assumenda voluptas obcaecati omnis aliquam soluta in error hic optio quod dicta quidem officia id laudantium aspernatur! Iure temporibus accusamus cupiditate quisquam voluptatem sit vel ullam, aliquam eveniet expedita, nostrum deserunt neque! Labore, ut.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, velit!</p>'
        // ]);
        // Post::create([
        //     'tittle' => 'Judul Ke Empat',
        //     'category_id' => 2,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-empat',
        //     'excerpt' => 'lorem consectetur adipisicing elit',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam magni nemo est error nulla autem cum et, libero at beatae nesciunt dolorum aperiam temporibus soluta, velit dolores ducimus quaerat aspernatur.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure labore iusto necessitatibus, est expedita ipsa, harum assumenda voluptas obcaecati omnis aliquam soluta in error hic optio quod dicta quidem officia id laudantium aspernatur! Iure temporibus accusamus cupiditate quisquam voluptatem sit vel ullam, aliquam eveniet expedita, nostrum deserunt neque! Labore, ut.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, velit!</p>'
        // ]);
        // Post::create([
        //     'tittle' => 'Judul Ke Lima',
        //     'category_id' => 3,
        //     'user_id' => 3,
        //     'slug' => 'judul-ke-lima',
        //     'excerpt' => 'lorem consectetur adipisicing elit',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam magni nemo est error nulla autem cum et, libero at beatae nesciunt dolorum aperiam temporibus soluta, velit dolores ducimus quaerat aspernatur.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure labore iusto necessitatibus, est expedita ipsa, harum assumenda voluptas obcaecati omnis aliquam soluta in error hic optio quod dicta quidem officia id laudantium aspernatur! Iure temporibus accusamus cupiditate quisquam voluptatem sit vel ullam, aliquam eveniet expedita, nostrum deserunt neque! Labore, ut.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, velit!</p>'
        // ]);
        // Post::create([
        //     'tittle' => 'Judul Ke Enam',
        //     'category_id' => 1,
        //     'user_id' => 2,
        //     'slug' => 'judul-ke-enam',
        //     'excerpt' => 'lorem consectetur adipisicing elit',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam magni nemo est error nulla autem cum et, libero at beatae nesciunt dolorum aperiam temporibus soluta, velit dolores ducimus quaerat aspernatur.</p><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure labore iusto necessitatibus, est expedita ipsa, harum assumenda voluptas obcaecati omnis aliquam soluta in error hic optio quod dicta quidem officia id laudantium aspernatur! Iure temporibus accusamus cupiditate quisquam voluptatem sit vel ullam, aliquam eveniet expedita, nostrum deserunt neque! Labore, ut.</p><p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda, velit!</p>'
        // ]);
    }
}
