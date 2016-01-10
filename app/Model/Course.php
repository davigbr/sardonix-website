<?php

class Course extends AppModel {

    public $hasMany = array(
        'Modules' => array(
            'className' => 'Module',
            'foreignKey'=>'course_id'
        )
    );

}