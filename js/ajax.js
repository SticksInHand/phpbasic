/**
 * Created by M.Jin on 14-7-25.
 */
var XMLHttp = null;
if(window.XMLHttpRequest)
{
    XMLHttp = new XMLHttpRequest()
}
else if(window.ActiveXObject)
{
    XMLHttp = new ActiveXObject("Microsoft.XMLHTTP");
}