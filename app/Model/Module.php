<?php

class Module extends AppModel {

    public $belongsTo = array('Course');
    public $hasMany = array('Groups' =>
        array(
            'className' => 'Group',
            'foreignKey' => 'module_id_current',
            'order' => 'starting_date DESC'
        )
    );

}