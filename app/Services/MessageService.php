<?php
namespace App\Services;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MessageService
{
    public function getTable($corpid){
        $tableName = "message_{$corpid}";
        Schema::create($tableName, function (Blueprint $table) {
            $table->id();
            $table->string('msgid',64)->default('')->comment('');
            $table->string('publickey_ver',50)->default('')->comment('');
            $table->string('seq',32)->default('')->comment('');
            $table->string('action',50)->default('')->comment('');
            $table->integer('msgfrom')->default(100)->comment('');
            $table->integer('tolist')->default(10)->comment('');
            $table->tinyInteger('msgtype')->default(1)->comment('');
            $table->tinyInteger('msgtime')->default(1)->comment('');
            $table->tinyInteger('text')->default(1)->comment('');
            $table->tinyInteger('msgtype')->default(1)->comment('');
            $table->tinyInteger('sdkfield')->default(1)->comment('');
            $table->tinyInteger('status')->default(1)->comment('');
            $table->tinyInteger('media_code')->default(1)->comment('');
            $table->tinyInteger('media_path')->default(1)->comment('');
            $table->tinyInteger('roomid')->default('')->comment('');

            $table->date('date')->comment('日期 Y-m-d');

            $table->timestamps();

            $table->index(['seq'],'index');
        });
    }
}