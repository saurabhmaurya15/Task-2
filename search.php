<?php ?>
<html>
    <head>
        <script>
function validateForm() {
    var x = document.forms["myForm"]["brand"].value;
    var y = document.forms["myForm"]["category"].value;
    if ((x == null || x == "") && (y == null || y == "")) {
        alert("Error! Empty Search Query.");
        return false;
    }
    else
        return true;
}
</script>
        </head>
<body><center>
    
    <form action="search_result.php" method="post" name="myForm" onsubmit="return validateForm()">
Brand: <input type="text" id="brand" name="brand">
Category: <input type="text" id="category" name="category">
<input type="submit">
</form>


</script>
</center>
</html> 
