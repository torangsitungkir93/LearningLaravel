<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();

        Category::create([
            'name' => 'Web Progamming',
            'slug' => 'web-programming',
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design',
        ]);

        Post::factory(20)->create();


        // User::create([
        //     'name' => 'Torangto Situngkir',
        //     'email' => 'torangsitungkir93@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        // User::create([
        //     'name' => 'Rifqy Wahyu',
        //     'email' => 'rifukiwahyu@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);


        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nemo quaerat deleniti possimus enim fugiat aliquam velit neque atque veniam voluptate vitae in magni ad unde eveniet aliquid iste non libero pariatur ex, ratione dolores tempora! Distinctio esse dignissimos dolore nostrum eligendi autem nobis tenetur?</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab aliquid repellendus, porro exercitationem aliquam magni soluta dolores id. Eligendi non aliquam, officia quo qui sunt delectus enim temporibus illum rerum!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum tempora dolores enim assumenda, impedit id, voluptatum esse distinctio ratione vel perspiciatis ab sequi repudiandae aspernatur fugiat perferendis. Repellat facere libero voluptas omnis non eveniet magnam fuga recusandae adipisci quod dolore eligendi quas rem vero quidem, doloremque eius repellendus officiis!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nemo quaerat deleniti possimus enim fugiat aliquam velit neque atque veniam voluptate vitae in magni ad unde eveniet aliquid iste non libero pariatur ex, ratione dolores tempora! Distinctio esse dignissimos dolore nostrum eligendi autem nobis tenetur?</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab aliquid repellendus, porro exercitationem aliquam magni soluta dolores id. Eligendi non aliquam, officia quo qui sunt delectus enim temporibus illum rerum!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum tempora dolores enim assumenda, impedit id, voluptatum esse distinctio ratione vel perspiciatis ab sequi repudiandae aspernatur fugiat perferendis. Repellat facere libero voluptas omnis non eveniet magnam fuga recusandae adipisci quod dolore eligendi quas rem vero quidem, doloremque eius repellendus officiis!</p>',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nemo quaerat deleniti possimus enim fugiat aliquam velit neque atque veniam voluptate vitae in magni ad unde eveniet aliquid iste non libero pariatur ex, ratione dolores tempora! Distinctio esse dignissimos dolore nostrum eligendi autem nobis tenetur?</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab aliquid repellendus, porro exercitationem aliquam magni soluta dolores id. Eligendi non aliquam, officia quo qui sunt delectus enim temporibus illum rerum!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum tempora dolores enim assumenda, impedit id, voluptatum esse distinctio ratione vel perspiciatis ab sequi repudiandae aspernatur fugiat perferendis. Repellat facere libero voluptas omnis non eveniet magnam fuga recusandae adipisci quod dolore eligendi quas rem vero quidem, doloremque eius repellendus officiis!</p>',
        //     'category_id' => 2,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit.',
        //     'body' => '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum nemo quaerat deleniti possimus enim fugiat aliquam velit neque atque veniam voluptate vitae in magni ad unde eveniet aliquid iste non libero pariatur ex, ratione dolores tempora! Distinctio esse dignissimos dolore nostrum eligendi autem nobis tenetur?</p><p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ab aliquid repellendus, porro exercitationem aliquam magni soluta dolores id. Eligendi non aliquam, officia quo qui sunt delectus enim temporibus illum rerum!</p><p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Adipisci rerum tempora dolores enim assumenda, impedit id, voluptatum esse distinctio ratione vel perspiciatis ab sequi repudiandae aspernatur fugiat perferendis. Repellat facere libero voluptas omnis non eveniet magnam fuga recusandae adipisci quod dolore eligendi quas rem vero quidem, doloremque eius repellendus officiis!</p>',
        //     'category_id' => 2,
        //     'user_id' => 2
        // ]);
    }
}
