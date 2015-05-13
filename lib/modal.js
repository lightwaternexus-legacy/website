window.alert = function(msg){
	window.setupModal();
	$('#alertModalLabel').html('The page says:');
	$('#alertModalBody').html(msg.replace("\n", "<br>"));
	$('#alertModal').modal('show');
}

window.alertWithTitle = function(title, msg){
	window.setupModal();
	$('#alertModalLabel').html(title.replace("\n", "<br>"));
	$('#alertModalBody').html(msg.replace("\n", "<br>"));
	$('#alertModal').modal('show');
}

window.setupModal = function(){
$('#jsModal').html('<div class="modal fade" id="alertModal" tabindex="-1" role="dialog" aria-labelledby="alertModalLabel" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"> <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button> <h4 class="modal-title" id="alertModalLabel">Modal title</h4> </div> <div class="modal-body" id="alertModalBody"> ... </div> <div class="modal-footer"> <button type="button" class="btn btn-default" data-dismiss="modal">OK</button> </div> </div> </div> </div>');
}