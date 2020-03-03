<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->Model('Usermodel');
	}

	public function register() 
{
	$this->load->view('register');
}
public function login()
{
	$this->load->view('login');
} 
public function registerform()
{
	 
	$password=$this->input->post('password');
    $cpassword=$this->input->post('cpassword');
    $email=$this->input->post('email');

    $checkemail=$this->Usermodel->checkemail($email);
 
    if($checkemail>0)
    {
      $this->session->set_flashdata('email_exist','msg');
		return redirect('Welcome/login');
    }
    else if (!($password==$cpassword)) 
    {
      $this->session->set_flashdata('password_error','msg');
		return redirect('Welcome/register');
    }

    else
    {
    	$data=$this->input->post();
    	$this->Usermodel->insertregister($data);
        $this->session->set_flashdata('registersucc','msg');
        return redirect('Welcome/login');


    }

	
}
public function checklogin()
{
    $email=$this->input->post('email');
    $password=$this->input->post('password');
     $check_login= $this->Usermodel->check_login($email,$password);
     if($check_login)
     {
     	$this->session->set_userdata('email',$email);
     	 return redirect('Welcome/index');
     }
     else
     {
           $this->session->set_flashdata('wronguserpass','msg');
	      return redirect('Welcome/login');
     }

}
public function loginout()
{
	session_destroy();
	 return redirect('Welcome/login');
}






public function index()
{ 
	$data['news']=$this->Usermodel->fetchnews();
	$data['news2']=$this->Usermodel->fetchnews();
	$data['banner']=$this->Usermodel->fetchbanner();
	$this->load->view('index',$data);
}
public function student_card()
{
	$title['title']="Student Credit Card";
	$this->load->view('student-card',$title);
}
public function inquiry()
{
		$data=$this->input->post();
	    date_default_timezone_set('asia/kolkata');
		$date=date('d/m/y h:i');
		$data['dateandtime']=$date; 
		$this->Usermodel->inquiry_insert($data);
		$this->session->set_flashdata('inquiry_alt','msg');
		return redirect('Welcome/index');

}
public function engineering()
{
	 $this->load->view('engineering');
}
public function applynow()
{
		$this->load->view('apply');
}
public function pg_abroad()
{
	$this->load->view('pg-abroad');
}
public function pg_india()
{
	$this->load->view('pg-india');
}
public function mbbs_abroad()
{
	$this->load->view('mbbs-abroad');
}
public function mba_abroad()
{
	$this->load->view('mba-abroad');
}
public function mba_india()
{
	$this->load->view('mba-india');
}
public function neetpgrankpredictor()
{
	$this->load->view('neet-pg-rank-predictor');
}
public function jeemainrankpredictor()
{
	$this->load->view('jee-main-rank-predictor');
}
public function mbapgdm()
{
	$title['title']="MBA PGDM ADMISSION";
	$this->load->view('mba-pgdm',$title);

}

public function mbbsbangladesh()
{ 
	 $title['title']="MBBS IN BANGLADESH";
	$this->load->view('mbbs-bangladesh',$title);
}
public function mbbschina()
{
    $title['title']="MBBS IN CHINA";
	$this->load->view('mbbs-china',$title);
}
public function mbbsgeorgia()
{    $title['title']="MBBS IN GEORGIA";
	$this->load->view('mbbs-georgia',$title);
}
public function mbbskazakhstan()
{
	$title['title']="MBBS IN KAZAKHSTAN";
	$this->load->view('mbbs-kazakhstan',$title);
}
public function mbbskrzysthan()
{ 
	$title['title']="MBBS IN KRZYSTHAN";
	$this->load->view('mbbs-krzysthan',$title);
}
public function mbbsindia()
{
	$title['title']="MBBS IN INDIA";
	$this->load->view('mbbs-india',$title);
}
public function engineeringinindia()
{
	$title['title']="ENGINEERING IN INDIA";
	$this->load->view('engineering-in-india',$title);
}
public function mdmsadmission()
{
	$title['title']="MD MS ADMISSION / NEET PG 2020";
	$this->load->view('md-ms-admission',$title);
}
public function rankinsert()
{
	$data=$this->input->post();
	date_default_timezone_set('asia/kolkata');
	$date=date('d/m/y h:i');
	$data['dateandtime']=$date;
	$this->Usermodel->rank_insert($data);
    $this->session->set_flashdata('rank_alt','msg');
	return redirect('Welcome/index');

}
public function studymedicalinchina()
{
	$this->load->view('study-medical-in-china');
}
public function nepalmbbsadmission()
{
	$this->load->view('nepal-mbbs-admission');
}
public function kyrgyzstanmbbsadmissions()
{
	$this->load->view('kyrgyzstan-mbbs-admissions');
}
public function mbbsadmissionskazakhstan()
{
	$this->load->view('mbbs-admissions-kazakhstan');
}
public function graduatemedicalcoursesinrussia()
{
	$this->load->view('graduate-medical-courses-in-russia');
}
public function mbbsadmissioninindia()
{
	$this->load->view('mbbs-admission-in-india');
}
public function studymedicalinbangladesh()
{
	$this->load->view('study-medical-in-bangladesh');
}
public function mbbsadmissionsmalaysia()
{
	$this->load->view('mbbs-admissions-malaysia');
}
public function medicalschoolsingeorgia()
{
	$this->load->view('medical-schools-in-georgia');
}
public function medicineeducationphilippines()
{
	$this->load->view('medicine-education-philippines');
}
public function studymedicineinsingapore()
{
	$this->load->view('study-medicine-in-singapore');
}
public function slovakia()
{
	$this->load->view('slovakia');
}
public function mbbsinbelaruseurope()
{
	$this->load->view('mbbs-in-belarus-europe');
}
public function studymbbsengland()
{
	$this->load->view('study-mbbs-england');
}
public function mbbsadmissionsinitaly()
{
	$this->load->view('mbbs-admissions-in-italy');
}
public function mbbsinukraineadmission()
{
	$this->load->view('mbbs-in-ukraine-admission');
}
public function scholarshipsformbbsinspain()
{
	$this->load->view('scholarships-for-mbbs-in-spain');
}
public function mbbsdegreenetherlands()
{
	$this->load->view('mbbs-degree-netherlands');
}
public function studymbbsbdsmdromania()
{
	$this->load->view('study-mbbs-bds-md-romania');
}
public function mbbsmedicalcollegesinfrance()
{
	$this->load->view('mbbs-medical-colleges-in-france');
}
public function mbbseuropelithuania()
{
	$this->load->view('mbbs-europe-lithuania');
}
public function mbbsadmissionireland()
{
	$this->load->view('mbbs-admission-ireland');
}
public function mbbsmedicineadmissionsguyana()
{
	$this->load->view('mbbs-medicine-admissions-guyana');
}
public function mbbsadmissionbrazil()
{
	$this->load->view('mbbs-admission-brazil');
}
public function mbbsadmissioninbelizeenindia()
{
	$this->load->view('mbbs-admission-in-belize-en-india');
}
public function medicaladmissionservices()
{
	$this->load->view('medical-admission-services');
}
public function educationconsultancyservice()
{
	$this->load->view('education-consultancy-service');
}
public function medicalcouncilofindiascreeningtest()
{
	$this->load->view('medical-council-of-india-screening-test');
}
public function unitedstatesmedicallicensingexamination()
{
	$this->load->view('united-states-medical-licensing-examination');
}
public function ukclinicalaptitudetest()
{
	$this->load->view('uk-clinical-aptitude-test');
}
public function ukplab()
{
	$this->load->view('uk-plab');
}
public function greandtoefltest()
{
	$this->load->view('gre-and-toefl-test');
}
public function internationalenglishlanguagetestingsystem()
{
	$this->load->view('/international-english-language-testing-system');
}
public function shenyangmedicalcollege()
{
	$this->load->view('shenyang-medical-college');
}
public function shaanxiuniversityofchinesemedicine()
{
	$this->load->view('shaanxi-university-of-chinese-medicine');
}
public function nanjinguniversityofchinesemedicine()
{
	$this->load->view('nanjing-university-of-chinese-medicine');
}
public function jiangxiuniversityoftraditionalchinesemedicine()
{
	$this->load->view('jiangxi-university-of-traditional-chinese-medicine');
}
public function hunannormaluniversity()
{
	$this->load->view('hunan-normal-university');
}
public function hubeiuniversityofmedicine()
{
	$this->load->view('hubei-university-of-medicine');
}
public function gulinmedicaluniversity()
{
	$this->load->view('gulin-medical-university');
}
public function tianjinmedicaluniversity()
{
	$this->load->view('tianjin-medical-university');
}
public function jiamusiuniversity()
{
	$this->load->view('jiamusi-university');
}
public function kunmingmedicaluniversity()
{
	$this->load->view('kunming-medical-university');
}
public function shiheziuniversity()
{
	$this->load->view('shihezi-university');
}
public function hebeiuniteduniversity()
{
	$this->load->view('hebei-united-university');
}
public function daliuniversitymedicalcollege()
{
	$this->load->view('dali-university-medical-college');
}
public function hebeimedicaluniversity()
{
	$this->load->view('hebei-medical-university');
}
public function weifangmedicaluniversity()
{
	$this->load->view('weifang-medical-university');
}
public function qingdaouniversity()
{
	$this->load->view('qingdao-university');
}
public function beihuauniversity()
{
	$this->load->view('beihua-university');
}
public function lanzhouuniversity()
{
	$this->load->view('lanzhou-university');
}
public function luzhoumedicalcollege()
{
	$this->load->view('luzhou-medical-college');
}
public function capitalmedicaluniversity()
{
	$this->load->view('capital-medical-university');
}
public function tongjiuniversity()
{
	$this->load->view('tongji-university');
}
public function centralsouthuniversity()
{
	$this->load->view('central-south-university');
}
public function ningbouniversity()
{
	$this->load->view('ningbo-university');
}
public function xiamenuniversity()
{
	$this->load->view('xiamen-university');
}
public function nantonguniversity()
{
	$this->load->view('nantong-university');
}
public function zhengzhouuniversity()
{
	$this->load->view('zhengzhou-university');
}
public function xuzhoumedicalcollege()
{
	$this->load->view('xuzhou-medical-college');
}
public function xinjiangmedicaluniversity()
{
	$this->load->view('xinjiang-medical-university');
}
public function sunyatsenuniversity()
{
	$this->load->view('sun-yat-sen-university');
}
public function sichuanuniversity()
{
	$this->load->view('sichuan-university');
}
public function shantouuniversity()
{
	$this->load->view('shantou-university');
}
public function nanchanguniversity()
{
	$this->load->view('nanchang-university');
}
public function liaoningmedicaluniversity()
{
	$this->load->view('liaoning-medical-university');
}
public function shandonguniversity()
{
	$this->load->view('shandong-university');
}
public function jiangsuuniversity()
{
	$this->load->view('jiangsu-university');
}
public function huazhonguniversityofscienceandtechnology()
{
	$this->load->view('huazhong-university-of-science-and-technology');
}
public function fujianmedicaluniversity()
{
	$this->load->view('fujian-medical-university');
}
public function chongqingmedicaluniversity()
{
	$this->load->view('chongqing-medical-university');
}
public function chinathreegorgesuniversity()
{
	$this->load->view('china-three-gorges-university');
}
public function soochowuniversity()
{
	$this->load->view('soochow-university');
}
public function ningxiauniversity()
{
	$this->load->view('ningxia-university');
}
public function asianmedicalinstitute()
{
	$this->load->view('asian-medical-institute');
}
public function internationaluniversityofkyrgyzstan()
{
	$this->load->view('international-university-of-kyrgyzstan');
}
public function kyrgyzstatemedicalacademy()
{
   $this->load->view('kyrgyz-state-medical-academy');
}
public function oshstateuniversity()
{
	$this->load->view('osh-state-university');
}
public function davidtvildianimedicaluniversity()
{
	$this->load->view('david-tvildiani-medical-university');
}
public function georgiaregentsuniversity()
{
	$this->load->view('georgia-regents-university');
}
public function merceruniversityschoolmedicine()
{
	$this->load->view('mercer-university-school-medicine');
}
public function tbilisistatemedicaluniversity()
{
	$this->load->view('tbilisi-state-medical-university');
}
public function comeniusuniversityinbratislava()
{
	$this->load->view('comenius-university-in-bratislava');
}
public function mbbsmdmsbulgaria()
{
	$this->load->view('mbbs-md-ms-bulgaria');
}
public function belarusianstatemedicaluniversity()
{
	$this->load->view('belarusian-state-medical-university');
}
public function gomelstatemedicaluniversity()
{
	$this->load->view('gomel-state-medical-university');
}
public function grodnostatemedicaluniversity()
{
	$this->load->view('grodno-state-medical-university');
}
public function vitebskstatemedicaluniversity()
{
	$this->load->view('vitebsk-state-medical-university');
}
public function caroldavilauniversityofmedicineandpharmacy()
{
	$this->load->view('carol-davila-university-of-medicine-and-pharmacy');
}
public function universityofmedicineandpharmacyclujnapoca()
{
	$this->load->view('university-of-medicine-and-pharmacy-cluj-napoca');
}
public function grigoretpopauniversityofmedicineandpharmacy()
{
	$this->load->view('grigore-t-popa-university-of-medicine-and-pharmacy');
}
public function ovidiusuniversityofconstanta()
{
	$this->load->view('ovidius-university-of-constanta');
}
public function universityoforadea()
{
	$this->load->view('university-of-oradea');
}
public function victorbabesuniversityofmedicineandpharmacytimisoara()
{
	$this->load->view('victor-babes-university-of-medicine-and-pharmacy-timisoara');
}
public function neetpgmdms()
{
	$this->load->view('neet-pg-md-ms.php');
}
public function smolenskstatemedicaluniversity()
{
	$this->load->view('smolensk-state-medical-university');
}


public function kazanfederaluniversity()
{

$this->load->view('kazan-federal-university');	
}


public function bashkirstatemedical()
{


	$this->load->view('bashkir-state-medical');
}


public function orenburgstatemedical()
{


	$this->load->view('orenburg-state-medical');
}

   public function kazanstatemedicaluniversity()
{


	$this->load->view('kazan-state-medical-university');
}


   public function kurskstatemedicaluniversity()
{


	$this->load->view('kursk-state-medical-university');
}


   public function imsechenovfirstmoscowstatemedicaluniversity()
{


	$this->load->view('i-m-sechenov-first-moscow-state-medical-university');
}


   public function nizhnynovgorodstatemedicalacademy()
{


	$this->load->view('nizhny-novgorod-state-medical-academy');
}

   public function peoplesfriendshipuniversity()
{


	$this->load->view('peoples-friendship-university');
}



  public function russianstatemedicaluniversity()
{


	$this->load->view('russian-state-medical-university');
}


  public function stpetersburgiimechnikovstatemedicalacademy()
{


	$this->load->view('st-petersburg-i-i-mechnikov-state-medical-academy');
}

public function blog()
{
	$data['blog']=$this->Usermodel->fetchallblog();
	$this->load->view('allblog',$data);
}
public function blogdetail()
{
	$id=$this->uri->segment(2);

  $data['blogdetail']=$this->Usermodel->fetchallblogdetail($id);
  $this->load->view('blogdetail',$data);

}
public function contact()
{
	$this->load->view('contact');
}
public function insertcontact()
{
	$data=$this->input->post();
	 date_default_timezone_set('asia/kolkata');
		$date=date('d/m/y h:i');
		$data['dateandtime']=$date;
    $this->Usermodel->insert_contact($data);
    $this->session->set_flashdata('contactalt','MSG');
    return redirect('Welcome/contact');
}

















}
