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
//                for ($i = 0; $i < 2; $i++) {
                for ($j = 1; $j < 13; $j++) {
                    $rst[] = 'list' . $j . '.jpg';
                }
//                }
                break;
            case 1:
//                for ($i = 0; $i < 2; $i++) {
                for ($j = 13; $j < 25; $j++) {
                    $rst[] = 'list' . $j . '.jpg';
                }
//                }
                break;
            case 2:
//                for ($i = 0; $i < 2; $i++) {
                for ($j = 25; $j < 37; $j++) {
                    $rst[] = 'list' . $j . '.jpg';
                }
//                }
                break;
            case 3:
//                for ($i = 0; $i < 2; $i++) {
                for ($j = 37; $j < 49; $j++) {
                    $rst[] = 'list' . $j . '.jpg';
                }
//                }
                break;
            case 4:
                for ($j = 1; $j < 9; $j++) {
                    $rst[] = 'nc' . $j . '.jpg';
                }
                for ($j = 49; $j < 53; $j++) {
                    $rst[] = 'list' . $j . '.jpg';
                }
                break;
            case 5:
                for ($j = 1; $j < 7; $j++) {
                    $rst[] = 'm' . $j . '.jpg';
                    $rst[] = 'f' . $j . '.jpg';
                }
                break;
        }

//        return json_encode($rst);
        return response()->json($rst);
    }

    public function getWorkDetails(Request $request)
    {
        $url = $request->get('url');
        return view('welcome.workDetail')->with('url', $url);
    }

    public function services()
    {
        return view('welcome.services');
    }

    public function about()
    {
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

        $data = ['email' => $email, 'name' => $name, 'subject' => $subject,
            'customName' => $customName, 'customEmail' => $customEmail, 'customMsg' => $customMsg];
        Mail::send('emails.testmail', $data, function ($message) use ($data) {
            $message->to($data['email'])->subject($data['subject']);
        });
        return 'Your email has been sent and we will serve you ASAP !';
    }


    public function play()
    {
        return view('welcome.play');
    }
}
