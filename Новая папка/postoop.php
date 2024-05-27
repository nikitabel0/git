<?php
    class Post{
        public function __construct(
            private $title,
            private $text,
        )
        {
            
        }
        public function SetTitle(string $title){
            $this->title = $title;
        }

        public function GetTitle(){
            return $this->title;
        }

        public function SetText(string $text){
            $this->text = $text;
        }

        public function Gettext(){
            return $text->text
           }
    }


    class Lesson extends Post{

    };

    $post = new Post('nem lesson','fdfs');
    $lesson = new Lesson('sdfsf','sfsfs');
    