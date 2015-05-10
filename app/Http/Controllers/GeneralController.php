<?php namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;

class GeneralController extends Controller {

    /**
	 * Show the home page to the user.
	 *
	 * @return Response
	 */
	public function showHome()
	{
		return view('home');
	}

    /**
     * Show the about page to the user.
     *
     * @return Response
     */
	public function showAbout()
	{
		return view('about');
	}

    /**
     * Show the projects page to the user.
     *
     * @return Response
     */
	public function showProjects()
	{
		return view('projects');
	}

    /**
     * Show the contact page to the user.
     *
     * @return Response
     */
	public function showContact()
	{
		return view('contact');
	}

	public function submitContactForm(ContactFormRequest $request)
	{
		return $request->all();
	}

}
