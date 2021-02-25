<h3 class="h3 text-center">[ Sidebar ]</h3>
<!-- NO borrar la clase  formPages del form es para q funcione con preview-->
<form method="post" action="<?=SERVER?>contact-us" class="form-inline form formPages">
	<div class="row">
	    <div cms-cols="col cs-12 cx-12">
	      <input type="text" name="fullname"  placeholder="Name">
	    </div>
	    <div cms-cols="col cs-12 cx-12">
	      <input type="text" name="telephone" placeholder="phone">
	    </div>
	    <div cms-cols="col cs-12 cx-12">
	      <input type="email" name="email" placeholder="Email">
	    </div>
	    <div cms-cols="col cs-12 cx-12">
	      <textarea placeholder="Comments" name="comments" ></textarea>
	    </div>
	    <div cms-cols="col cs-12 cx-12">
	    	<!-- campo de control para el autorelleno en contact -->
			<input name="autofilling" type="hidden" value="1">
			<!-- fin de campo de control -->
			<input type="submit" value="Continue..." class="btn-cms btn-blue" >
	    </div>
	</div>
</form>
