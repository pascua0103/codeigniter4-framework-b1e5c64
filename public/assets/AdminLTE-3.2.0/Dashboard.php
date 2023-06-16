<?php

namespace AppControllers;
class Dashboard extends BaseController

{
    public function index()

    {
        return view ('dashboard_view');
    }
}