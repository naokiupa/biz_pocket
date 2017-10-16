<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/3.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('Security');`
     *
     * @return void
     */
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');
        if ($this->request->prefix == 'admin') {
            $this->loadComponent('Auth', [
                'loginAction' => [
                    'controller' => 'Staffs',
                    'action' => 'login',
                ],
                'loginRedirect' => [
                    'controller' => 'Staffs',
                    'action' => 'index',
                ],
                'logoutRedirect' => [
                    'controller' => 'Staffs',
                    'action' => 'login',
                ],
                'authenticate' => [
                    'Form' => [
                        'userModel' => 'Staffs',
                        'fields' => ['username' => 'login_name', 'password' => 'password']
                    ]
                ]
            ]);
            $this->Auth->sessionKey = 'Admin';
        } else if ($this->request->prefix == 'doctor') {
            $this->loadComponent('Auth', [
                  'loginAction' => [
                      'controller' => 'Pages',
                      'action' => 'loginDoctor',
                  ],
                  'loginAction' => [
                      'controller' => 'Pages',
                      'action' => 'loginDoctor',
                  ],
                  'loginRedirect' => [
                      'controller' => 'Pages',
                      'action' => 'display',
                      'index'
                  ],
                  'logoutRedirect' => [
                      'controller' => 'Pages',
                      'action' => 'exitDoctor',
                  ],
                  'authenticate' => [
                      'Form' => [
                          'userModel' => 'Doctors',
                          'fields' => ['username' => 'login_name', 'password' => 'password']
                      ]
                  ]
            ]);
            $this->Auth->sessionKey = 'Doctor';
        } else {
          $this->loadComponent('Auth');
        }

        /*
         * Enable the following components for recommended CakePHP security settings.
         * see https://book.cakephp.org/3.0/en/controllers/components/security.html
         */
        //$this->loadComponent('Security');
        //$this->loadComponent('Csrf');
    }

    public function beforeFilter(Event $event)
    {
        // $this->Auth->allow(['index', 'view', 'display']);
        $this->Auth->allow();
        var_dump($this->Auth->sessionKey);
    }
    //...

    /**
     * Before render callback.
     *
     * @param \Cake\Event\Event $event The beforeRender event.
     * @return \Cake\Http\Response|null|void
     */
    public function beforeRender(Event $event)
    {
        // Note: These defaults are just to get started quickly with development
        // and should not be used in production. You should instead set "_serialize"
        // in each action as required.
        if (!array_key_exists('_serialize', $this->viewVars) &&
            in_array($this->response->type(), ['application/json', 'application/xml'])
        ) {
            $this->set('_serialize', true);
        }
    }
}
