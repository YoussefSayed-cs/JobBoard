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
        Schema::dropIfExists('post'); //drop the existing post table

         
        Schema::create('post', function (Blueprint $table) {
            //
           
            
            $table->uuid('id')->primary(); //add a new uuid column as the primary
            $table->string("title");
            $table->string("author")->after("title");

            $table->string("body");
            $table->boolean("published");
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {

        Schema::dropIfExists('post'); //drop the modified post table

        Schema::create('post', function (Blueprint $table) {
            
            $table->id(); //add the auto-incrementing integer id column back as the primary key
            $table->string("title");
            $table->string("author")->after("title");

            $table->string("body");
            $table->boolean("published");
            $table->timestamps();
        });
    }
};
