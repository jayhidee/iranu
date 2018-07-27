<!doctype html>  
<html>  
<head>  
<title>onmouseover/onmouseout event example</title>  
<script type="text/javascript">  
    function initElement()  
    {  
        var p = document.getElementById("foo");  

        p.onmouseover = showMouseOver;
        p.onmouseout = showMouseOut;
    };  

    function showMouseOver()  
    {  
        var notice = document.getElementById("notice");
        notice.innerHTML = 'mouse over detected';
    }
    
    function showMouseOut()
    {
        var notice = document.getElementById("notice");
        notice.innerHTML = 'mouse out detected';
    }


</script>  
<style type="text/css">  
    #foo {  
    border: solid blue 2px;  
    }  
</style>  
</head>  
<body onload="initElement();">  
    <span id="foo">My Event Element</span>
    <p>move your mouse over and out the above element.</p>  
    <div id="notice"></div>
</body>  
</html>  