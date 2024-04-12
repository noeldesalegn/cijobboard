<?php

namespace App\Controllers\Users;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class UsersController extends BaseController
{
    public function __construct(){
        $this->db = \config\Database::connect();
    }


    public function publicProfile($id)
    {

        $singleUser = $this->db->query("SELECT * FROM users WHERE id = '$id'")->getFirstRow();


        return view('users/public-profile',compact('singleUser'));
    }
    public function updateProfile()
    {
        $id = auth()->user()->id;

        $singleUser = $this->db->query("SELECT * FROM users WHERE id = '$id'")->getFirstRow();


        return view('users/update-profile',compact('singleUser'));

    }
    
    public function submitUpdateProfile(){
    $id = auth()->user()->id;

    $username = $this->request->getPost('username');
    $job_title = $this->request->getPost('job_title');
    $facebook = $this->request->getPost('facebook');
    $linkedin = $this->request->getPost('linkedin');
    $twitter = $this->request->getPost('twitter');
    $bio = $this->request->getPost('bio');

    $updateSingleUser = $this->db->query("UPDATE users SET username='$username', job_title='$job_title', facebook='$facebook', linkedin='$linkedin', twitter='$twitter', bio='$bio' WHERE id = '$id'");

    if($updateSingleUser){
        return redirect()->to(base_url('users/update-profile'))->with('update', 'Profile updated successfully');
    } else {
        return redirect()->to(base_url('users/update-profile'))->with('error', 'Failed to update profile');
    }
}


public function updateCV()
    {
       
        return view('users/update-cv');

    }
    


public function submitUpdateCV(){
    $id = auth()->user()->id;

    $file = $this->request->getFile('cv');

    if ($file->isValid() && !$file->hasMoved()) {
        $file->move('assets/cvs');

        $fileName = $file->getClientName();

        $updateCV = $this->db->query("UPDATE users SET cv='$fileName'  WHERE id = '$id'");

        if ($updateCV) {
            return redirect()->to(base_url('users/update-cv'))->with('update', 'CV updated successfully');
        }
    }

    return redirect()->back()->withInput()->with('error', 'Failed to update CV');
}

public function userSavedJobs()
{
    $id = auth()->user()->id;

    $savedJobs = $this->db->query("SELECT * FROM savedjobs WHERE user_id = '$id'")->getResult();


    return view('users/saved-jobs',compact('savedJobs'));

}

public function userApplyedJobs()
{
    $id = auth()->user()->id;

    $applyedJobs = $this->db->query("SELECT * FROM applyedjobs WHERE user_id = '$id'")->getResult();


    return view('users/applyed-jobs',compact('applyedJobs'));

}
public function downloadCV($fileName)
{
    $path = 'assets/cvs/' . $fileName;
    helper('download');
    force_download($path, NULL);
}


}
