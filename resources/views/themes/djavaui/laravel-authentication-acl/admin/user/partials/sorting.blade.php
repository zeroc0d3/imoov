{!!Form::label('Sorting: ') !!}

{!!Form::select('', ["" => "select column", "first_name" => "First name", "last_name" => "Last name", "email" => "Email", "last_login" => "Last login", "activated" => "Active"], $request->get('order_by',''), ['class' => 'form-control form-validable', 'id' => 'order-by-select']) !!}
<span class="text-danger hidden form-error-message">The order by field is required.</span>
<div class="clearfix"></div>
{!!Form::select('', ["asc" => "Ascending", "desc" => "Descending"], $request->get('ordering','asc'), ['class' =>'form-control', 'id' => 'ordering-select']) !!}
<div class="col-md-12 margin-top-10 btn-sort">
    <a class="btn btn-success pull-right" id="add-ordering-filter"><i class="fa fa-plus"></i> Add Sort</a>
</div>
<div class="col-md-12 margin-top-10">
<span id="append-sorting"></span>
</div>
{!!Form::hidden('order_by',$request->get('order_by'),["id" => "order-by" ]) !!}
{!!Form::hidden('ordering',$request->get('ordering'), ["id" => "ordering"]) !!}
<div class="clearfix"></div>

@section('footer_scripts')
@parent
{!! Theme::set('djavaui') !!}
{!! Theme::js('zeroc0d3/js/zeroc0d3.custom-ordering.js') !!}
@stop
