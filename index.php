<!DOCTYPE html>
<html>
<head>
    <title> AJAX DEMO </title>

    <script>
        function loadData() 
        {
            var xhr = new XMLHttpRequest();

            xhr.onreadystatechange = function () 
            {
                if (xhr.readyState == 4 && xhr.status == 200) 
                {
                    document.getElementById("result").innerHTML = xhr.responseText;
                }
            };

            xhr.open("GET", "getdata.php", true);
            xhr.send();
        }
    </script>
</head>
<body>

        <h2> Ajax demo </h2>

    
    <input type="button" value="Load Data" onclick="loadData()">

    <hr>

    <div id="result">
        Click the button 
        
    </div>

</body>
</html>