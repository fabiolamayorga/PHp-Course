<!DOCTYPE HTML>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
<title>Primer formulario</title>
</head>
<body>
    <table width="250" border="1" align="center">
        <form id="form1" name="login" method="POST" action="form.php">
            <tr>
                <td>Usuario:</td>
                <td><input type="text" name="nombre" id="nombre"/></td>
            </tr>
            <tr>
                <td>Clave</td>
                <td><input type="text" name="clave"/></td>
            </tr>
            <tr>
                <td><input type="submit" value="Enviar" id="enviar"/></td>
            </tr>
        </form>
    </table>
<script type="text/javascript">
    function revisar_campos(){
        console.log("Hello");
        if (document.getElementById("nombre").value == ""){
            alert("No se puede dejar espacions en blanco. Favor revise.");
            return false;
        }
        return true;
    }
    
    var button = document.getElementById("enviar");
    //console.log(button);
    button.addEventListener("click", revisar_campos);
   
    
</script>
</body>
    
</html>
