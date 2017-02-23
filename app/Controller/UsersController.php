<?php
class UsersController extends AppController
{
  public function beforeFilter() {
    parent::beforeFilter();
    // Allow users to register and logout.
    $this->Auth->allow('add', 'logout');
}

public function login()
        {
            if($this->request->is('post'))
            {
                if($this->Auth->login())
                {
                    //return $this->redirect($this->Auth->redirectUrl());
                    //$this->Flash->success(__('Success'));
                  //debug('success');
                  return $this->redirect('../posts/index');
                }else{
                  debug('not success');
                }
                $this->Flash->error(__('Invalid username or password, try again.'));
            }
        }

public function logout() {
    return $this->redirect($this->Auth->logout());
}
    

    public function index() {
       $this->User->recursive = 0;
       $this->set('users', $this->paginate());
   }

   public function view($id = null) {
       $this->User->id = $id;
       if (!$this->User->exists()) {
           throw new NotFoundException(__('Invalid user'));
       }
       $this->set('user', $this->User->findById($id));
   }

   public function add() {
    
    if ($this->request->is('post')) {
         $this->User->create();
         if ($this->User->save($this->request->data)) {
             $this->Flash->success(__('The user has been saved'));
             return $this->redirect(array('action' => 'login'));
         }
         $this->Flash->error(
             __('The user could not be saved. Please, try again.')
         );
     }
   
 }

   
}
?>