<?php
/**
 * Created by PhpStorm.
 * User: M.Jin
 * Date: 14-7-25
 * Time: 上午11:02
 */

$parser=xml_parser_create();//初始化xml解析器


//创建配合不同事件处理程序的函数
function start($parser,$element_name,$element_attrs)
{
    switch($element_name)
    {
        case "NOTE":
            echo "--Note --<br />";
            break;
        case "TO":
            echo "To: ";
            break;
        case "FROM":
            echo "From: ";
            break;
        case "HEADING":
            echo "Heading: ";
            break;
        case "BODY":
            echo "Message: ";
    }
}

function stop($parser,$element_name)
{
    echo "<br  />";
}

function char($parser,$data)
{
    echo $data;
}

xml_set_element_handler($parser,"start","stop");//当解析器遇到开始和结束标签时执行哪个函数
xml_set_character_data_handler($parser,"char");//当解析器遇到字符数据时执行哪个函数
$fp = fopen("myxml.xml","r");

while($data = fread($fp,4096))
{
    //xml_parse()函数来解析文件myxml.xml
    xml_parse($parser,$data,feof($fp)) or
    //把XML错误转换为文本说明
    die(sprintf("XML Error: %s at line %d",xml_error_string(xml_get_error_code($parser)),xml_get_current_line_number($parser)));

}

xml_parser_free($parser);//释放分配给xml_parser_create()函数的内存























