<?php

namespace App\Services;

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CorplistService
{
    public function __construct()
    {
        $this->getTable();
    }

    public function getTable(){
        if(!Schema::hasTable('corplist')){
            Schema::create('corplist', function (Blueprint $table) {
                $table->id();
                $table->string('corpid',32)->default('')->comment('企业id');
                $table->string('corpname',50)->default('')->comment('企业名称');
                $table->string('secret',32)->default('')->comment('secret');
                $table->string('prikey',50)->default('')->comment('私钥');
                $table->integer('limits')->default(100)->comment('一页拉取条数');
                $table->integer('timeout')->default(10)->comment('拉取超时(秒)');
                $table->tinyInteger('status')->default(1)->comment('状态 1启用 0禁用');
                $table->timestamps();
            });
        }
    }
}