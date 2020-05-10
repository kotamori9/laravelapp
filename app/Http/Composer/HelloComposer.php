<?php

namespace App\Http\Composers;

use Illuminate\View\View;

class HelloComposer
{
  public function composer(View $view)
  {
    $view->with('view_messgae','this view is "'.$view->getName().'"!!');
  }
}