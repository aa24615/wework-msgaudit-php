<?php
namespace App\Services;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MessageBodyService
{
    public function getTable($corpid){
        $tableName = "message_body_{$corpid}";
        Schema::create($tableName, function (Blueprint $table) {
            $table->id();
            $table->bigInteger('seq')->default(0)->comment('seq');
            $table->text('msgdata')->comment('原始消息数据 json格式');
            $table->timestamps();
            $table->index(['seq'],'index');
        });
    }
}