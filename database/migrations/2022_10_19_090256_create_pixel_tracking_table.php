<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        if (!Schema::hasTable('pixel_tracking')) {
            Schema::create('pixel_tracking', function (Blueprint $table) {
                $table->integer('id', true);
                $table->integer('pixel_id')->nullable();
                $table->integer('event_id');
                $table->string('url', 400)->nullable();
                $table->string('browser', 255)->nullable();
                $table->string('ip', 255)->nullable();
                $table->timestamp('created_at')->useCurrent();
                $table->timestamp('updated_at')->useCurrentOnUpdate();
            });
        }
        else {
            if (!Schema::hasColumn('pixel_tracking', 'id')) {
                Schema::table('pixel_tracking', function (Blueprint $table) {
                    $table->integer('id', true);
                });
            }
            if (!Schema::hasColumn('pixel_tracking', 'pixel_id')) {
                Schema::table('pixel_tracking', function (Blueprint $table) {
                    $table->integer('pixel_id')->nullable();
                });
            }
            if (!Schema::hasColumn('pixel_tracking', 'event_id')) {
                Schema::table('pixel_tracking', function (Blueprint $table) {
                    $table->integer('event_id');
                });
            }
            if (!Schema::hasColumn('pixel_tracking', 'url')) {
                Schema::table('pixel_tracking', function (Blueprint $table) {
                    $table->string('url', 400)->nullable();
                });
            }
            if (!Schema::hasColumn('pixel_tracking', 'browser')) {
                Schema::table('pixel_tracking', function (Blueprint $table) {
                    $table->string('browser', 255)->nullable();
                });
            }
            if (!Schema::hasColumn('pixel_tracking', 'ip')) {
                Schema::table('pixel_tracking', function (Blueprint $table) {
                    $table->string('ip', 255)->nullable();
                });
            }
            if (!Schema::hasColumn('pixel_tracking', 'created_at')) {
                Schema::table('pixel_tracking', function (Blueprint $table) {
               $table->timestamp('created_at')->nullable()->useCurrent();
                });
            }
            if (!Schema::hasColumn('pixel_tracking', 'updated_at')) {
                Schema::table('pixel_tracking', function (Blueprint $table) {
                   $table->timestamp('updated_at')->useCurrentOnUpdate();
                });
            }
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('pixel_tracking');
    }

}
;
