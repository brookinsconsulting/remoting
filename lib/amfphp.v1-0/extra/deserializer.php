<?php
/**
 * The deserializer.php file uses only certain parts of AMFPHP to decode raw AMF
 * messages. This can be useful if you are running issues with apparently corrupt 
 * AMF messages or you want to do reverse-engineering and the like.
 *
 * @author Patrick Mineault
 */

//Read an AMF message from a file
$contents = file_get_contents("samplemessage.amf");

define('AMFPHP_BASE', realpath(dirname(dirname(__FILE__))). '/' );
include(AMFPHP_BASE . 'io/AMFDeserializer.php');
include(AMFPHP_BASE . 'io/AMFInputStream.php');
include(AMFPHP_BASE . 'util/AMFObject.php');
include(AMFPHP_BASE . 'util/CharsetHandler.php');

$amf = new AMFObject(); // create the amf object
$amf->setInputStream($contents);
$deserializer = new AMFDeserializer($amf->getInputStream());
$deserializer->deserialize($amf);

echo('<pre>');
print_r($amf);
echo('</pre>');
?>