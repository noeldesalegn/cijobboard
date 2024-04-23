<?php

namespace App\Controllers\Admins;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Job\Job;
use App\Models\Admin\Admin;
use App\Models\Category\Category;
use App\Models\ApplyedJob\ApplyedJob;

class AdminsController extends BaseController{


    public function __construct(){
        $this->db = \config\Database::connect();
    }


    public function login(){
        return view('admins/login');
    }

    
    public function checkLogin(){
        
        $session = session();
        $admin = new Admin();
        $email = $this->request->getVar('email');
        $password = $this->request->getVar('password');

        $data = $admin->where('email', $email)->first();

        if($data){

        $pass = $data ['password'];
        $authenticatePassword = password_verify($password, $pass);
        if($authenticatePassword){
        $ses_data = [
        'id' => $data['id'],
        'name' => $data['name'],
        'email' => $data['email'],
        'isLoggedIn' =>TRUE
        ];
        $session->set($ses_data);
        return redirect()->to(base_url('admins/index'));

    }
        else{
            $session->setFlashdata('msg', 'Password is Incorrect.');
            return redirect()->to(base_url('admins/login'));
            }
        }else{
            $session->setFlashdata('msg', 'Email does not exist.');
            return redirect()->to(base_url('admins/login'));
        }
    }

    
    public function logout(){
        $session = session();

        $ses_data = [
            'id' => "",
            'name' => "",
            'email' => "",
            'isLoggedIn' =>FALSE
            ];
            $session->set($ses_data);
             return redirect()->to(base_url('admins/login'));

    }


    public function index(){
        $session = session();

        $numJobs = $this->db->table("jobs")->countAllResults();
         $numCategories = $this->db->table("categories")->countAllResults();
         $numAdmin = $this->db->table("admins")->countAllResults();
         $numApps = $this->db->table("applyedjobs")->countAllResults();

        // ,'numCategories','numAdmin','numApps'
        
        return view('admins/index',compact('session','numJobs','numCategories','numAdmin','numApps'));
    }
    
    public function displayAdmins(){
        $session = session();

        $admins = new Admin();

        $allAdmins = $admins->findAll();

        // ,'numCategories','numAdmin','numApps'
        
        return view('admins/all-admins',compact('session','allAdmins'));
    }
    
    public function createAdmins(){
        $session = session();

                
        return view('admins/create-admins',compact('session'));
    }
    
    public function storeAdmins(){

        $admins = new Admin();

        $data=[
            "email" =>$this->request->getPost('email'),
            "name" =>$this->request->getPost('name'),
            "password" =>password_hash($this->request->getPost('password'),PASSWORD_DEFAULT)
        ];
            $admins->save($data);
            if($admins){
                return redirect()->to(base_url('admins/all-admins'))->with('save', 'Admin created successfully');
            }
    }

    
    public function displayCategories(){
        $session = session();

        $categories = new Category();

        $allCategories = $categories->findAll();

        
        return view('admins/all-categories',compact('session','allCategories'));
    }

    public function createCategories(){
        $session = session();

        
        return view('admins/create-categories',compact('session'));
    }

    
    public function storeCategories(){

        $categories = new Category();

        $data=[
            "name" =>$this->request->getPost('name'),
        ];
            $categories->save($data);
            if($categories){
                return redirect()->to(base_url('admins/all-categories'))->with('save', 'Category created successfully');
            }
    }

    public function editCategories($id){
        $session = session();

        $categories= new Category;

        $category = $categories->find($id);

        return view('admins/edit-categories',compact('session','category'));
    }

    
    public function updateCategories($id){
        $session = session();

        $categories= new Category;

        $data=[
            "name" =>$this->request->getPost('name'),
        ];

        $categories->update($id,$data);

        if($categories){
            return redirect()->to(base_url('admins/all-categories'))->with('edit', 'Category Updated successfully');
        }
    }
    
    public function deleteCategories($id){

        $categories= new Category;

        $categories->delete($id);

    
        if($categories){
            return redirect()->to(base_url('admins/all-categories'))->with('delete', 'Category deleted successfully');
        }
    }

    

    public function displayJobs(){

        $session = session();

        $jobs = new Job();

        $allJobs = $jobs->findAll();
        
        return view('admins/all-jobs',compact('session','allJobs'));

    }

    
    public function createJobs(){
        $session = session();

        $categories = new category();

        $allCategories = $categories->findAll();

        return view('admins/create-jobs',compact('session','allCategories'));
    }
    
    public function storeJobs(){

       $jobs = new Job();

       $img = $this->request->getFile('company_image');
       $img->move('assets/images');
       $imgName =$img->getClientName();
    

        $data=[
            "title" =>$this->request->getPost('title'),
            "company_image" => $imgName,            
            "company_name" =>$this->request->getPost('company_name'),
            "job_type" =>$this->request->getPost('job_type'),
            "location" =>$this->request->getPost('location'),
            "published_on" =>$this->request->getPost('published_on'),
            "vacancy" =>$this->request->getPost('vacancy'),
            "experience" =>$this->request->getPost('experience'),
            "salary" =>$this->request->getPost('salary'),
            "gender" =>$this->request->getPost('gender'),
            "category" =>$this->request->getPost('category'),
            "application_deadline" =>$this->request->getPost('application_deadline'),
            "job_description" =>$this->request->getPost('job_description'),
            "responsibilities" =>$this->request->getPost('responsibilities'),
            "education_experience" =>$this->request->getPost('education_experience'),
            "other_benifits" =>$this->request->getPost('other_benifits')

        ];
            $jobs->save($data);
            if($jobs){
                return redirect()->to(base_url('admins/all-jobs'))->with('save', 'Category created successfully');
            }
    }
    
    public function deleteJobs($id){

        $jobs= new Job();

        $job = $jobs->find($id);

        unlink('assets/images/'.$job['company_image'].'');

        $jobs->delete($id);

        if($jobs){
            return redirect()->to(base_url('admins/all-jobs'))->with('delete', 'Jobs deleted successfully');
        }
    }
    
    public function displayApps(){

        $session = session();

        $apps = new ApplyedJob();

        $allApps = $apps->findAll();

        
        return view('admins/all-apps',compact('session','allApps'));
    }

    
    public function deleteApps($id){
        $appsModel = new ApplyedJob();
        $apps = $appsModel->find($id);
    
        if ($apps) {
            // Delete the record from the database
            $appsModel->delete($id);
    
            // Delete the file if it exists
            $filePath = 'assets/cvs/' . $apps['cv'];
            if (file_exists($filePath)) {
                unlink($filePath);
            }
    
            return redirect()->to(base_url('admins/all-apps'))->with('delete', 'Applied job deleted successfully');
        } else {
            return redirect()->to(base_url('admins/all-apps'))->with('error', 'Applied job not found');
        }
    }
    

}
