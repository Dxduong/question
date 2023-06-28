<div class="modal" tabindex="-1" role="dialog" id="modalQuestion">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="txaLabel">Nhập câu hỏi và đáp án:</label>
                    <textarea class="form-control" id="txaQuestion" rows="1" placeholder="Câu hỏi"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="txaOptionA" rows="1" placeholder="Đáp án A"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="txaOptionB" rows="1" placeholder="Đáp án B"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="txaOptionC" rows="1" placeholder="Đáp án C"></textarea>
                </div>
                <div class="form-group">
                    <textarea class="form-control" id="txaOptionD" rows="1" placeholder="Đáp án D"></textarea>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-sm-3">
                            <div class="radio">
                                <label><input type="radio" name="optradio" id="rdOptionA">Đáp án A</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="radio">
                                <label><input type="radio" name="optradio" id="rdOptionB">Đáp án B</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="radio">
                                <label><input type="radio" name="optradio" id="rdOptionC">Đáp án C</label>
                            </div>
                        </div>
                        <div class="col-sm-3">
                            <div class="radio">
                                <label><input type="radio" name="optradio" id="rdOptionD">Đáp án D</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="btnSubmit">Xác nhận</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Đóng</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $('#btnSubmit').click(function() {
        let question = $('#txaQuestion').val();
        let optionA = $('#txaOptionA').val();
        let optionB = $('#txaOptionB').val();
        let optionC = $('#txaOptionC').val();
        let optionD = $('#txaOptionD').val();
        let answer = $('#rdOptionA').is(':checked') ? 'A' :
            $('#rdOptionB').is(':checked') ? 'B' :
            $('#rdOptionC').is(':checked') ? 'C' :
            $('#rdOptionD').is(':checked') ? 'D' : '';
        //console.log(question,optionA,optionB,optionC,optionD,answer);
        $.ajax({
            url: 'addQuestion.php',
            type: 'post',
            data: {
                question: question,
                optionA: optionA,
                optionB: optionB,
                optionC: optionC,
                optionD: optionD,
                answer: answer
            },
            success: function(data) {
                alert(data);
                $('#txaQuestion').val('');
                $('#txaOptionA').val('');
                $('#txaOptionB').val('');
                $('#txaOptionC').val('');
                $('#txaOptionD').val('');
                $('#rdOptionA').prop('checked', false);
                $('#rdOptionB').prop('checked', false);
                $('#rdOptionC').prop('checked', false);
                $('#rdOptionD').prop('checked', false);
            }
        });
    });
</script>