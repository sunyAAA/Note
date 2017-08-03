<?php
    header('Content-Type:application/json');
    $output=[];
    $output[] = [
        'mno'=>rand(1000,9999),
        'headpic'=>'img/1.jpg',
        'title'=>'我是美少女呀~！',
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam doloremque eligendi enim eum eveniet fugiat, in natus nobis non nostrum, officia optio quisquam sequi velit veniam, vero voluptatem voluptatum.'
     ];
    $output[] = [
        'mno'=>rand(1000,9999),
        'headpic'=>'img/2.jpg',
        'title'=>'我才是美少女哦~！',
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam doloremque eligendi enim eum eveniet fugiat, in natus nobis non nostrum, officia optio quisquam sequi velit veniam, vero voluptatem voluptatum.'
     ];
    $output[] = [
        'mno'=>rand(1000,9999),
        'headpic'=>'img/3.jpg',
        'title'=>'肚子好饿，想吃好吃的！',
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam doloremque eligendi enim eum eveniet fugiat, in natus nobis non nostrum, officia optio quisquam sequi velit veniam, vero voluptatem voluptatum.'
     ];
    $output[] = [
        'mno'=>rand(1000,9999),
        'headpic'=>'img/4.jpg',
        'title'=>'哈哈哈哈，真棒~！',
        'content'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid aperiam doloremque eligendi enim eum eveniet fugiat, in natus nobis non nostrum, officia optio quisquam sequi velit veniam, vero voluptatem voluptatum.'
     ];
     echo json_encode($output)
?>