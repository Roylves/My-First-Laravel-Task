<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAddusersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->integer('role_id')->unsigned()->after('id');
            $table->string('name')->unique()->change();
            $table->string('company_name')->nullable()->after('email');
            $table->string('contact_number')->after('email');
            $table->string('password')->nullable()->change();
            $table->foreign('role_id')->references('id')->on('roles');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */ 
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('name')->unique(false)->change();
            $table->string('password')->nullable(false)->change();
            $table->dropColumn('role_id');
            $table->dropColumn('company_name');
            $table->dropColumn('contact_number');
        });
    }
}
