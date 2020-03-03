<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Usermodel extends CI_Model {
 
 public function inquiry_insert($data)
 {
    $this->db->insert('user_application',$data);
 }
 public function fetchnews()
 {
 	$q=$this->db->select()
 	            ->from('news')
 	            ->get();
 	            return $q->result();
 }
 public function checkemail($email)
 {
 	$q=$this->db->select()
                ->where('email',$email)
 	            ->from('user')
 	            ->get();
 	            return $q->num_rows();

 }
 public function insertregister($data)
 {
 	$this->db->insert('user',$data);
 }
 public function check_login($email,$password)
 {
 	$q=$this->db->select()
 	            ->where('email',$email)
 	            ->where('password',$password)
 	            ->from('user')
 	            ->get();
 	            return $q->num_rows();
 }

public function rank_insert($data)
{
	$this->db->insert('rank',$data);
}
public function fetchbanner()
{
	$q=$this->db->select()
	            ->from('banner')
	            ->get();
	            return $q->result();
}
public function fetchallblog()
{
	$q=$this->db->select()
	            ->from('blog')
	            ->get();
	            return $q->result();
}
public function fetchallblogdetail($id)
{
  $q=$this->db->select()
              ->from('blog')
              ->where("id",$id)
              ->get();
              return $q->row();
}
public function insert_contact($data)
{
  $this->db->insert('user_application',$data);
}











}
