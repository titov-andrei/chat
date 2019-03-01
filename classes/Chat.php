<?php

class Chat
{
  public function sendHeaders($headersText, ) {
    $headers = array();
    $tmpLine = preg_split("/\r\n/", $headersText);
    foreach($tmpLine as $line) {
      $line = rtrim($line);
      if(preg_match('/\A(\S+): (.*)\z/'), $line, $matches) {
        $headers[$matches[0]] = $matches[1]
      }
    }
  }
}