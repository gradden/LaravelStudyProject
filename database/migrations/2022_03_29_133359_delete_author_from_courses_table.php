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
    {
        Schema::table('courses', function (Blueprint $table) {

            //Még mielőtt letörölnénk, az adatokat az oszlopból áthelyezzük máshova
            /*
            $courses = Course::all();
            foreach($courses as $course){
                $userId = User::where('email', '=', $course->$author)->first();
                if(!empty($user)){
                    $course->author_id = $user->id;
                    $course->save();
                }
            }
            */

            $table->dropColumn('author');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function (Blueprint $table) {
            $table->string('author');
        });
    }
};
