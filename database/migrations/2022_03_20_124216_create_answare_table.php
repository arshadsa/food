<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnswareTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('answare', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->longText('answare1')->nullable();
            $table->text('file1')->nullable();
            $table->longText('answare2')->nullable();
            $table->text('file2')->nullable();
            $table->longText('answare3')->nullable();
            $table->text('file3')->nullable();
            $table->longText('answare4')->nullable();
            $table->text('file4')->nullable();
            $table->longText('answare5')->nullable();
            $table->text('file5')->nullable();
            $table->longText('answare6')->nullable();
            $table->text('file6')->nullable();
            $table->longText('answare7')->nullable();
            $table->text('file7')->nullable();
            $table->longText('answare8')->nullable();
            $table->text('file8')->nullable();
            $table->longText('answare9')->nullable();
            $table->text('file9')->nullable();
            $table->longText('answare10')->nullable();
            $table->text('file10')->nullable();
            $table->timestamps();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('answare');
    }
}
