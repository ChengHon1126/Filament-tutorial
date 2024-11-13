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
        Schema::create('states', function (Blueprint $table) {
            $table->id();
            $table->foreignId('country_id')     // 建立一個外鍵欄位，名為 country_id
                ->constrained()               // 自動關聯到 countries 資料表的 id 欄位
                ->cascadeOnDelete();          // 當關聯的國家被刪除時，級聯刪除這條記錄            $table->timestamps();
            $table->string('name');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('states');
    }
};
