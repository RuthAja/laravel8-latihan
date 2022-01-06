<?php

namespace App\View\Components;

use Illuminate\View\Component;

class AppLayout extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $title;
    public $title2;
    public $style = null;
    // public function __construct($title = 'Tidak ada Judul', $title2 = 'Laravel') //NOTE alternativ 1
    // {
    //     $this->title = $title;
    //     $this->title2 = $title2;
    // }
    // public function __construct($title = null, $title2 = 'Laravel') //NOTE alternativ 2
    // {
    //     $this->title = $title ? $title : 'Tidak ada Judul';
    //     $this->title2 = $title2 ? $title2 : 'Tidak ada Judul ke 2';
    // }
    public function __construct($title = null, $title2 = null) //NOTE alternativ 3
    {
        // STUB bila title dan title2 tidak ada, maka eksekusi 'Tidak ada Judul'
        $this->title = $title ?? 'Tidak ada Judul';
        $this->title2 = $title2 ?? 'Tidak ada Judul ke 2';
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('layouts.app', ['title' => 'Laravel', 'title2' => 'Laravel2']);
    }
}
