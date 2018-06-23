<form action="{{route('inten')}}" method="post">
	@csrf     <!-- BAO MAT POST  -->  
	<input type="text" name="ten" placeholder="nhap ten" id="ten">
	<input type="submit"  >

</form>
