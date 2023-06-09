<?php
/**
 * Resolving UK postcodes using uk-postcodes.com
 *
 * Another basic example that demonstrates registering namespaces,
 * loading RDF data from the web and then directly displaying
 * literals from the graph on the page.
 *
 * @copyright  Copyright (c) 2009-2020 Nicholas J Humfrey
 * @license    http://unlicense.org/
 */
require_once realpath(__DIR__.'/..').'/vendor/autoload.php';
require_once __DIR__.'/html_tag_helpers.php';

\EasyRdf\RdfNamespace::set('postcode', 'http://data.ordnancesurvey.co.uk/ontology/postcode/');
\EasyRdf\RdfNamespace::set('sr', 'http://data.ordnancesurvey.co.uk/ontology/spatialrelations/');
\EasyRdf\RdfNamespace::set('eg', 'http://statistics.data.gov.uk/def/electoral-geography/');
\EasyRdf\RdfNamespace::set('ag', 'http://statistics.data.gov.uk/def/administrative-geography/');
\EasyRdf\RdfNamespace::set('osag', 'http://data.ordnancesurvey.co.uk/ontology/admingeo/');
?>
<html>
<head>
  <title>EasyRdf UK Postcode Resolver</title>
  <style type="text/css" media="all">
    #map
    {
        border: 1px gray solid;
        float: right;
        margin: 0 0 20px 20px;
    }
    th { text-align: right }
    td { padding: 5px; }
  </style>
</head>
<body>
<h1>EasyRdf UK Postcode Resolver</h1>

<?php echo form_tag(); ?>
  <?php echo text_field_tag('postcode', 'W1A 1AA', ['size' => 10]); ?>
  <?php echo submit_tag(); ?>
<?php echo form_end_tag(); ?>

<?php
        if (isset($_REQUEST['postcode'])) {
            $postcode = str_replace(' ', '', strtoupper($_REQUEST['postcode']));
            $docuri = "http://data.ordnancesurvey.co.uk/doc/postcodeunit/$postcode";
            $graph = \EasyRdf\Graph::newAndLoad($docuri);

            // Get the first resource of type PostcodeUnit
            $res = $graph->get('postcode:PostcodeUnit', '^rdf:type');
            if ($res) {
                $lat = $res->get('geo:lat');
                $long = $res->get('geo:long');
                echo "<iframe width='500' height='350' frameborder='0' scrolling='no' marginheight='0' marginwidth='0' src='https://www.openlinkmap.org/small.php?lat=$lat&lon=$long&zoom=14' style='border: 1px solid black'></iframe>";
                echo "<table id='facts'>\n";
                echo '<tr><th>Longitude:</th><td>'.$res->get('geo:long')."</td></tr>\n";
                echo '<tr><th>Latitude:</th><td>'.$res->get('geo:lat')."</td></tr>\n";
                echo '<tr><th>Easting:</th><td>'.$res->get('sr:easting')."</td></tr>\n";
                echo '<tr><th>Northing:</th><td>'.$res->get('sr:northing')."</td></tr>\n";
                echo '<tr><th>District:</th><td>'.$res->get('postcode:district')->label()."</td></tr>\n";
                echo "</table>\n";

                echo "<div style='clear: both'></div>\n";
            }

            echo $graph->dump();
        }
?>
</body>
</html>
