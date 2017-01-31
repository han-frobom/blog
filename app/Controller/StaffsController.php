<?php
	class StaffsController extends AppController
	{
		public function add()
		{
			if($this->request->is('post'))
			{
				//$this->Staff->create();
				$data=$this->data;
				//debug($data);
				$result=$this->Staff->save($data);
				if($result)
				{
					$this->Flash->success(__("Success"));					
				// }
				else
				{
					$this->Flash->error(__("Failed"));
				}
			}
		}
	}
?>