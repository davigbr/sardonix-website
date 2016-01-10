<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Testenivel
 *
 * @author Shariath
 */
class TestenivelController extends AppController {

    public $uses = array('Test', 'TestExecution');

    public function index() {
        if (!empty($this->request->data) && $this->request->is('post')) {
            if ($this->TestExecution->save($this->request->data)) {
                $this->Session->write('test_execution', $this->data['TestExecution']);

                $language = $this->request->data['TestExecution']['language'];
                $module = $this->request->data['TestExecution']['module_id'];

                $this->redirect('/testenivel/teste');
            }
        }
    }

    public function teste() {
        $test = $this->Session->read('test_execution');
        if ($test == null) {
            $this->redirect('/testenivel');
        } else {

            $answers = '';
            
            if (!empty($this->request->data)) {
                if ($test == null) {
                    $this->redirect('/testenivel');
                } else if ($this->request->is('post')) {

                    $right_answers = 0;
                    $wrong_answers = 0;

                    $questions = $this->Test->find('all', array('conditions'=>array('module_id'=>$test['module_id'])));
                    for ($i = 0; $i < sizeof($questions); $i++) {
                        $question = &$questions[$i];
                        $number = $question['Test']['number'];
                        if (isset($this->request->data['question-' . $number])) {
                            $answer = $this->request->data['question-' . $number];
                        } else {
                            $answer = null;
                        }
                        $question['Test']['answer'] = $answer;
                        if ($answer == $question['Test']['right_alternative']) {
                            $question['Test']['right'] = true;
                            $right_answers++;
                        } else {
                            $question['Test']['right'] = false;
                            $wrong_answers++;
                        }
                        if ($answers != '') {
                            $answers .= '-';
                        }
                        $answers .= strtoupper($answer);
                    }

                    $test['right_answers'] = $right_answers;
                    $test['wrong_answers'] = $wrong_answers;
                    $test['answers'] = $answers;
                    $this->TestExecution->save(array('TestExecution' => $test));

                    $final_result = number_format(100 * $right_answers / ($right_answers + $wrong_answers), 2);
                    
                    $this->set('right_answers', $right_answers);
                    $this->set('wrong_answers', $wrong_answers);
                    $this->set('questions', $questions);
                    $this->set('final_result', $final_result);
                    $this->set('language', 'Inglês');

                    //Envia um email
                    $email = new CakeEmail();
                    $email->config('default');
                    $email->from(array('contato@sardonixidiomas.com' => 'Sardonix Idiomas'));
                    $email->to('contato@sardonixidiomas.com');
                    $email->subject("Teste de Nível - " . $test['name']);

                    $date = new DateTime();
                    $message = "Nome: " . $test['name'] . "\n\n";
                    $message .= "Idioma: " . $this->getLanguage($test['language']) . "\n\n";
                    $message .= "Nível: " . $this->getLanguage($test['module_id']) . "\n\n";
                    $message .= "E-mail: {$test['email']} \n\n";
                    $message .= "Realizado em: " . $date->format('d/m/Y H:i:s') . "\n\n";
                    $message .= "Respostas corretas: $right_answers\n\n";
                    $message .= "Respostas incorretas: $wrong_answers\n\n";
                    $message .= "Respostas: $answers\n\n";
                    $message .= "Resultado final: $final_result%";
                    $email->send($message);
                    $this->render('resultado');
                }
            } else {
                $this->set('language', $this->getLanguage($test['language']));
                $this->set('questions', $this->Test->find('all', array('conditions' => array('module_id' => $test['module_id']))));
            }
        }
    }

    public function getLanguage($language) {
        if ($language == 'english') {
            $language = 'Inglês';
        } else if ($language == 'italian') {
            $language = 'Italiano';
        } else if ($language == 'portuguese') {
            $language = 'Português';
        }
        return $language;
    }

    public function getPageName() {
        return 'Teste de Nível';
    }

}

?>
