swoole-auto-complete
====================

[Swoole](https://github.com/matyhtf/swoole) 在IDE下自动识别类、函数、宏，自动补全函数名

Swoole 结构，便于开发过程中查看文档，以及屏蔽IDE undefined 提示，便于快速查看函数用法。

当前适用Swoole版本: swoole-1.7.7

Swoole releases 版本下载地址：[https://github.com/swoole/swoole-src/releases](https://github.com/swoole/swoole-src/releases)

### 使用方式
 
普通IDE：

开发Swoole项目同时，在IDE中打开/导入本文件即可。

如果IDE自带 ```Include Path``` 功能(如：PhpStorm)，设置该文件路径即可。

PhpStorm 另一种方法:

WinRAR打开 <Phpstorm_Dir>/plugins/php/lib/php.jar 文件

复制 swoole.php 到路径：com\jetbrains\php\lang\psi\stubs\data\

当然你也可以直接使用已经做好的 [php.jar](https://github.com/EagleWu/swoole-auto-complete/tree/master/phpstorm) 直接覆盖即可。

(php.jar 拷贝来源PhpStorm 7.1，其他版本如存在兼容性问题，请自行按上面方面进行处理，覆盖php.jar时注意备份)

保存文件，重启Phpstorm.


PHPstorm使用演示(其他IDE同理)：

![demo1](https://raw2.github.com/EagleWu/swoole-auto-complete/master/demo_img/01.png "demo1")<br />  
![demo2](https://raw2.github.com/EagleWu/swoole-auto-complete/master/demo_img/02.png "demo2")<br />  
![demo3](https://raw2.github.com/EagleWu/swoole-auto-complete/master/demo_img/03.png "demo3")<br />
![demo4](https://raw2.github.com/EagleWu/swoole-auto-complete/master/demo_img/04.png "demo4")<br />

使用php.jar包

![demo5](https://raw2.github.com/EagleWu/swoole-auto-complete/master/demo_img/05.png "demo5")<br />

