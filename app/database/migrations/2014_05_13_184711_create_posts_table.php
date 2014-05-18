<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

  /**
	 * Run the migrations.
	 *
	 * @return void
	 */
  public function up()
  {
    Schema::create('posts', function($table)
   {
      $table->increments('id');
      $table->string('title', 100);
      $table->string('slug')->unique();
      $table->text('img');
      $table->string('content_short');
      $table->text('content');
      $table->date('date');
       
      $table->integer('author_id', false, true);
       
      $table->timestamps();
       
      $table->foreign('author_id')->references('id')->on('authors')->onDelete('restrict');
   });
  }

  /**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
  public function down()
  {
    Schema::table('posts', function($table)
     {
         $table->dropForeign('posts_author_id_foreign');
     });
      
     Schema::drop('posts');
  }
}
