<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admincontroller extends CI_Controller {

	  function __construct()
   {
   	        parent::__construct();
   	        $this->load->Model('Adminmodel');

   	           if(!$email=$this->session->userdata('email'))
                    {
                         return redirect('Welcome/index');
                    }
   	        
   }

public function index()
	{
		$this->load->view('index');
	}
public function user_application()
	{

		$data['userapplication']=$this->Adminmodel->user_application_fetch();
		 $this->load->view('user-application',$data);
		 
	}
public function news()
	{    
		$data['news']=$this->Adminmodel->fetch_news();
		$this->load->view('news',$data);
	}
public function insertnews()
	{
		$data=$this->input->post();
		date_default_timezone_set('asia/kolkata');
        $date=date('d/m/y h:i');
        $data['dateandtime']=$date;
		$this->Adminmodel->insert_news($data);
		$this->session->set_flashdata('insert_news_alt',"msg");
		return redirect('Admincontroller/news');

	}
public function deletenews($id)
{
	$this->Adminmodel->delete_news($id);
	$this->session->set_flashdata('delete_news_alt',"msg");
    return redirect('Admincontroller/news');
}

public function banner()
	{    
		$data['banner']=$this->Adminmodel->fetch_banner();
		$this->load->view('banner',$data);
	}

public function insertbanner()
{

	$config['upload_path']   ='../upload/';
	$config['allowed_types']  ='gif|jpg|png|jpeg'; 
	$this->load->library('upload',$config);

	if($this->upload->do_upload('image'))
	{
		$image_path=$this->upload->data();
		$image=$image_path['raw_name'].$image_path['file_ext'];

		$data=$this->input->post();
		$data['image']=$image;

		$this->Adminmodel->insert_banner($data);
	    $this->session->set_flashdata('insert_banner_alt',"msg");
		 return redirect('Admincontroller/banner');
	}

	else
	{
		 $this->session->set_flashdata('error_banner_alt',"msg");
		 return redirect('Admincontroller/banner');
	}
}

public function deletebanner($id)
{
  $this->Adminmodel->delete_banner($id);
	$this->session->set_flashdata('delete_banner_alt',"msg");
    return redirect('Admincontroller/banner');

}
public function rankpredictor()
{   
	$data['rankdata']=$this->Adminmodel->rank_predictor_fetch();
	$this->load->view('rank-predictor',$data);
}
public function blog()
{
	$data['blog']=$this->Adminmodel->fetchblog();
	$this->load->view('blog',$data);
}
public function insertblog()
{
  $data=$this->input->post();
   date_default_timezone_set('asia/kolkata');
   $date=date('d/m/Y');
   $data['date']=$date;
  $config['upload_path']          = '../upload/';
  $config['allowed_types']        = 'gif|jpg|png|jpeg';

    $this->load->library('upload', $config);

 if ($this->upload->do_upload('image'))
     {
         $post=$this->upload->data();
         $blog_image=$post['raw_name'].$post['file_ext'];
         $data['image']=$blog_image;
         $this->Adminmodel->insert_blog($data); 
         $this->session->set_flashdata('insertblogalt','msg');           
         return redirect('Admincontroller/blog');
       }

    else
    {
    	 $this->session->set_flashdata('insertblogalt2','msg');           
         return redirect('Admincontroller/blog');
    }

}
public function deleteblog($id)
{
   $this->Adminmodel->delete_blog($id); 
   $this->session->set_flashdata('deleteblogalt','msg');           
    return redirect('Admincontroller/blog');
}
public function editblog($id)
{
	$data['editblogdata']=$this->Adminmodel->fetcheditblog($id);
	$this->load->view('editblog',$data);
}
public function updateblog()
{

  $data=$this->input->post();
  date_default_timezone_set('asia/kolkata');
   $date=date('d/m/Y');
  $data['date']=$date;
  $config['upload_path']          = '../upload/';
  $config['allowed_types']        = 'gif|jpg|png|jpeg';

    $this->load->library('upload', $config);

 if ($this->upload->do_upload('image'))
     {
         $post=$this->upload->data();
         $blog_image=$post['raw_name'].$post['file_ext'];
         $data['image']=$blog_image;
         $this->Adminmodel->update_blog($data); 
         $this->session->set_flashdata('updateblogalt','msg');           
         return redirect('Admincontroller/blog');
       }

    else
    {
    	  $this->Adminmodel->update_blog($data); 
          $this->session->set_flashdata('updateblogalt2','msg');           
          return redirect('Admincontroller/blog');
    }

 

}





}
