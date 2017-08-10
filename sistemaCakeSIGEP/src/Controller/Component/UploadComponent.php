<?php
namespace App\Controller\Component;

use Cake\Controller\Component;
use Cake\Controller\ComponentRegistry;
use Cake\Network\Exception\InternalErrorException;
use Cake\Utility\Text;
use Cake\ORM\TableRegistry;

/**
 * Upload component
 */
class UploadComponent extends Component
{
    public $max_files = 1;

    public function upload($data,$project){
        if(count($data) > $this->max_files){
            $this->_registry->getController()->Flash->error('Limite de Arquivos Excedidos');
            return $this->_registry->getController()->redirect(['controller' => 'projects', 'action' => 'add']);
        }

        foreach ($data as $file) {
            $filename = $file['name'];
            $file_tmp_name = $file['tmp_name'];
            $file_ext = substr(strchr($filename,'.'), 1);
            $dir = WWW_ROOT.'files';
            $type_allowed = array('pdf','jpg','jpeg','png');

            if (!in_array($file_ext, $type_allowed)) {
                $this->_registry->getController()->Flash->error('Tipo de Arquivo nao permitido: "'.$file['type'].'"');
                return $this->_registry->getController()->redirect(['action' => 'add']);
            }
            elseif (is_uploaded_file($file_tmp_name)) {
                $filename = Text::uuid().'.'.$file_ext;
                $file_db = TableRegistry::get('Projects');
                $entity = $file_db->newEntity();
                $entity->filename = $filename;
                $entity->resumo = $project->resumo;
                $entity->evento = $project->evento;
                $entity->title = $project->title;
                $entity->standard_id = $project->standard_id;
                $file_db->save($entity);
                move_uploaded_file($file_tmp_name, $dir.DS.$filename);

            } else {
                $this->_registry->getController()->Flash->error(__('O arquivo nao pode ser salvo, tente novamente'));
                return $this->_registry->getController()->redirect(['action' => 'index']);
            }
        }
        $this->_registry->getController()->Flash->success('Arquivo salvo com sucesso');
        return $this->_registry->getController()->redirect(['action' => 'index']);

    }

}
