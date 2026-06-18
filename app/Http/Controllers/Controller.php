<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use App\Models\Project;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    CONST GALLERY_PHOTO_FOLDER = '/Applications/XAMPP/xamppfiles/htdocs/diana/public/images/gallery';

    public function showHome(){
        $projects = Project::orderBy('id', 'desc')->take(6)->get(); // adjust limit as needed
        return view('welcome', compact('projects'));
    }

    public function showForm(){
        return view('welcome');
    }

    public function showAbout(){
        return view('about');
    }

    public function showProduct(){
        return view('product');
    }

    public function showProject(){
        return view('project');
    }

    public function showNews(){
        return view('news');
    }

    public function showCareer(){
        return view('career');
    }

    public function showContact(){
        return view('contactus');
    }

    public function showDisclaimer(){
        return view('disclaimer');
    }       
    public function showTerms(){
        return view('termsofuse');
    }
    public function showPrivacy(){
        return view('privacy');
    }

    public function inputImageGallery(Request $request){
        //dd($request->all());

        $path_photo = self::GALLERY_PHOTO_FOLDER.DIRECTORY_SEPARATOR.$request->img_category;
        if (!file_exists($path_photo)) {
            mkdir($path_photo, 0777, true);
        }
        
        //Update DB with new photo
        $file = $request->file('img_file'); 
        $ext = $file->getClientOriginalExtension();
        $imageFilename = $request->img_category."_gallery_".date("h_i_s").".".$ext;
        $request->file('img_file')->move($path_photo,$imageFilename);

        //Write to the file
        if(!is_file(public_path('galleryArray/'.$request->img_category.'_gallery.txt'))){
            file_put_contents(public_path('galleryArray/'.$request->img_category.'_gallery.txt'),'' ,FILE_APPEND);
        }
        $arrayfiles = file_get_contents(public_path("galleryArray/".$request->img_category."_gallery.txt"));
        $imgArray = [];
        if($arrayfiles != null && $arrayfiles != ''){
            $imgArray = json_decode($arrayfiles);
        }
        $eachImage = (object)[
            'url' => $imageFilename,
            'desc' => $request->img_description
        ];
        array_push($imgArray, $eachImage);
        unlink(public_path('galleryArray/'.$request->img_category.'_gallery.txt'));
        $imageGallery = file_put_contents(public_path('galleryArray/'.$request->img_category.'_gallery.txt'),json_encode($imgArray), FILE_APPEND);

        return redirect()->route('show.gallery');
    }

    public function sendEmail(Request $request){
        $contents = $request->all();
        $email = $contents['email'];
        $name = $contents['name'];
        $phone = $contents['phone'];
        $messageContent = json_encode($contents['message']);
        //return view('mail', compact('email', 'name', 'phone', 'message'));
        \Mail::send("mail", array("name" => $name, "phone" => $phone, "messageContent" => $messageContent, "email" => $email), function ($message) use ($name, $phone) {
            $message->to("sosmed@dianaflatglass.com"); //info@sannoglass.com
            $message->subject('New Message to PT.Sanno Website ('.$name.' - '.$phone.')');
        });
    }
}
