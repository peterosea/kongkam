<?php

// 출처 : https://cnpnote.tistory.com/entry/%EC%9B%B9-%EC%82%AC%EC%9D%B4%ED%8A%B8-%EC%A3%BC%EC%86%8C%EC%97%90%EC%84%9C-%ED%8C%8C%EC%9D%BC-%ED%99%95%EC%9E%A5%EB%AA%85%EC%9D%84-%EC%A0%9C%EA%B1%B0%ED%95%98%EB%8A%94-%EB%B0%A9%EB%B2%95%EC%9D%80-%EB%AC%B4%EC%97%87%EC%9E%85%EB%8B%88%EA%B9%8C

//==== Strip .php extension from requested URI  
function strip_php_extension()  
{  
  $uri = $_SERVER['REQUEST_URI'];  
  $ext = substr(strrchr($uri, '.'), 1);  
  if ($ext == 'php')  
  {  
    $url = substr($uri, 0, strrpos($uri, '.'));  
    redirect($url);  
  }  
}  

//==== Redirect. Try PHP header redirect, then Java, then http redirect
function redirect($url)  
{  
  if (!headers_sent())  
  {  
    /* If headers not yet sent => do php redirect */  
    header('Location: '.$url);  
    exit;  
  }  
  else  
  {
    /* If headers already sent => do javaScript redirect */  
    echo '<script type="text/javascript">';  
    echo 'window.location.href="'.$url.'";';  
    echo '</script>';  

    /* If javaScript is disabled => do html redirect */  
    echo '<noscript>';  
    echo '<meta http-equiv="refresh" content="0; url='.$url.'" />';  
    echo '</noscript>';  
    exit;  
  }  
}  

?>