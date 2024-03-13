<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up(): void
    {
        Schema::create('whitelisted_image_urls', function (Blueprint $table): void {
            $table->increments('id');
            $table->string('pattern')->unique();

            $table->timestamps();
        });
    }
};