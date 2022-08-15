<div class="box-body box-header">
					<div>
						<img class="img-circle" id="profile_picture" height="128" data-src="default.jpg"  data-holder-rendered="true" style="width: 140px; height: 140px;" src="default.jpg"/>

						<br><br>
						<a type="button" class="btn btn-primary" id="change-profile-pic"><span class="fa fa-camera"> </span> Carregar Fotografia </a>
					</div>
					<div id="profile_pic_modal" class="modal fade">
						<div class="modal-dialog">
							<div class="modal-content">
								<div class="modal-header">
									<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
									<h3>Escolher a foto</h3>
								</div>

								<div class="modal-body">

									<form id="cropimage" method="post" enctype="multipart/form-data" action="change_pic.php">
										<strong>anexa fotografia:</strong> <br><br>
										<input type="file" name="profile-pic" id="profile-pic" accept="image/*; capture=camera"/ required>
										<input type="hidden" name="hdn-profile-id" id="hdn-profile-id" value="1" />
										<input type="hidden" name="hdn-x1-axis" id="hdn-x1-axis" value="" />
										<input type="hidden" name="hdn-y1-axis" id="hdn-y1-axis" value="" />
										<input type="hidden" name="hdn-x2-axis" value="" id="hdn-x2-axis" />
										<input type="hidden" name="hdn-y2-axis" value="" id="hdn-y2-axis" />
										<input type="hidden" name="hdn-thumb-width" id="hdn-thumb-width" value="" />
										<input type="hidden" name="hdn-thumb-height" id="hdn-thumb-height" value="" />
										<input type="hidden" name="action" value="" id="action" />
										<input type="hidden" name="image_name" value="" id="image_name" />

										<div id='preview-profile-pic'></div>
										<div id="thumbs" style="padding:5px; width:600px"></div>
									</form>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-default" data-dismiss="modal">Fechar</button>
									<button type="button" id="save_crop" class="btn btn-primary">Crop & Salvar</button>
								</div>
							</div>
						</div>
					</div>

				</div>

