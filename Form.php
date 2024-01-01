<?php

namespace App\Controllers;

class Form extends BaseController
{
    public function index(): string
    {

        $data=[];
        $data ['categories'] = [
            'student',
            'teacher',
            'principal'
        ];

        //creating rules
        if($this->request->getMethod()=='post'){
            $rules = [
                'email' => 'required|valid_email',
                'password' => 'required',
                'category' => 'required|in_list[student,teacher]',
            ];
            if($this->validate($rules)){
                //do a database insertion or get user logged in
                return redirect()->to('/success');//redirect to the success message
                
                
            }else{
                $data ['validation'] = $this->validator;
            }
        }
        return view('form',$data);
    }



    function success(){
        return 'Validation Successful Congrats';
        //redirect to home
    }
}
