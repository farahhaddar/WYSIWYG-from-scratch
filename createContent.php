<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor </title>
    <link rel="stylesheet" href="editor.css">
    <link rel="stylesheet" href="/css/all.css">
    <script src="editor.js"></script>

</head>
<body    onload="iframe()" >
<h1> TEXT EDITOR </h1>

<form  method="post" action="connection.php">
<div id="toolbar">
                <i   onclick="bold()"       class="fas fa-bold"></i>
                <i   onclick="italic()"     class="fas fa-italic"></i>
                <i   onclick="underline()"  class="fas fa-underline"></i>
                <i   onclick="fontSize()"   class="fas fa-font"></i>
                <i   onclick="fontColor()"  class="fas fa-palette"></i>
                <i   onclick="highlight()"  class="fas  fa-highlighter"></i>
                <i   onclick="unhighlight()"  class="fas fa-xs fa-highlighter"></i>
                <i   onclick="jl()"         class="fas fa-align-left"></i>
                <i   onclick="jc()"         class="fas fa-align-center"></i>
                <i   onclick="jr()"         class="fas fa-align-right"></i>
                <i   onclick="jf()"         class="fas fa-align-justify"></i>
                <i   onclick="llink()"      class="fas fa-link"></i>
                <i   onclick="ulink()"      class="fas fa-unlink"></i>
                <i   onclick="undo()"       class="fas fa-undo"></i>
</div>

                <textarea name="tx" id="tx" style="display:none;"></textarea>
                <iframe name="editor" id="editor"  ></iframe>
                <br><br>
                <br><br>

                <input  type="submit" name="submit" id="submit" onclick="formsubmit()"  value="Submit" >
                <input  type="submit" name="edit" id="edit"   value="edit" >
                <br><br><br>
                </form>

</body>
</html>
