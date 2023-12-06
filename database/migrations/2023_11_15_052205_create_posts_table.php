<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('category_id');
            $table->foreignId('user_id');
            $table->string('title');
            $table->string('slug')->unique();
            $table->string('city');
            $table->string('country');
            $table->string('image')->nullable();
            $table->string('whattsap', 15);
            $table->string('instagram');
            $table->string('email');
            $table->string('alamat');
            $table->string('excerpt');
            $table->text('desc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};

// App\Models\Post::create([
//     'title' => 'Hotel Pertama',
//     'category_id' => 2,
//     'slug' => 'hotel-pertama',
//     'city' => 'tasikmalaya',
//     'country' => 'Indonesia',
//     'desc' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Inventore ullam error nobis blanditiis non! Quis qui ratione nostrum at, harum ex sunt earum, ipsam nulla corrupti, quaerat ut doloribus vitae nobis dolor dolorum distinctio! Aliquid facere temporibus, ea nesciunt, quam optio rem, dolore eum earum velit possimus beatae error architecto eligendi veritatis vel adipisci cumque. Earum nostrum ad omnis odio ratione! Accusamus id expedita nihil! Repellendus explicabo esse quaerat minima, fugiat soluta adipisci nostrum unde laudantium consequatur itaque totam rem maxime, nulla, commodi id ipsum amet mollitia alias ea pariatur expedita quod. Qui accusamus illum vero, possimus inventore nam cupiditate.'
// ])



