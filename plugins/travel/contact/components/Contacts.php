<?php namespace Travel\Contact\Components;

use Cms\Classes\ComponentBase;
use  Travel\Contact\Models\Contact;
use Redirect;
use BackendAuth;
use Input;
use GuzzleHttp\Client;
use Config;
class Contacts extends ComponentBase
{


    public function componentDetails()
    {
        return [
            'name' =>'Contact',
            'description' =>'Contact'
        ];
    }
    public function defineProperties()
    {
        return [];
    }
    public function onRun()
    {   
    }
    public function onCreateData()
    {
        $alert = [
                'error' => true,
                'mesage' => '',
        ];
        $contact = new Contact();
        $contact->name = Input::post('name');
        $contact->email = Input::post('email');
        $contact->phone = Input::post('phone');
        $contact->content = Input::post('content');
        if ($contact->save()) {
            $alert['error'] = false;
            $alert['mesage'] = 'Success';
            
        }
        else{
            $alert = [
                'error' => true,
                'mesage' => 'Error: Lỗi hệ thống vui lòng thử lại!',
            ];
            return $alert;
        }

        return response()->json($alert);
    }
   
   
}