<div class="modal fade" id="editMenuModal" tabindex="-1" role="dialog" aria-labelledby="editMenuModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editMenuModalLabel">Edit Menu Item</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="post" action="crud.php">
                    <input type="hidden" name="id" id="edit-menu-id">
                    <div class="form-group">
                        <label for="edit-menuName">Menu name</label>
                        <input type="text" class="form-control" id="edit-menuName" name="menuName" required />
                    </div>
                    <div class="form-group">
                        <label for="edit-menuDesc">Menu description</label>
                        <textarea class="form-control" id="edit-menuDesc" name="menuDesc" rows="3" required></textarea>
                    </div>
                    <!-- <div class="form-group">
                        <label for="edit-price">Price</label>
                        <input type="text" class="form-control" id="edit-price" name="price" required />
                    </div> -->
                    <button class="btn btn-primary" type="submit" name="edit" style="margin-left: 190px; margin-top: 15px;">Save</button>
                </form>
            </div>
        </div>
    </div>
</div>