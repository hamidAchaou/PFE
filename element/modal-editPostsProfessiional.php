<!-- Modal Delete Posts -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Professional</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 hed-addWork"></div>
                        <div class="col-md-8">
                            <h2 class="text-center pt-4">Add your new works</h2>
                            <form class="p-3" action="../../includes/edit-PostsProfessionals.inc.php" method="post" enctype="multipart/form-data">
                                <input type="hidden" name="Id_Professionals" value="<?php echo $_SESSION['Id_Professionals'] ?>">
                                <input type="hidden" name="idPostsForEdit" id="idPostsForEdit">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                                </div>
                                <div class="form-group">
                                    <label for="image">Image</label>
                                    <input type="file" class="form-control-file" id="image" name="imageWorks">
                                </div>
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea class="form-control" id="description" rows="3" name="description"></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="occupation">Occupation</label>
                                    <input type="text" class="form-control-file" id="occupation" name="occupation">
                                </div>
                                <button type="submit" class="btn btn-primary" name="submitEditWorks">Edit Works</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <form class="modal-footer" method="POST" action="../../includes/delete-ProfessionalsPosts.inc.php">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </form>

        </div>
    </div>
</div>

<!-- script add id Posts in modal delete -->
<script>
    function editProfessionalPosts(id) {
        document.getElementById("idPostsForEdit").value = id;
         $('#editModal').modal('show'); 
    }

    // function editProfessionalPosts(id) {
    // var inputElement = document.getElementById("idPostsFo");
    // inputElement.value = id;
    // }
</script>
