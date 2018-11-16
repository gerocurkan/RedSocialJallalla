<?php

class Post {


  private static $posteos= [
      ['image' => 'img/post/Cochabamba.jpg', 'title' => 'Cochabamba', 'description' => 'La mayor variedad de comidas las tiene Cochabamba.'],
      ['image' => 'img/post/Copacabana.jpg', 'title' => 'Copacabana', 'description' => 'Visitando la capilla de copacabana.'],
      ['image' => 'img/post/Lapaz.jpg', 'title' => 'La paz', 'description' => 'Tierra de montañas y olas de frio.']
  ];


  public static function getPosts(){

    return self::$posteos;

  }


}



 ?>
