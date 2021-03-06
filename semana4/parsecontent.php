<!doctype html>
<?php
error_reporting(E_ALL - E_WARNING);
/*
 * SimpleXml y Xpath
 */

//Obtener xhtml
$html = file_get_contents('https://twitter.com/os_arz');

//Crear un Wrapper de DomDocument
$doc = new DOMDocument();
$doc->loadHTML($html);
$sxml = simplexml_import_dom($doc);

$tweets = $sxml->xpath('//p[@class="TweetTextSize TweetTextSize--16px js-tweet-text tweet-text"]');

?>
<html>
<head>
    <title>Semana 3 - SimpleXML Parser</title>
    <meta charset="utf-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
    <div class="well well-lg">SimpleXml & Xpath</div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <?php foreach ($tweets as $tweet): ?>
                    <tr>
                        <td><?php echo $tweet; ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>
</body>
</html>
