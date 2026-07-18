<?php

namespace App\Controllers;

use App\Models\EventModel;

class EventController extends BaseController
{
    public function index()
    {

      //echo "Event Route Working";
        $eventModel = new EventModel();


    $data = [
        'title'       => 'Events',
        'description' => 'Upcoming events',
        'keywords'    => 'events',
        'events'      => $eventModel->where('status', 1)->findAll(),
    ];

        // $data['events'] = $eventModel
        //     ->where('status',1)
        //     ->orderBy('event_date','ASC')
        //     ->findAll();

        // return view('themes/classic/event/events',$data);

    echo loadView('partials/_header', $data);
    echo loadView('event/events',$data);
    echo loadView('partials/_footer', $data);   
    
    }

    public function detail($slug)
    {
        $eventModel = new EventModel();

    $event = $eventModel
        ->where('slug', $slug)
        ->first();

    if (!$event) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    $data = [
        'title'       => $event->title,
        'description' => $event->short_description,
        'keywords'    => $event->title,
        'event'       => $event
    ];

    echo loadView('partials/_header', $data);
    echo loadView('event/events_details', $data);
    echo loadView('partials/_footer', $data);
    }

public function register($id)
{
    $eventModel = new \App\Models\EventModel();

    $event = $eventModel->find($id);

    if (!$event) {
        throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
    }

    $data = [
        'title'       => 'Event Registration',
        'description' => 'Register for event',
        'keywords'    => 'event',
        'event'       => $event
    ];

    echo loadView('partials/_header', $data);
    echo loadView('event/events_register', $data);
    echo loadView('partials/_footer', $data);
}

public function registerPost()
{
    $registrationModel = new \App\Models\EventRegistrationModel();

    $data = [
        'event_id' => $this->request->getPost('event_id'),
        'name'     => trim($this->request->getPost('name')),
        'email'    => trim($this->request->getPost('email')),
        'mobile'   => trim($this->request->getPost('mobile')),
        'address'  => trim($this->request->getPost('address')),
        'message'  => trim($this->request->getPost('message')),
        'status'   => 1
    ];

    if (!$registrationModel->insert($data)) {

        return redirect()->back()
                         ->withInput()
                         ->with('errors', $registrationModel->errors());
    }

    return redirect()->back()
                     ->with('success', 'Your event registration has been submitted successfully.');
}


}