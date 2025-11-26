<?php

namespace App\View\Components;

use Illuminate\View\Component;

class GlobalOffice extends Component
{
    public $title;
    public $country;
    public $email;
    public $phone;
    public $link;
    public $hours;
    public $map;
    public $active;

    public function __construct(
        $title,
        $country,
        $email = null,
        $phone = null,
        $link = null,
        $hours = [],
        $map = null,
        $active = false
    ) {
        $this->title = $title;
        $this->country = $country;
        $this->email = $email;
        $this->phone = $phone;
        $this->link = $link;
        $this->hours = $hours;
        $this->map = $map;
        $this->active = $active;
    }

    public function render()
    {
        return view('components.global-office');
    }
}
