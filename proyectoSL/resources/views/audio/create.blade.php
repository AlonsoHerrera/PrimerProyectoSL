 <!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
    	<div class="container">
    		<div class="row">
    			<div>
    				<div>Send audio</div>
    				<div>
    					<form method="POST" action="{{ url('/audio/store')}}" role="form">
    						{{ csrf_field() }}
    						<div>
    							<label for="pad">Pad</label>
    							<input type="text"  value="{{ old('pad') }}" name="pad" required autofocus>

    							<label for="format">Format</label>
    							<input type="format"  value="{{ old('format') }}" name="format" required>
    							<button type="submit">
    								Add Audio
    							</button>
    						</div>
    					</form>
    				</div>
    			</div>
    		</div>
    	</div>
    </body>
</html>