<html>
  <head>
    <title>Yaser Raihami</title>
    <style>
      a{
        display:block;
      }
    </style>
  </head>
  <body>
    <h1>Yaser Raihami PHP</h1>
    <p>
      ASCII art of the first letter of my name :
    </p>
    <pre style="margin-left:4px;">
       **       **
        **     **
         **   **
          ** **
           **
          **
        **
       **
    </pre>
    <p>
      <?php 
        echo "The SHA256 hash of \"Yaser Raihami\" is \n"; 
        print hash('sha256', 'Yaser Raihami');
    ?> 
    </p>
    <a href="check.php">Click here to check the error settings</a>
    <a href="fail.php">Click here to cause traceback</a>
  </body>
</html>