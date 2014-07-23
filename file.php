<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>我的第一个php页面</title>
</head>
<body>

<?php
//echo readfile("webdictionary.txt");
//fopen()提供比readfile()更多的选项。

//$myfile = fopen("webdictionary.txt","r") or die("Unable to open file!");
//echo fread($myfile,filesize("webdictionary.txt"));
//fclose($myfile);

/*
模式	描述
r	打开文件为只读。文件指针在文件的开头开始。
w	打开文件为只写。删除文件的内容或创建一个新的文件，如果它不存在。文件指针在文件的开头开始。
a	打开文件为只写。文件中的现有数据会被保留。文件指针在文件结尾开始。创建新的文件，如果文件不存在。
x	创建新文件为只写。返回 FALSE 和错误，如果文件已存在。
r+	打开文件为读/写、文件指针在文件开头开始。
w+	打开文件为读/写。删除文件内容或创建新文件，如果它不存在。文件指针在文件开头开始。
a+	打开文件为读/写。文件中已有的数据会被保留。文件指针在文件结尾开始。创建新文件，如果它不存在。
x+	创建新文件为读/写。返回 FALSE 和错误，如果文件已存在。

 *
 * */

//fgets()函数用于从文件读取单行。

//$myfile = fopen("webdictionary.txt","r") or die ("Unable to open file!");
//echo fgets($myfile)."<br>";
//echo fgets($myfile)."<br>";
//echo fgets($myfile)."<br>";
//echo fgets($myfile)."<br>";
//echo fgets($myfile)."<br>";
//echo fgets($myfile)."<br>";
//echo fgets($myfile)."<br>";
//echo fgets($myfile)."<br>";
//fclose($myfile);

//feof()函数检查是否已到达"end-of-file"(EOF)。
//feof()对于遍历未知长度的数据很有用。
//下例逐行读取"webdictionary.txt"文件，直到end-of-file：

//$myfile = fopen("webdictionary.txt","r") or die("Unable to open file!");
////输出单行直到 end-of-file
//while(!feof($myfile)){
//    echo fgets($myfile)."<br>";
//}
//fclose($myfile);

//fgetc()函数用于从文件中读取单个字符
//$myfile = fopen("webdictionary.txt","r") or die("Unable to open file!");
////输出字符知道 end-of-file
//while(!feof($myfile)){
//    echo fgetc($myfile)."<br>";
//}
//fclose($myfile);


//fopen()函数也用于创建文件
//$myfile = fopen("testfile.txt","w");

//fwrite()函数用于写入文件
//fwrite()的第一个参数包含要写入的文件的文件名，第二个参数是被写的字符串。
//$myfile = fopen("newfile.txt","w") or die("Unable to open file!");
//$txt = "Bill Gates\n";
//fwrite($myfile,$txt);
//$txt = "Steve Jobs\n";
//fwrite($myfile,$txt);
//fclose($myfile);

//覆盖文件内容
$myfile = fopen("newfile.txt","w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile,$txt);
$txt = "Minnie Mouse\n";
fwrite($myfile,$txt);
fclose($myfile);

?>



</body>
</html>






















