<?php
require_once('init.php');

class admin_party_page extends pagebase {

    //bind
    function bind() {
        $this->page_title = "Add a new Party";
    }

    function process() {
        // TODO: Duplicate detection
        if($this->data['txtPartyName']) {
            $party = factory::create('party');
            $party->name = trim($this->data['txtPartyName']);

            if(!$party->insert()){
                trigger_error("Unable to save party");
            }
        }

        $this->bind();
        $this->render();
    }
}

//create class addelection_page
$admin_party_page = new admin_party_page();
?>