<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HelperController extends Controller {

	private $request;

	public function __construct(Request $request){
		$this->request = $request;
	}

	public function sendMail() {
		$data = array(
			'contact_name' => $this->request->name,
			'contact_email' => $this->request->email,
			'contact_message' => $this->request->message,
		);
		Mail::send('email.contact', $data, function ($message) {
			$message->from($this->request->email, $this->request->name);

			$message->to([
				'vikingsweb@gmail.com',
				'lucyan@outlook.com',
				'rafaelsandes89@gmail.com',
				'hugo_targino@outlook.com'
			], 'Vikings')->subject('Contato através do site.');
		});

		return "Mensagem enviada com sucesso";
	}

}