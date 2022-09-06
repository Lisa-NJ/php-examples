<?php
  $json = '{
      "title": "PHP",
      "site": "GeeksforGeeks"
  }';
  $data = json_decode($json);
  echo $data->title . "</br>";
  echo "123\n";  // "\n" - no use
  echo $data->site;
  //echo $data["title"]; ???
?>