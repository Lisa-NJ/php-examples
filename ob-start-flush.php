<?php
 ob_start();  // open output buffer
?>
Welcome to my website!
<?php
  if(true){
   echo "You're in!";
  }
  else{
    header('Location: http://phpInfo.php');

    // different from above, in 10 seconds
    header('Refresh: 10; url=http://phpInfo.php');
    echo 'You will be redirected in 10 seconds';
  }

  ob_flush(); // output all in buffer
?>