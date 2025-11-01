<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('work_records', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('content');
            $table->decimal('quantity', 8, 2);
            $table->decimal('yield', 5, 2);
            $table->string('share_token')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('work_records');
    }
};
