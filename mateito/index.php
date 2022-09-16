<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PDF To Text Extraction Results</title>
</head>
<body>

<?php 

// Obtenemos los datos del formulario.
$apiKey = $_POST["apiKey"]; // The authentication key (API Key). Get your own by registering at https://app.pdf.co
$pages = $_POST["pages"];


// Para obtener la clave de autenticacion es obligatorio registrarse. Yo lo  hice, asi que puede ingresar con la mia.
// -&gt; Link para registrarse. https://app.pdf.co

// Creamos URL
$url = "https://api.pdf.co/v1/file/upload/get-presigned-url" . 
    "?name=" . urlencode($_FILES["file"]["name"]) .
    "&contenttype=application/octet-stream";
    
// Creamos Solicitud
$curl = curl_init();
curl_setopt($curl, CURLOPT_HTTPHEADER, array("x-api-key: " . $apiKey));
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);


// Execute request
$resultado = curl_exec($curl);

if (curl_errno($curl) == 0)
{
    $codEstado = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    
    if ($codEstado == 200)
    {
        $json = json_decode($resultado, true);
        
        // Obtener la URL que se utilizará para la carga de archivos
        $subirArchivoUrl = $json["presignedUrl"];
        // Obtener la URL del archivo subido para utilizarla en posterioresllamadas a la API
        $subidaArchivo2 = $json["url"];
        
        // 2. SUBIR EL ARCHIVO A LA NUBE.        
        $archivoLocal = $_FILES["file"]["tmp_name"];
        $fileHandle = fopen($archivoLocal, "r");
        
        curl_setopt($curl, CURLOPT_URL, $subirArchivoUrl);
        curl_setopt($curl, CURLOPT_HTTPHEADER, array("content-type: application/octet-stream"));
        curl_setopt($curl, CURLOPT_PUT, true);
        curl_setopt($curl, CURLOPT_INFILE, $fileHandle);
        curl_setopt($curl, CURLOPT_INFILESIZE, filesize($archivoLocal));

        // Ejecutar la solicitud
        curl_exec($curl);
        
        fclose($fileHandle);
        
        if (curl_errno($curl) == 0)
        {
            $codEstado = curl_getinfo($curl, CURLINFO_HTTP_CODE);
            
            if ($codEstado == 200)
            {
                // 3. CONVERTIR EL ARCHIVO PDF SUBIDO A TEXTO
                
                ExtractText($apiKey, $subidaArchivo2, $pages);
            }
            else
            {
               // Mostrar error de solicitud
                echo "<p>Status code: " . $codEstado . "</p>"; 
                echo "<p>" . $resultado . "</p>"; 
            }
        }
        else
        {
            // Mostrar error de CURL
            echo "Error: " . curl_error($curl);
        }
    }
    else
    {
       // Mostrar el error informado del servicio
        echo "<p>Status code: " . $codEstado . "</p>"; 
        echo "<p>" . $resultado . "</p>"; 
    }
    
    curl_close($curl);
}
else
{
    // Mostrar error de CURL
    echo "Error: " . curl_error($curl);
}

function ExtractText($apiKey, $subidaArchivo2, $pages) 
{
    // Creamos URL
    $url = "https://api.pdf.co/v1/pdf/convert/to/text";
    
    // PARAMETROS
    $parameters = array();
    $parameters["url"] = $subidaArchivo2;
    $parameters["pages"] = $pages;

    // Json
    $data = json_encode($parameters);

   // Crear solicitud
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_HTTPHEADER, array("x-api-key: " . $apiKey, "Content-type: application/json"));
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

    // Ejecutamos la solicitud
    $resultado = curl_exec($curl);
    
    if (curl_errno($curl) == 0)
    {
        $codEstado = curl_getinfo($curl, CURLINFO_HTTP_CODE);
        
        if ($codEstado == 200)
        {
            $json = json_decode($resultado, true);

            if (!isset($json["error"]) || $json["error"] == false)
            {
                $resultFileUrl = $json["url"];
                
               // Mostrar el enlace al archivo con los resultados de la conversión
                echo "<div><p>Click para ver el documento. </p><a href='" . $resultFileUrl . "' target='_blank'>" . $resultFileUrl . "</a></div>";
            }
            else
            {
               // Visualizar el error reportado por el servicio
                echo "<p>Error: " . $json["message"] . "</p>"; 
            }
        }
        else
        {
            // VALIDACION
            echo "<p>Asegurese de que sea un archivo PDF </p>";
            
        }
    }
    else
    {
        // Mostrar erros del CURL
        echo "Error: " . curl_error($curl);
    }

    // Borramos
    curl_close($curl);
}

?>

</body>
</html>

            