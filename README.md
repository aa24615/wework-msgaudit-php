

# wework-msgaudit-php

企业微信-会话内容存档
实时拉取企业微信聊天记录php版
本项目依懒于 [wework-msgaudit-php-docker](https://github.com/aa24615/wework-msgaudit-php-docker) / laravel 8.5.*  
这是一个独立的系统,只将企业微信会话内容存档(聊天记录) 实现自动实时拉取并保存到mysql数据库 
注意: 不支持win 不支持mac 请在docker中运行

官方文档
[https://developer.work.weixin.qq.com/document/path/91774](https://developer.work.weixin.qq.com/document/path/91774)

# 注意: 还没发布

### 相关开源

- [wework-msgaudit-php](https://github.com/aa24615/wework-msgaudit-php)	(php版 包含数据入库)
- [wework-msgaudit-php-docker](https://github.com/aa24615/wework-msgaudit-php-docker)	(php版docker镜像 仅sdk调用接口)


### 功能

- [x] 多企业
- [x] 音频转码
- [x] 自动分表

### 要求

1. php >= 7.4
2. Composer 2.x
3. laravel 8.5.*
4. mysql 5.7
5. redis 6.2.5

### 安装

```shell
composer install
```

### 初始化

```shell
php artisan init
```

按照提示 操作即可

### 运行

运行指定企业
```shell
php artisan message:start 企业id
```

运行所有企业
```shell
php artisan message:start
```

### 队列模式

以上运行方式是单程的,企业较多时延迟较高


启动队列
```shell
php artisan queue:start
```

消费队列
```shell
php artisan queue:work
```

以上两个必需同时执行 `queue:work` 可挂多个进程加快执行速度

### 分布式

使用一个redis作为中心队列库即可实现分布式

`queue:start` 命令只需要在一台服务器执行即可

其他服务器只需要 执行多个 `queue:work` 进程

### 参与贡献

1. fork 当前库到你的名下
3. 在你的本地修改完成审阅过后提交到你的仓库
4. 提交 PR 并描述你的修改，等待合并

### License

[MIT license](https://opensource.org/licenses/MIT)
