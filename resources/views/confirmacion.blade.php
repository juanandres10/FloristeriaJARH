	@auth
    	<script type="text/javascript">
    	alert("@lang('Welcome') {{auth()->user()->name}}");
    	</script>
	@endauth
{{view('home')}}