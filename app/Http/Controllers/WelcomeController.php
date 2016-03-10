<?php 
	namespace App\Http\Controllers;

	use App\User;
	use App\Http\Controllers\Controller;
	class WelcomeController extends Controller {
        
          /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('auth');
    }
	
		public function contact() {
			return view('pages.home');		
		}
        
        public function showHomePage() {
            return view('pages.home');
        }
	}
