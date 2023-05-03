<div class="model fade" id="platform-model">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title"><b>span.candidate</b></h4>
            </div>
            <div class="modal-body">
                <div id="platform-body"></div>
            </div>
            <div class="modal-footer">
                <button class="md-primary rounded" data-dismiss="modal">
                    <i class="fa fa-close"></i>
                    cancel
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="add-new">
    <div class="modal-dialog">
        <div class="modal-content">
            <header class="modal-header">
                <button class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <div class="modal-title"><strong>add new candidate</strong></div>
            </header>
            
            <div class="card-body">
                <form action="add_candidate.php" 
                      enctype="multipart/form-data" 
                      class="form-horizontal" 
                      method="post">
                    <label for="first-name">First name</label>
                    <input type="text" id="first-name">
                </form>
            </div>
        </div>
    </div>
</div>
