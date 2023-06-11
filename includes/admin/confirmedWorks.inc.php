<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js" integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<?php

if(isset($_POST['confirmedWorks'])) {
    // get id Posts 
    $id = $_GET['id'];
    $typePosts = 'true';

    // get classes GetWorksData for confirmed Posts Professionals
    include_once '../../classes/works.contr.php';
    // class confirmed posts Professionals
    $confirmePosts = new GetWorksData();
    // methode confirmed Professionals Posts 
    $confirmePostsProfessionals = $confirmePosts->updateInfoConfirmedPosts($typePosts, $id);
    ?>

<?php
}

?>