<?php

namespace App\Models;

use CodeIgniter\Model;

class EventModel extends Model
{
    protected $table = 'events';

    protected $primaryKey = 'id';

    protected $returnType = 'object';

    protected $useAutoIncrement = true;

    protected $useTimestamps = true;

    protected $createdField = 'created_at';

    protected $updatedField = 'updated_at';

    protected $allowedFields = [
        'title',
        'slug',
        'short_description',
        'description',
        'image',
        'banner_image',
        'event_date',
        'start_time',
        'end_time',
        'location',
        'google_map',
        'max_seats',
        'registration_fee',
        'organizer_name',
        'organizer_email',
        'organizer_phone',
        'status',
        'seo_title',
        'seo_description',
        'seo_keywords'
    ];

    protected $validationRules = [
        'title'      => 'required|min_length[3]|max_length[255]',
        'event_date' => 'required|valid_date',
        'location'   => 'required|max_length[255]',
    ];

    protected $validationMessages = [
        'title' => [
            'required' => 'Event title is required.'
        ],
        'event_date' => [
            'required' => 'Event date is required.'
        ]
    ];

    protected $skipValidation = false;

    /**
     * Get all active events
     */
    public function getActiveEvents()
    {
        return $this->where('status', 1)
                    ->orderBy('event_date', 'ASC')
                    ->findAll();
    }

    /**
     * Get upcoming events
     */
    public function getUpcomingEvents()
    {
        return $this->where('status', 1)
                    ->where('event_date >=', date('Y-m-d'))
                    ->orderBy('event_date', 'ASC')
                    ->findAll();
    }

    /**
     * Get single event by slug
     */
    public function getEventBySlug($slug)
    {
        return $this->where('slug', $slug)
                    ->first();
    }

    /**
     * Get latest events
     */
    public function getLatestEvents($limit = 5)
    {
        return $this->where('status', 1)
                    ->orderBy('created_at', 'DESC')
                    ->findAll($limit);
    }
}