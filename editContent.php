<?php include 'connection.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Edit TExt</title>
    <link rel="stylesheet" href="editor.css">
    <link rel="stylesheet" href="/css/all.css">
    
    <script src="e.js"></script>
</head>
<body>
<h1> Edit Text </h1>
<form  method="post" action="connection.php">
<div id="toolbar">
                <div id="edit">
            
                <image src="img/bold.svg" onclick="bold()" width="22px" style="padding:15px;" >
                <image src="img/italic.svg" onclick="italic()" width="22px" style="padding:15px;">
                <image src="img/underline.svg" onclick="underline()" width="22px" style="padding:15px;">
                <image src="img/font.svg" onclick="fontSize()" width="22px" style="padding:15px;">
                <image src="img/palette.svg" onclick="fontColor()" width="22px" style="padding:15px;">
                <image src="img/highlighter.svg" onclick="highlight()" width="22px" style="padding:15px;">
                <image src="img/highlighter.svg" onclick=" unhighlight()" width="18px" style="padding:15px;" >
                <image src="img/insertlink.svg" onclick="llink()" width="22px"  style="padding:15px;">
                <image src="img/unlink.svg" onclick="ulink()" width="22px" style="padding:15px;" >
                <image src="img/justifyleft.svg" onclick="jl()" width="22px" style="padding:15px;" >
                <image src="img/justifycenter.svg" onclick="jc()" width="22px" style="padding:15px;" >
                <image src="img/justifyright.svg" onclick="jr()" width="22px"  style="padding:15px;">
                <image src="img/justifyblock.svg" onclick="jf()" width="22px" style="padding:15px;">
                <image src="img/undo.svg" onclick="undo()" width="22px"style="padding:15px;" >
                  </div>
                  </div>
                 <textarea name="tx" id="tx" style="display:none;"></textarea> 
               
                <div  contenteditable name="editor" class="editor" id ="editor" style="overflow-y: scroll; "  >
               <p>
                  <?php
                   
                   echo base64_decode($row['content']) ;?>
                  </p>
                  </div> 
                  <input type="submit" name="update"  onclick="val()"  id="update" ><br>
                </form>

                <br><br>
                <br><br>

    
</body>
</html>