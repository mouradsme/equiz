<?php

return [
    'admin-user' => [
        'title' => 'Users',

        'actions' => [
            'index' => 'Users',
            'create' => 'New User',
            'edit' => 'Edit :name',
            'edit_profile' => 'Edit Profile',
            'edit_password' => 'Edit Password',
        ],

        'columns' => [
            'id' => 'ID',
            'last_login_at' => 'Last login',
            'first_name' => 'First name',
            'last_name' => 'Last name',
            'email' => 'Email',
            'password' => 'Password',
            'password_repeat' => 'Password Confirmation',
            'activated' => 'Activated',
            'forbidden' => 'Forbidden',
            'language' => 'Language',
                
            //Belongs to many relations
            'roles' => 'Roles',
                
        ],
    ],

    'question' => [
        'title' => 'Questions',

        'actions' => [
            'index' => 'Questions',
            'create' => 'New Question',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'question' => 'Question',
            'right_answer' => 'Right answer',
            'answer_2' => 'Answer 2',
            'answer_3' => 'Answer 3',
            'answer_4' => 'Answer 4',
            
        ],
    ],

    'code' => [
        'title' => 'Codes',

        'actions' => [
            'index' => 'Codes',
            'create' => 'New Code',
            'edit' => 'Edit :name',
        ],

        'columns' => [
            'id' => 'ID',
            'code' => 'Code',
            
        ],
    ],

    // Do not delete me :) I'm used for auto-generation
];