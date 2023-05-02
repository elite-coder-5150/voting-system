<!-- preview -->
<div class="model fade" id="preview-model">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">vite preview</h4>
            </div>
            <div class="modal-body">
                <div id="preview-body"></div>
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

<div class="model fade" id="view-model">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="modal-title">your votes</h4>
            </div>
            <div class="modal-body">
                <div id="platform-body"></div>
            </div>
            <?php
            $db = new Database();
            $voter = null;
            $id = $voter['id'];
                $sql = "
                    select *, 
                           candidates.first_name as canFirst, 
                           candidates.last_name as canLast
                    from votes
                        left join candidates on candidates.candidate_id=votes.candidate_id
                        left join positions on positions.position_id=votes.position_id
                    where voters_id=?
                    order by positions.priority";
                $query = $db->query($sql);
                $query->execute([
                        ':voter_id' => $voter,
                ]);
                
                while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                    echo "
                        <div class='row vote-list'>
                            <span class='col-sm-4'><span class='pull-right'><br>".$row['description']."</span></span>
                            <span class='col-md-8'>".$row['canFirst']. " ".$row['canLast']."</span>
                        </div>
                    ";
                }
            ?>
            <div class="modal-footer">
                <button class="btn btn-default btn-flat pull-left" data-dismiss="modal">
                    <i class="fa fa-close"></i>
                    cancel
                </button>
            </div>
        </div>
    </div>
</div>

