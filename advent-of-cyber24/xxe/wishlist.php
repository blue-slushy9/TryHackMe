# Sample PHP file from the XXE activity in Advent of Cyber 2024

<?php
..
...
# 'false' allows for loading external entities, e.g. file references or requests
# to remote servers
libxml_disable_entity_loader(false);
# 'simplexml...()' tells the webapp to resolve external entities, allowing 
# attackers access to sensitive files or allowing them to make unintended 
# requests from the server
$wishlist = simplexml_load_string($xml_data, "SimpleXMLElement", LIBXML_NOENT);

...
..
echo "Item added to your wishlist successfully.";
?>
