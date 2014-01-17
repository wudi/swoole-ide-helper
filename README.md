swoole-auto-complete
====================

[Swoole](https://github.com/matyhtf/swoole) 在IDE下自动识别类、函数、宏，自动补全函数名

Swoole 结构，便于开发过程中查看文档，以及屏蔽IDE undefined 提示，便于快速查看函数用法。
 
本文件使用方式
 
普通IDE：
开发Swoole项目同时，在IDE中打开/导入本文件即可。
如果IDE自带 Include Path 功能(如：PhpStorm)，设置该文件路径即可。

PhpStorm 另一种方法:
WinRAR打开 <Phpstorm_Dir>/plugins/php/lib/php.jar 文件
复制 swoole.php 到路径：com\jetbrains\php\lang\psi\stubs\data\
保存文件，重启Phpstorm.

PS:替换前请备份php.jar 若发生错误便于恢复 :)

![demo1](https://raw2.github.com/EagleWu/swoole-auto-complete/master/demo_img/01.png "demo1")<br />  
![demo2](https://raw2.github.com/EagleWu/swoole-auto-complete/master/demo_img/02.png "demo2")<br />  
![demo3](https://raw2.github.com/EagleWu/swoole-auto-complete/master/demo_img/03.png "demo3")<br />
![demo4](https://raw2.github.com/EagleWu/swoole-auto-complete/master/demo_img/04.png "demo4")  

