<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adminmodel extends CI_Model {
   

public function checklogin($email,$password)
{
	$q=$this->db->select()
	         ->where('email',$email)
	         ->where('password',$password)
	         ->from('admin')
	         ->get();
	       return $q->num_rows(); 
}

public function user_application_fetch()
{
	$q=$this->db->select()
	            ->from('user_application')
	            ->get();
	            return $q->result();
}

public function insert_news($data)
{
	$this->db->insert('news',$data);
}


public function fetch_news()
{
	$q=$this->db->select()
	            ->from('news')
	            ->get();
	            return $q->result();
}
public function delete_news($id)
{
	$this->db->where('id',$id)
	          ->delete('news');
} 
public function insert_banner($data)
{
	$this->db->insert('banner',$data);
}
public function fetch_banner()
{

	$q=$this->db->select()
	            ->from('banner')
	            ->get();
	            return $q->result();

}
public function delete_banner($id)
{
	$this->db->where('id',$id)
	          ->delete('banner');
} 

public function rank_predictor_fetch()
{
	$q=$this->db->select()
	         ->from('rank')
	         ->get();
	         return $q->result();
}
public function insert_blog($data)
{
   $this->db->insert('blog',$data);
}
public function fetchblog()
{
	$q=$this->db->select()
	         ->from('blog')
	         ->get();
	         return $q->result();
}
public function delete_blog($id)
{
	$this->db->where('id',$id)
	         ->from('blog')
	         ->delete();
}
public function fetcheditblog($id)
{
	$q=$this->db->select()
	         ->from('blog')
	         ->where('id',$id)
	         ->get();
	        return $q->row();
}
public function update_blog($data)
{
	$this->db->update('blog',$data);
}















}
