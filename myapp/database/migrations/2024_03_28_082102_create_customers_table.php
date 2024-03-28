<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    //php artisan make:migration create_table_name_table
    //php artisan migrate
    { //php artisan migrate:rollback        to delete table
        //php artisan migrate:refresh        to delete and recreate
        Schema::create('customers', function (Blueprint $table) {
            $table->id('customer_id');
            $table->string('name',60);
            $table->string('email',100);
            $table->enum('gender',['M','F','O']);
            $table->text('address');
            $table->date('dob')->nullable();
            $table->string('password');
            $table->boolean('status')->default(1);
            $table->integer('points')->default(0);
            $table->timestamps(); // created_at updated_at
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
};
