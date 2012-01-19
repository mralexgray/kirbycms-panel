<?php

class action {

  function addContent() {

    $result = false;
    
    if(get('cancel-add-page')) {
      go(showurl('pages'));
      return false;
    }
    
    if(get('add-page')) {
      $result = data::addContent();
      if(success($result)) go($result['url']);
    }
    
    return $result;
  
  }

  function updateContent() {

    $result = false;
    
    if(get('update-content')) {
      $result = data::updateContent();
      if(success($result)) go(showurl('content'));
      growl($result);
    }
    
    return $result;

  }
  
  function deleteContent() {

    $result = false;
    
    if(get('cancel-delete-page')) {
      go(showurl('pages'));
      return false;
    }
    
    if(get('delete-page')) {
      $result = data::deleteDir();
      if(success($result)) go(showurl('pages'));
    }
    
    return $result;
  
  }

  function uploadFile() {

    $result = false;
    
    if(get('cancel-upload')) {
      go(showurl('files'));
      return false;
    }
    
    if(get('upload-file')) {
      $result = data::uploadFile();
      if(success($result)) go(showurl('files'));
    }

    return $result;

  }

  function editFile() {
  
    $result = false;
    
    if(get('cancel-edit-file')) {
      go(showurl('files'));
      return false;
    }
    
    if(get('edit-file')) {
      $result = data::editFile();
      if(success($result)) go(showurl('files'));
    }
    
    return $result;
  
  }

  function replaceFile() {

    $result = false;
    
    // cancel action    
    if(get('cancel-replace-file')) {
      go(showurl('files'));
      return false;
    }

    // submit action    
    if(get('replace-file')) {

      $result = data::replaceFile();
      if(success($result)) go(showurl('files'));
            
    }

    return $result;
  
  }

  function deleteFile() {
  
    $result = false;
    
    // cancel action    
    if(get('cancel-delete-file')) {
      go(showurl('files'));
      return false;
    }
    
    // submit action    
    if(get('delete-file')) {

      $result = data::deleteFile();
      if(success($result)) go(showurl('files'));
                
    }

    return $result;
  
  }

}

?>