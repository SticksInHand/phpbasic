<?php
/**
 * Created by PhpStorm.
 * User: M.Jin
 * Date: 14-7-25
 * Time: 下午5:16
 */

class Person{
    var $name;
    var $age;
    var $sex;

    function say(){
        echo "人在说话";
    }

    function eat($food){

    }

    function run(){
        echo "人在跑步";
    }
}


class Phone{
    //声明4个与电话有关的成员属性
    var $Manufacturers;    //第一个成员属性，用于存储电话外观
    var $color;
    var $Battery_capacity;
    var $screen_size;

    //第一个成员方法用来声明电话具有接打电话的功能
    function call(){
        echo "正在打电话";       //方法体，可以是打电话的具体内容
    }

    //第二个成员方法用来声明电话具有发信息的功能
    function message(){
        echo "正在发消息";   //方法体，可以使发送的具体消息
    }

    //第三个成员方法用来声明电话具有播放音乐的功能
    function playMusic(){
        echo "正在播放音乐";  //方法体，可以是播放的具体音乐
    }

    //第四个成员方法用来声明电话具有拍照的功能
    function photo(){
        echo "正在拍照";
    }
}

$person1 = new Person();    //创建第一个类对象，引用名为$person1
$person2 = new Person();
$person3 = new Person();

//通过Phone类实例化三个对象$phone1,$phone2,$phone3
$phone1 = new Phone();
$phone2 = new Phone();
$phone3 = new Phone();

//下面给$person1 对象中的属性初始化赋值
$person1->name = "张三";
$person1->sex = "男";
$person1->age = 20;

$person2->name = "李四";
$person2->sex = "女";
$person2->age = 30;

$person3->name = "王五";
$person3->sex = "男";
$person3->age = 40;

//下面访问$person1 对象中的成员属性
echo "person1 对象的名字是：".$person1->name."<br>";
echo "person1的性别".$person1->sex."<br>";
echo "person1的年龄".$person1->age."<br>";

//下面访问person1对象中的方法
$person1->say();
$person1->run();




















