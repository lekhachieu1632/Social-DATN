<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddEmailVerifiedAtAndRememberTokenTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->timestamp('email_verified_at')->nullable()->after('email');
            $table->rememberToken()->nullable()->after('remake_password');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('user', 'email_verified_at')) {
            Schema::table('user', function (Blueprint $table) {
                $table->dropColumn('email_verified_at');
            });
        }
        if (Schema::hasColumn('user', 'remember_token')) {
            Schema::table('user', function (Blueprint $table) {
                $table->dropColumn('remember_token');
            });
        }
    }
}
