<?php
  function call($controller, $action) {
    // require the file that matches the controller name
    require_once( $controller . '_controller.php');

    // create a new instance of the needed controller
    
        $controller = new PagesController();

    // call the action
    $controller->{ $action }();
  }

  // just a list of the controllers we have and their actions
  // we consider those "allowed" values
  $controllers = array('page' => ['home','PYTHON','JAVA','C','LISP','PERL','error']);

  // check that the requested controller and action are both allowed
  // if someone tries to access something else he will be redirected to the error action of the pages controller
  if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
      call($controller, $action);
    } else {
      call('page', 'error');
    }
  } else {
    call('page', 'error');
  }
?> 