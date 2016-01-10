<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MatriculaController
 *
 * @author Shariath
 */
class MatriculaController extends AppController {

    public $uses = array('Matriculation');

    public function getPageName() {
        return 'Matrícula';
    }

    public function index() {

        if (!empty($this->data)) {
            if ($this->request->is('post')) {
                $data = $this->request->data;
                if ($this->Matriculation->save($data)) {
                    $email = new CakeEmail();
                    $email->config('default');
                    $email->from(array('contato@sardonixidiomas.com' => 'Sardonix Idiomas | Automático'));
                    $email->to('contato@sardonixidiomas.com');
                    $email->subject("Matrícula - {$data['Matriculation']['name']} ");

                    $cursos = '';
                    if (isset($data['Matriculation']['english'])) {
                        $cursos .= 'Inglês; ';
                    }
                    if (isset($data['Matriculation']['italian'])) {
                        $cursos .= 'Italiano; ';
                    }
                    if (isset($data['Matriculation']['portuguese'])) {
                        $cursos .= 'Português; ';
                    }

                    $date = new DateTime();
                    $message = "Nome: {$data['Matriculation']['name']}\n\n";
                    $message .= "Telefone: {$data['Matriculation']['phone']}\n\n";
                    $message .= "Celular: {$data['Matriculation']['cellphone']}\n\n";
                    $message .= "Idiomas de interesse: $cursos\n\n";
                    $message .= "E-mail: {$data['Matriculation']['email']} \n\n";
                    $message .= "Soube: {$data['Matriculation']['where']}\n\n";
                    $message .= "Acessou em: " . $date->format('d/m/Y H:i:s');
                    $email->send($message);
                    $this->render('enviado');
                }
            }
        }
    }

}

?>
