<?php namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use Illuminate\Support\Facades\Mail;

class GeneralController extends Controller {

    /**
	 * Show the home page to the user.
	 *
	 * @return Response
	 */
	public function showHome()
	{
		return view('home')->with([
			'title' => 'Dan Bond: Software Developer, Open Source Contributor, Tech Enthusiast.',
		]);
	}

    /**
     * Show the about page to the user.
     *
     * @return Response
     */
	public function showAbout()
	{
		return view('about')->with([
			'title' => 'About | Dan Bond: Software Developer, Open Source Contributor, Tech Enthusiast.',
		]);
	}

    /**
     * Show the projects page to the user.
     *
     * @return Response
     */
	public function showProjects()
	{
		return view('projects')->with([
			'title' => 'Projects | Dan Bond: Software Developer, Open Source Contributor, Tech Enthusiast.',
		]);
	}

    /**
     * Show the contact page to the user.
     *
     * @return Response
     */
	public function showContact()
	{
		return view('contact')->with([
			'title' => 'Contact | Dan Bond: Software Developer, Open Source Contributor, Tech Enthusiast.',
		]);
	}

	public function submitContactForm(ContactFormRequest $request)
	{
		$data = [
			'name' => $request->all()['name'],
			'email' => $request->all()['email'],
			'telephone' => ($request->all()['telephone'] != null) ? $request->all()['telephone'] : 'N/A',
			'url' => ($request->all()['url'] != null) ? $request->all()['url'] : 'N/A',
			'comments' => $request->all()['message'],
		];

		Mail::send('emails.contact-form', $data, function($message) use($data)
		{
			$message->to('danbondd@gmail.com', 'Dan Bond')->subject('Contact Form Enquiry');
		});

		return redirect()->back()->with('message', 'Thank you, ' . $data['name']);
	}

}
