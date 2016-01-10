<?php

class Group extends AppModel {

    public $belongsTo = array('CurrentModule' =>
        array(
            'className' => 'Module',
            'foreignKey' => 'module_id_current'
        )
    );

}