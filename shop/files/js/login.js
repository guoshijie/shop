function showLogin() {
    var loginDiv = document.getElementById("loginDiv");
    loginDiv.style.display = "block";
    document.getElementById("fade").style.display = "block";
}
function hideLogin() {
    var loginDiv = document.getElementById("loginDiv");
    loginDiv.style.display = 'none';
    document.getElementById("fade").style.display = "none";
}
function check() 
{ 
	var name = document.getElementById("username").value;
	var password = document.getElementById("password").value;
    if(name==""){
         alert('用户名不许为空');
	       return false;
	       }
    else if(password==""){
       alert('密码不许为空');
	       return false;
    }
}
function MM_showHideLayers() { //v9.0
	  var i,p,v,obj,args=MM_showHideLayers.arguments;
	  for (i=0; i<(args.length-2); i+=3) 
	  with (document) if (getElementById && ((obj=getElementById(args[i]))!=null)) { v=args[i+2];
	    if (obj.style) { obj=obj.style; v=(v=='show')?'visible':(v=='hide')?'hidden':v; }
	    obj.visibility=v; }
	}