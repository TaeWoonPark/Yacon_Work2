<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
public function up(): void
{
    Schema::table('work_records', function (Blueprint $table) {
        $table->timestamp('share_token_expires_at')->nullable();
    });
}

public function down(): void
{
    Schema::table('work_records', function (Blueprint $table) {
        $table->dropColumn('share_token_expires_at');
    });
}
};
