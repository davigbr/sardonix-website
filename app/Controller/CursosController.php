<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of CursoController
 *
 * @author Shariath
 */
class CursosController extends AppController {

    public function index() {
        $this->redirect('/servicos');
    }
    
    public function getPageName() {
        return 'Cursos';
    }

}
