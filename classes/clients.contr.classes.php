<?php
include_once "clients.classes.php";

class GetClientsInfo extends Clients {

        // Get all the client data
        public function getClientsData($Id_client) {
            $clientsdata = $this->getClients($Id_client);
            return $clientsdata;
        }
}

?>