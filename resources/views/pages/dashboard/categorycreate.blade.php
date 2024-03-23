<form method="POST" action="{{ route('createstore') }}">
    @csrf
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_1">
        Create Category
    </button>
    <div class="modal fade" tabindex="-1" id="kt_modal_1">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h3 class="modal-title">Create Category</h3>

                    <!--begin::Close-->
                    <div class="btn btn-icon btn-sm btn-active-light-primary ms-2" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ki-duotone ki-cross fs-1"><span class="path1"></span><span class="path2"></span></i>
                    </div>
                    <!--end::Close-->
                </div>

                <div class="modal-body">
                    <!--begin::Input group-->
                    <div class="form-floating mb-7">
                        <input name="name" type="text" class="form-control" id="floatingInput" placeholder="category"/>
                        <label for="floatingInput">Category Name</label>
                    </div>
                    <!--end::Input group-->
                    <!--begin::Input group-->
                    <div class="form-floating mb-7">
                        <textarea name="description" class="form-control form-control-lg" id="floatingInput" placeholder="description" style="height: 150px;"></textarea>
                        <label for="floatingInput">Category Description</label>
                    </div>


                    <!--end::Input group-->
                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-light" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Create</button>
                </div>
            </div>
        </div>
    </div>
</form>
