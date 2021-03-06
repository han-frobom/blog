<?php
class PostsController extends AppController
{
	public $helpers = array('Html', 'Form');
	public $components = array('Paginator');
	public function view($id = null) {
		$user_id=$this->Auth->user('id');
		$username=$this->Auth->user('username');
		if (!$user_id) {
			throw new NotFoundException(__('Invalid post'));
		}
		if (!empty($this->request->data['Comment'])) {
			$this->request->data['Comment']['class'] = 'Post';
			$this->request->data['Comment']['foreign_id'] = $id;
			$this->request->data['Comment']['name'] = $username;
			$this->Post->Comment->create();
			if ($this->Post->Comment->save($this->request->data)){
				$this->Flash->success(__('The Comment has been saved.', true),'success');
				$this->redirect(array('action'=>'view',$id));
			}
			$this->Flash->error(__('The Comment could not be saved. Please, try again.', true),'warning');
		}
			$post = $this->Post->read(null, $id); // contains $post['Comments']
			$this->set(compact('post'));
			$post = $this->Post->findById($id);
			if (!$post) {
				throw new NotFoundException(__('Invalid post'));
			}
			$this->set('post', $post);
		}
		public function index() {
		/*$this->layout='default';
	$this->set('posts', $this->Post->find('all'),
		array(
			'order'=>array('post.id'=>'des')
			));*/
			$this->Post->recursive=0;
			$this->paginate=array(
				'limit' => 9,
				'order' => array('created' => 'desc'));
			$this->set('posts',$this->paginate());
			if ($this->request->is(array('post', 'put'))) {
				$this->Post->id = $id;
				if ($this->Post->save($this->request->data)) {
					$this->Flash->success(__('Your post has been updated.'));
					return $this->redirect(array('action' => 'login'));
				}
			}
		}

/*$this->set('posts',$this->Post->find('all',array('conditions'=>array('Post.user_id'=>$this->Auth->user('id')))));
*/
public function edit($id = null) {
	if (!$id) {
		throw new NotFoundException(__('Invalid post'));
	}
	$post = $this->Post->findById($id);
	if (!$post) {
		throw new NotFoundException(('Invalid post'));
	}
	if ($this->request->is(array('post', 'put'))) {
		$this->Post->id = $id;
		$filePath="./img/posts/".$this->request->data['Post']['image']['name'];
		$filename=$this->request->data['Post']['image']['tmp_name'];
		if(move_uploaded_file($filename, $filePath)) {
			$this->request->data['Post']['imagePath']=$this->request->data['Post']['image']['name'];
		}
		/* $this->request->data['Post']['user_id'] = $this->Auth->user('id');*/
		$result=$this->Post->save($this->request->data);
		if ($result) {
			$this->Flash->success(('Your post has been updated.'));
			return $this->redirect(array('controller' =>'Posts','action' => 'manage'));
		}
		$this->Flash->error(('Unable to update your post.'));
	}
	if (!$this->request->data) {
		$this->request->data = $post;
	}
}
function uploadimg($id = null) {
	header('Content-type: image/jpeg');
	$posts = $this->Post->findById($id);
	echo $posts['Post']['image'];
}
public function cmt() {
	if ($this->request->is('post'))
	{
		$this->Post->create();
		if ($this->Post->save($this->request->data))
		{
			$this->Flash->success(__('Your post has been saved.'));
			return $this->redirect(array('action' => 'show'));
		}
		$this->Flash->error(__('Unable to add your post.'));
	}
	return $this->redirect(array('action' => 'index'));
}
public function add() {
	if ($this->request->is('post')) {
		$this->Post->create();
		$filePath="./img/posts/".$this->request->data['Post']['image']['name'];
		$filename=$this->request->data['Post']['image']['tmp_name'];
		if(move_uploaded_file($filename, $filePath)){
			echo "File Uploaded Successfully";
			$this->request->data['Post']['imagePath']=$this->request->data['Post']['image']['name'];
			$this->request->data['Post']['user_id'] = $this->Auth->user('id');
				//debug($this->request->data);
			$result=$this->Post->save($this->request->data);
			if ($result) {
				$this->Flash->success(__('Your post has been saved.'));
				return $this->redirect(array('controller' =>'Posts','action' => 'index'));
			}}
		}
		$this->set('title_for_layout','Add a Post');
	}
	public function delete($id) {
		if ($this->request->is('get')) {
			throw new MethodNotAllowedException();
		}
		if ($this->Post->delete($id)) {
			$this->Flash->success(
				__('The post with id: %s has been deleted.', h($id))
				);
		} else {
			$this->Flash->error(
				__('The post with id: %s could not be deleted.', h($id))
				);
		}
			//return $this->redirect(array('action' => 'index'));
		return $this->redirect(array('controller' =>'Posts','action' => 'index'));
	}
	public function manage() {
		$this->Post->find('all', array(
			'conditions' => array('Post.user_id'=>$this->Auth->user('id'))));
		$this->paginate=array(
			'limit' => 3,
			'order' => array('created' => 'desc'));
		$this->set('posts',$this->paginate());
	}
}
?>