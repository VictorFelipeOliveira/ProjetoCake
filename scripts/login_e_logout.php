public function login(){
        if($this->request->is('post')){
            $user=$this->Auth->identify();
            if($user){
                $this->Auth->setUser($user);
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('Usuario ou senhas invalidos, tente novamente'));
        }
    }

    public function logout(){
        return $this->redirect($this->Auth->logout());
    }
