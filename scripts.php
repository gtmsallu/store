<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
		
		

<!-- <script  src="bootstrap-show-password.min"></script> -->
<script>
									/**
								* @author Abdo-Hamoud <abdo.host@gmail.com>
										* https://github.com/Abdo-Hamoud/bootstrap-show-password
										* version: 1.0
										*/
										!function ($) {
										//eyeOpenClass: 'fa-eye',
										//eyeCloseClass: 'fa-eye-slash',
										'use strict';
										$(function () {
										$('[data-toggle="password"]').each(function () {
										var input = $(this);
										var eye_btn = $(this).parent().find('.input-group-text');
										eye_btn.css('cursor', 'pointer').addClass('input-password-hide');
										eye_btn.on('click', function () {
										if (eye_btn.hasClass('input-password-hide')) {
										eye_btn.removeClass('input-password-hide').addClass('input-password-show');
										eye_btn.find('.fa').removeClass('fa-eye').addClass('fa-eye-slash')
										input.attr('type', 'text');
										} else {
										eye_btn.removeClass('input-password-show').addClass('input-password-hide');
										eye_btn.find('.fa').removeClass('fa-eye-slash').addClass('fa-eye')
										input.attr('type', 'password');
										}
										});
										});
										});
										}(window.jQuery);
									</script>
									 <script src="js/sb-admin-2.min.js"></script>
  
   
   