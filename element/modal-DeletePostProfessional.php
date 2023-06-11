<!-- Modal Delete Posts  -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Delete Professional</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            </div>
            <form class="modal-footer" method="POST" action="../../includes/delete-ProfessionalsPosts.inc.php">
                <input type="texte" name="idPosts" id="idPosts">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submite" name="deleteWorks" class="btn btn-danger"">Delete</button>
            </form>
        </div>
    </div>
</div>

<!-- script add id Posts in modal delete -->
<script>
    function deleteProfessionalPosts(id) {
        document.getElementById("idPosts").value = id;
         $('#deleteModal').modal('show'); 
    }
</script>