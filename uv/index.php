<?php
/*
        This is a simple page to load a viewer for a manifest
        The manifest URI is passed as a base64 string
*/
        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="uv/uv.css">
    <script src="uv/lib/offline.js"></script>
    <script src="uv/helpers.js"></script>
    <title>RBGE: Universal Viewer</title>
    <style>
                html, body {
                        height: 100%;
                        margin: 0px;
                    }
        #uv {
            width: 100%;
            height: 100%;
        }
    </style>
</head>
<body>
        
        
<?php
$manifest_uri = @$_GET['manifest'];
if(!$manifest_uri){
?>
<p>You must a query parameter ?manifest= with the URI of a IIIF manifest such as <a href="index.php?manifest=https://iiif.rbge.org.uk/herb/iiif/E00001237/manifest">ht
tps://iiif.rbge.org.uk/herb/iiif/E00001237/manifest</a></p>


<?php }else{ ?>
                <div id="uv" class="uv"></div>
            <script>
                window.addEventListener('uvLoaded', function (e) {
                    createUV('#uv', {
                        iiifResourceUri: '<?php echo $manifest_uri ?>',
                                        configUri: 'uv-config.json'
                    }, new UV.URLDataProvider());
                }, false);
            </script>
                <script src="uv/uv.js"></script>
<?php
}//
?>
            
        
        
</body>
</html>


