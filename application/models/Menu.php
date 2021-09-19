<?php
	class Menu extends CI_Model
	{
		function materi_page($link,$foto)
		{
			echo 
			"<a href='$link'>
				<div class='col-md-3'>
					<div class='box box-danger'>
	
						<div class='box-header'>
							<div class='box-title'>#1 Peralatan Untuk Menggambar</div>
						</div>
	
						<div class='box-body'>
							<img src='$foto' width=100%>
						</div>
	
						<div class='box-footer'>
							Lihat Selengkapnya
						</div>
	
					</div>
				</div>
			</a>";
		}
	}
	