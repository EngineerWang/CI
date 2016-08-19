<?php
	class Blog_model extends CI_Model{
		public function get_articles(){
			$this->db->order_by('time', 'DESC');
			$query = $this->db->get('article');
			return $query->result();
		}
		public function del($blogid){
			$query = $this->db->delete('article', array('blogid'=>$blogid));
			return $query;
		}
		public function get_article($blogid){
			$this->db->order_by('time', 'DESC');
			$query = $this->db->get_where('article', array('blogid'=>$blogid));
			return $query->row();
		}
		public function update($blogid, $title, $content){
			$data = array(
				'blogid'=>$blogid,
				'title'=>$title,
				'content'=>$content
			);
			$query = $this->db->replace('article', $data);
			return $query;
		}
		public function add($title, $content, $type){
			$now = date('Y-m-d');
			$data = array(
				'title'=>$title,
				'content'=>$content,
				'type'=>$type,
				'time'=>$now
			);
			$query = $this->db->insert('article', $data);
			return $query;
		}
		public function go_info($blogid){
			$this->db->set('hids', 'hids+1', FALSE);
			$this->db->where('blogid', $blogid);
			$query = $this->db->update('article');
			$query = $this->db->get_where('article', array('blogid'=>$blogid));
			return $query->row();
		}
		public function cha_type($blogid, $type){
			$this->db->where('blogid', $blogid);
			$query = $this->db->update('article', array('type'=>$type));
			return $query;
		}
	}
?>