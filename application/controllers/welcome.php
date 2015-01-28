<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     * Maps to /index.php/welcome
     */
    public function index() {
	    	
	$params = array();
	//****doctrine****//
	
	$this->load->library('doctrine');
	
//	$rand = rand(1, 100000);
//	//create group	
//	$group = new Entity\UserGroup;
//	$group->setName("Users$rand");
//	
//	//create user
//	$user = new Entity\User;
//	$user->setUsername("username$rand");
//	$user->setPassword("password$rand");
//	$user->setEmail("example$rand@example.com");
//	$user->setGroup($group);
//
//	// When you have set up your database, you can persist these entities:
//	$em = $this->doctrine->em;
//	$em->persist($group);
//	$em->persist($user);
//	$em->flush();
//
//	$params = array(
//	    'user' => $user,
//	    'group' => $group,
//	);

	//****template****//

	$this->load->library('template');
	//set home (welcome) page template values
	$this->template->set_title('Welcome');
	$this->template->add_js('main.js');
	$this->template->add_css('main.css');
	//load home (welcome) page
	$this->template->load_view('index', $params);
    }
}