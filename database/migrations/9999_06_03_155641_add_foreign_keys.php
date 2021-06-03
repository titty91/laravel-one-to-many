<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeys extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('posts', function (Blueprint $table) {   

            $table -> foreign('tag_id', 'post-tag') /** post-tag è il nome della relazione*/

                    -> references('id')             /** chi va a referenziare*/
                    -> on('tags');                  /** tabella a cui andiamo a referenziare*/
        });

        Schema::table('details', function (Blueprint $table) {   

            $table -> foreign('post_id', 'detail-post') 

                    -> references('id')             
                    -> on('posts');                  
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function (Blueprint $table) {   

            $table -> dropForeign('post-tag');
                  
        });
    }
}
