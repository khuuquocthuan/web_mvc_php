<?php echo 'nxkjsahkjsdhkj' ?>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="//code.jquery.com/jquery-1.10.2.js"></script>
  <script src="//code.jquery.com/ui/1.11.4/jquery-ui.js"></script>
  <script>
  $(function() {
   $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
    $( "#format" ).change(function() {
            $( "#datepicker" ).datepicker( "option", "dateFormat", "yy-mm-dd" );
    });
  });
  </script>

  <form action="">
    
    <p>Date: <input type="text" id="datepicker" size="30"></p>

  </form>
 
 

 
 
