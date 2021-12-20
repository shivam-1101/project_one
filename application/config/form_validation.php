<?php
    $config = [
        'add_article_rules'=>[
            [
                'field' => 'title',
                'label' => 'Article Title',
                'rules' => 'required|alpha'
            ],
            [
                'field' => 'article',
                'label' => 'Article body',
                'rules' => 'required'
            ]
            ],
        ];
?>