<!doctype html>
<html>
<head>
<meta charset="utf-8">

<title>iDict</title>

<link rel="icon" type="image/vnd.microsoft.icon"
     href="images/favicon.ico" />

<style type="text/css">
body {
    background-color: #242424;
}
table, th, td {
    border: 1px solid black;
}
h1 {
    color: #00ff00;
} 
</style>

<style type="text/css">
.button {
  display: inline-block;
  -webkit-box-sizing: border-box;
  -moz-box-sizing: border-box;
  box-sizing: border-box;
  width: 150px;
  height: 42px;
  cursor: pointer;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  padding: 0 20px;
  overflow: hidden;
  border: none;
  -webkit-border-radius: 21px;
  border-radius: 21px;
  font: normal 20px/normal "Antic", Helvetica, sans-serif;
  color: #00ff00;
  text-decoration: normal;
  -o-text-overflow: ellipsis;
  text-overflow: ellipsis;
  background: rgba(40,40,40,0.4);
  -webkit-box-shadow: 1px 1px 2px 0 rgba(0,0,0,0.5) inset;
  box-shadow: 1px 1px 2px 0 rgba(0,0,0,0.5) inset;
  -webkit-transition: all 502ms cubic-bezier(0.68, -0.75, 0.265, 1.75);
  -moz-transition: all 502ms cubic-bezier(0.68, -0.75, 0.265, 1.75);
  -o-transition: all 502ms cubic-bezier(0.68, -0.75, 0.265, 1.75);
  transition: all 502ms cubic-bezier(0.68, -0.75, 0.265, 1.75);
}

.button:hover {
  color: #00ff66;
  background: rgba(0,0,0,0.4);
  -webkit-transition: all 500ms cubic-bezier(0.68, -0.75, 0.265, 1.75);
  -moz-transition: all 500ms cubic-bezier(0.68, -0.75, 0.265, 1.75);
  -o-transition: all 500ms cubic-bezier(0.68, -0.75, 0.265, 1.75);
  transition: all 500ms cubic-bezier(0.68, -0.75, 0.265, 1.75);
}

.button:focus {
  width: 213px;
  cursor: default;
  padding: -13px 20px 0;
  color: #00ff00;
  -webkit-transition: all 601ms cubic-bezier(0.68, -0.75, 0.265, 1.75);
  -moz-transition: all 601ms cubic-bezier(0.68, -0.75, 0.265, 1.75);
  -o-transition: all 601ms cubic-bezier(0.68, -0.75, 0.265, 1.75);
  transition: all 601ms cubic-bezier(0.68, -0.75, 0.265, 1.75);
}
</style>
<style type="text/css">
.enjoy-css {
  display: inline-block;
  -webkit-box-sizing: content-box;
  -moz-box-sizing: content-box;
  box-sizing: content-box;
  cursor: pointer;
  padding: 0 20px;
  border: none;
  -webkit-border-radius: 20px;
  border-radius: 20px;
  font: normal normal bold 20px/40px "Baumans", Helvetica, sans-serif;
  color: black;
  -o-text-overflow: clip;
  text-overflow: clip;
  background: rgb(221, 221, 221);
  -webkit-box-shadow: 0 1px 0 0 rgb(119,119,119) , 0 2px 0 0 rgb(119,119,119) , 0 3px 0 0 rgb(119,119,119) , 0 4px 0 0 rgb(119,119,119) , 0 5px 0 0 rgb(119,119,119) , 0 6px 0 0 rgb(119,119,119) , 0 0 5px 0 rgba(0,0,0,0.0980392) , 0 1px 3px 0 rgba(0,0,0,0.298039) , 0 3px 5px 0 rgba(0,0,0,0.2) , 0 5px 10px 0 rgba(0,0,0,0.247059) , 0 10px 10px 0 rgba(0,0,0,0.2) , 0 20px 20px 0 rgba(0,0,0,0.14902) ;
  box-shadow: 0 1px 0 0 rgb(119,119,119) , 0 2px 0 0 rgb(119,119,119) , 0 3px 0 0 rgb(119,119,119) , 0 4px 0 0 rgb(119,119,119) , 0 5px 0 0 rgb(119,119,119) , 0 6px 0 0 rgb(119,119,119) , 0 0 5px 0 rgba(0,0,0,0.0980392) , 0 1px 3px 0 rgba(0,0,0,0.298039) , 0 3px 5px 0 rgba(0,0,0,0.2) , 0 5px 10px 0 rgba(0,0,0,0.247059) , 0 10px 10px 0 rgba(0,0,0,0.2) , 0 20px 20px 0 rgba(0,0,0,0.14902) ;
  text-shadow: 0 1px 0 #FFFFFF ;
}

.enjoy-css:hover {
  background: #FFFFFF;
}

.enjoy-css:active {
  margin: 6px 0 0;
  background: rgb(221, 221, 221);
  -webkit-box-shadow: 0 -1px 10px 0 rgba(0,0,0,0.247059) , 0 4px 10px 0 rgba(0,0,0,0.2) , 0 14px 20px 0 rgba(0,0,0,0.14902) ;
  box-shadow: 0 -1px 10px 0 rgba(0,0,0,0.247059) , 0 4px 10px 0 rgba(0,0,0,0.2) , 0 14px 20px 0 rgba(0,0,0,0.14902) ;
}

.enjoy-css:focus {
  background: rgb(221, 221, 221);
}
</style>
</head>

<body>

<center>

<img src="images/Xoxo.jpg" alt="XoXo">

<br>
<b><h1>=================================================
<br>|  iDict Apple ID BruteForcer and Account Management Tool  |
<br>=================================================
</h1></b><br>

<form id="submit-form" name="submit-form" action="brute1.php" method="post">
<input class="button" placeholder="Apple ID ..." input type="text" name="txtFullName"/>
<br><br><br><br>
<div class="enjoy-css" onClick="document.forms['submit-form'].submit();">Enjoy</div>
<input type="hidden" link async href="http://fonts.googleapis.com/css?family=Baumans" data-generated="http://enjoycss.com" rel="stylesheet" type="text/css"/  >
</form>
</body>
</html>
