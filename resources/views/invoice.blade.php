@extends('app')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-10 col-md-offset-1">
			<div class="panel panel-default">
				<div class="panel-heading">Invoice</div>

				<div class="panel-body">
					Invoice ammount: {!! $totalAmmount or 'no data available!'  !!}
				</div>
			</div>
		</div>
	</div>
</div>
@endsection
