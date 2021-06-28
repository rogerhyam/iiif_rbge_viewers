<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Mirador 3 @ RBGE</title>
    <!-- import the Mirador 3 -->
    <script src="dist/mirador.min.js"></script>

</head>

<body>
    <div id="mirador" style="position: absolute; top: 0; bottom: 0; left: 0; right: 0;"></div>
    <script type="text/javascript">
        var miradorInstance = Mirador.viewer({
            id: 'mirador'
<?php
    $manifest_uri = @$_GET['manifest'];
    if($manifest_uri && filter_var($manifest_uri, FILTER_VALIDATE_URL)){
        echo ",windows: [{ manifestId: '$manifest_uri'}]";
    }
?>
        });
    </script>

</body>

</html>