<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableQuestions extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('questions', function (Blueprint $table) {
            $table->increments('question_id');
            $table->string("question_slug");
            $table->integer("question_category_id");
            $table->foreign("question_category_id")->references("category_id")->on('categories')->onDelete('CASCADE');
            $table->text("question_text");
            $table->integer("first_category_comparation")->default(1);
            $table->integer("second_category_comparation")->default(1);
            $table->foreign("first_category_comparation")->references("sub_category_id")->on("sub_categories")->onDelete("CASCADE");
            $table->foreign("second_category_comparation")->references("sub_category_id")->on("sub_categories")->onDelete("CASCADE");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::drop('questions');
    }

}
