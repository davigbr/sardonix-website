<?php

class Matriculation extends AppModel {

    public $validate = array(
        'name' => array(
            'rule' => 'notEmpty', 'message' => 'Campo obrigatório.'
        ),
        'phone' => array(
            'rule' => 'notEmpty', 'message' => 'Campo obrigatório.'
        ),
        'cellphone' => array(
            'rule' => 'notEmpty', 'message' => 'Campo obrigatório.'
        ),
        'email' => array(
            'rule' => 'email', 'message' => 'E-mail inválido.'
        )
    );

}