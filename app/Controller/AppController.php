<?php

/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2011, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
App::uses('Controller', 'Controller');
App::uses('CakeEmail', 'Network/Email');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

    public $helpers = array('Html', 'Session', 'Form');
    public $languages = array('ENGLISH', 'ITALIAN', 'PORTUGUESE');
    public $types = array('REGULAR', 'INTENSIVE', 'ESPECIAL');
    public $uses = array('Testimonial', 'New');
    //svn revision
    public $version = 9;
    //deploy variables
    public $compress = false;

    public function beforeFilter() {
        parent::beforeFilter();

        $this->set('compress', $this->compress);
        $this->set('version', $this->version);
        $this->set('title_for_layout', "Sardonix Idiomas | Inglês, Italiano e Português | {$this->getPageName()}");
        $this->set('description', "Cursos de Inglês, Italiano e Português em Novo Hamburgo | {$this->getPageName()} | Sardonix Idiomas");
        $this->set('keywords', 'cursos de idiomas, ingles, italiano, portugues, aulas particulares, grupos pequenos');
        $this->set('cep', '93520-000');
        $this->set('lat', -29.680013);
        $this->set('lng', -51.12933);
        $this->set('address', 'Rua Bento Gonçalves, 3027, Loja 1, Centro, Novo Hamburgo - RS');
        $this->set('email', 'contato@sardonixidiomas.com');
        $this->set('phone', '(51) 3066-8188');
        $news = $this->New->find('all', array('order' => 'datetime DESC'));
        $this->set('news', $news);
        $url = '';
        if (!($this->params['controller'] == 'pages' && $this->params['action'] == 'home')) {
            $url .= $this->params['controller'] . '/';
            if ($this->params['action'] != 'index') {
                $url .= $this->params['action'];
            }
        }
        $this->set('url', $url);
        $this->set('testimonials', $this->Testimonial->find('all'));


        $cursos = array(
            'Comunicação' => 'O formato Comunicação é planejado para as pessoas que querem aprender as formas de comunicação e expressão do quotidiano. O idioma é direcionado para a conversação diária, também com foco na estrutura, mas com mais ênfase nas situações comunicativas e práticas.',
            'Comercial' => 'O formato Comercial foca o idioma utilizado em organizações, ou seja; o idioma comercial. Além do vocabulário especialmente selecionado para o mundo empresarial, esse formato também trabalha com estrutura e situações comunicativas do quotidiano no mundo dos negócios.',
            'Profissional' => 'O formato Profissional é totalmente orientado para estrutura e moldado para alunos que pretendem fazer provas de proficiência em língua estrangeira, como por exemplo: TOEIC, PET, IELTS e TOEFL.',
            'Dinâmico' => 'O formato Dinâmico é um “coringa”, pois, ele se adaptará às necessidades específicas de cada aluno sendo que esse pode ser direcionado para o formato Comunicação, Comercial ou Profissional. Existe um aumento significativo da carga horária para que o objetivo seja alcançado – um aprendizado em um tempo menor.'
        );
        $this->set('cursos', $cursos);
    }

    public function getPageName() {
        return 'Home';
    }

}
