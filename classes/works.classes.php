<?php
include_once "dbh.php";

class WorksInfo extends Dbh {


    // Get all the professionals and posts data
    protected function getWorks() {
        $stmt = $this->connect()->prepare("SELECT * FROM professionals JOIN posts ON professionals.Id_Professionals = posts.Id_Professionals WHERE posts.confirmed = 'true'");

        if(!$stmt->execute()) {
            header("location: ../pages/user/homePage.php?error=stmtfailed");
            exit();
        }

        $worksData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $worksData;
    }

    // get 3 RAND the professionals Data
    protected function getWorksRand() {
        $stmt = $this->connect()->prepare("SELECT * FROM professionals JOIN posts ON professionals.Id_Professionals = posts.Id_Professionals WHERE posts.confirmed = 'true' ORDER BY RAND() LIMIT 3");

        if(!$stmt->execute()) {
            header("location: ../pages/user/homePage.php?error=stmtfailed");
            exit();
        }

        $worksDataRand = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $worksDataRand;
    }

    // Get  one professionals and posts data
    protected function getOneWorks($professional) {
        $stmt = $this->connect()->prepare("SELECT * FROM professionals JOIN posts ON professionals.Id_Professionals = posts.Id_Professionals WHERE professionals.Id_Professionals = ?");

        if(!$stmt->execute(array($professional))) {
            header("location: ../pages/user/homePage.php?error=stmtfailed");
            exit();
        }

        $worksData = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $worksData;
    }

    // Add Works or Posts in table Posts 
    protected function addWorks($title, $description, $date_created, $type, $img_posts, $confirmed, $Id_Professionals) {
        $stmt = $this->connect()->prepare("INSERT INTO posts (title, description, date_created, type, img_posts, confirmed, Id_Professionals) VALUES (?, ?, ?, ?, ?, ?, ?)");
        
        if(!$stmt->execute(array($title, $description, $date_created, $type, $img_posts, $confirmed, $Id_Professionals))) {
            header("location: ../pages/user/homePage.php?error=stmtfailed");
            exit();
        }

        $stmt = null;
    }

        // Get all data works professionals not confirmed
        protected function getWorksNotConfirmed() {
            $stmt = $this->connect()->prepare("SELECT * FROM professionals JOIN posts ON professionals.Id_Professionals = posts.Id_Professionals WHERE posts.confirmed = 'false'");
    
            if(!$stmt->execute()) {
                header("location: ../pages/user/homePage.php?error=stmtfailed");
                exit();
            }
    
            $worksData = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $worksData;
        }

        // update confirme professionals posts 
        protected function updatePost($confirmed, $Id_Posts) {
            $stmt = $this->connect()->prepare("UPDATE posts SET confirmed = ? WHERE Id_Posts = ?");
        
            if(!$stmt->execute(array($confirmed, $Id_Posts))) {
                header("Location: http://localhost/PFE/KhedmaPro/pages/dashboard/postsConfirme.php?error=stmtfailed");
                exit();
            }
        
            $stmt = null;
        }

        // Delete Posts Professionals
        protected function deletePosts($Id_Posts) {
            $stmt = $this->connect()->prepare("DELETE  FROM posts WHERE Id_Posts = ?");
            
            if (!$stmt) {
                // Check if prepare() failed
                header("Location: ../pages/user/profile.php?error=stmtfailed");
                exit();
            }
            
            if (!$stmt->execute([$Id_Posts])) {
                // Check if execute() failed
                header("Location: ../pages/user/profile.php?error=stmtfailed");
                exit();
            }
            
            $stmt = null;
        }

        // Update Posts Professionals 
        protected function editPostsProfessionals($title, $description, $type, $img_posts,   $Id_Posts) {
            $stmt = $this->connect()->prepare("UPDATE `posts` SET `title` = ?, `description` = ?, `type` = ?, `img_posts` = ? WHERE `posts`.`Id_Posts` = ?;");

            if(!$stmt->execute([$title, $description, $type, $img_posts,   $Id_Posts])) {
                header("Location: http://localhost/PFE/KhedmaPro/pages/dashboard/postsConfirme.php?error=stmtfailed");
                exit();
            }

            $stmt = null;
        }
        

        // Delete Posts Liked 
        protected function deletePostsLiked($Id_Posts) {
            $stmt = $this->connect()->prepare("DELETE FROM liked WHERE Id_Posts = ?");
            
            if (!$stmt) {
                // Check if prepare() failed
                header("Location: ../pages/user/profile.php?error=stmtfailed");
                exit();
            }
            
            if (!$stmt->execute([$Id_Posts])) {
                // Check if execute() failed
                header("Location: ../pages/user/profile.php?error=stmtfailed");
                exit();
            }
            
            $stmt = null;
        }
        

}
