function SendData(){
    var mail= document.getElementById('mail').value;
    var pwd=document.getElementById('pwd').value;
    var http=new XMLHttpRequest();
    http.open("POST","submit.php",true);
    http.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    http.onreadystatechange=function(){
       if(http.readyState==4 && http.status==200){
        document.getElementById("response").innerHTML=http.responseText;
       }
    }
    http.send("mail="+mail+"&pwd="+pwd);

}
const http=new XMLHttpRequest();
http.open('get','dbfetch.php',true);
http.onreadystatechange=(()=>{
    if(http.readyState==4 && http.status==200){
        document.getElementById('myTbody').innerHTML=http.responseText;
    }
})
http.send();