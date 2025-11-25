<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('comments', function (Blueprint $table) {
            // 如果欄位不存在才建立（避免重複）
            if (!Schema::hasColumn('comments', 'content')) {
                $table->text('content')->after('id');
            }

            if (!Schema::hasColumn('comments', 'post_id')) {
                $table->unsignedBigInteger('post_id')->after('content');
            }
        });
    }

    public function down(): void
    {
        Schema::table('comments', function (Blueprint $table) {
            if (Schema::hasColumn('comments', 'post_id')) {
                $table->dropColumn('post_id');
            }

            if (Schema::hasColumn('comments', 'content')) {
                $table->dropColumn('content');
            }
        });
    }
};
