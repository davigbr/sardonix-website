<?php

class TestExecution extends AppModel {

    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty', 'message' => 'Campo obrigatório.'
        ),
        'email' => array(
            'rule' => 'email', 'message' => 'E-mail inválido.'
        )
    );

}