<?php namespace App\Http\Controllers;

use Illuminate\Http\Response;
use \Mail;
use Illuminate\Http\Request;
use App\Promotion;


class WelcomeController extends Controller
{

    /*
    |--------------------------------------------------------------------------
    | Welcome Controller
    |--------------------------------------------------------------------------
    |
    | This controller renders the "marketing page" for the application and
    | is configured to only allow guests. Like most of the other sample
    | controllers, you are free to modify or remove it as you desire.
    |
    */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('guest');
    }

    /**
     * Show the application welcome screen to the user.
     *
     * @return Response
     */
    public function index()
    {
        return view('welcome.index');
    }

    public function works()
    {
        return view('welcome.works');
    }

    public function getWorks($id)
    {
        $rst = array();
        switch ($id) {
            case 0:
                for ($i = 0; $i < 12; $i++) {
                    $rst[] = 'list5.jpg';
                    $rst[] = 'list6.jpg';
                    $rst[] = 'list7.jpg';
                    $rst[] = 'list8.jpg';
                    $rst[] = 'list9.jpg';
                    $rst[] = 'list10.jpg';
                    $rst[] = 'list11.jpg';
                    $rst[] = 'list12.jpg';
                    $rst[] = 'list13.jpg';
                    $rst[] = 'list14.jpg';
                }
                break;
            case 1:
                for ($i = 0; $i < 10; $i++) {
                    $rst[] = 'list5.jpg';
                    $rst[] = 'list6.jpg';
                }
                break;
            case 2:
                for ($i = 0; $i < 10; $i++) {
                    $rst[] = 'list7.jpg';
                    $rst[] = 'list8.jpg';
                }
                break;
            case 3:
                for ($i = 0; $i < 10; $i++) {
                    $rst[] = 'list9.jpg';
                    $rst[] = 'list10.jpg';
                }
                break;
            case 4:
                for ($i = 0; $i < 10; $i++) {
                    $rst[] = 'list11.jpg';
                    $rst[] = 'list12.jpg';
                }
                break;
            case 5:
                for ($i = 0; $i < 8; $i++) {
                    $rst[] = 'list13.jpg';
                    $rst[] = 'list14.jpg';
                }
                break;
        }

//        return json_encode($rst);
        return response()->json($rst);
    }

    public function getWorkDetails()
    {
        return view('welcome.workDetail');
    }

    public function services()
    {
        return view('welcome.services');
    }

    public function about(){
        return view('welcome.about');
    }

    public function promotions()
    {
        $promotions = Promotion::all();
//        return response()->json($promotions);
        return view('welcome.promotions', compact('promotions'));
    }

    public function contact()
    {
        return view('welcome.contact');
    }

    public function email(Request $request)
    {
//        $email = 'he-dq@foxmail.com';
        $email = 'niu2yue@gmail.com';
        $name = '';
        $subject = 'You hava a new customer!';

        //content
        $customName = $request->input('name');
        $customEmail = $request->input('email');
        $customMsg = $request->input('message');

        $data = ['email'=>$email, 'name'=>$name, 'subject'=>$subject,
                'customName'=>$customName, 'customEmail'=>$customEmail, 'customMsg'=>$customMsg ];
        Mail::send('emails.testmail', $data, function($message) use($data)
        {
            $message->to($data['email'])->subject($data['subject']);
        });
        return 'Your email has been sent and we will serve you ASAP !';
    }


    public function play()
    {
        return view('welcome.play');
    }
}
