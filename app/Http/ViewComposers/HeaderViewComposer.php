<?php
namespace Social\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use Auth;
class HeaderViewComposer
{

    public function compose(View $view)
    {
        $view->with('navMenu', $this->getMenus());
    }

    public function getMenus()
    {
        $menuList = array(
                            'Home'    => array('title'=>'Home','href'=>route('home'),'class'=>'glyphicon glyphicon-home'),
                            'Authors' => array('title'=>'Authors','href'=>route('authors'),'class'=>'glyphicon glyphicon-book'),
                            'Wizard'  => array('title'=>'Wizard','href'=>route('wizard'),'class'=>'glyphicon glyphicon-book'),
                          );

        if (Auth::check())
        {
          $menuList['My Profile']   = array('title'=>'My Profile','href'=>route('profile'),'class'=>'glyphicon glyphicon-user');
          $menuList['Logout']       = array('title'=>'Logout','href'=>route('auth.logout'),'class'=>'glyphicon glyphicon-log-out');
        }
        else
        {
          $menuList['Login']      = array('title'=>'Login','href'=>route('auth.login'),'class'=>'glyphicon glyphicon-log-in');
          $menuList['Register']   = array('title'=>'Register','href'=>route('auth.register'),'class'=>'');
        }

        return $menuList;
    }
}
