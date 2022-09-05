<?php
  $json = '{
      "title": "PHP",
      "site": "GeeksforGeeks"
  }';
  $data = json_decode($json);
  echo $data->title . "</br>";
  echo "123\n";
  echo $data->site;
  //echo $data["title"]; ???
?>