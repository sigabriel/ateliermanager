<script>
	$(document).ready(function(e) {
		$('#btn_modal').click(function(e){
			e.preventDefault();
			var url = $(this).attr('href')
			var valor = $(this).attr('value');
			
			$('.box-modal-load').load(valor);
			$('#modal').fadeIn(500);	
		});
		
		
		$('#modal, .fechar').click(function(e){
			if( e.target !== this ) 
       			return;
			$('#modal').fadeOut(500);	
		});
		
		
		
    });
</script>