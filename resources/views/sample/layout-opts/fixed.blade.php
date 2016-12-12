@extends('sample.layouts.app')

@section('layout', 'fixed sidebar-mini')

@section('title', 'Fixed Layout')
@section('description', 'Example')

@section('breadcrumb')
	<li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
  <li><a href="#">Layout</a></li>
  <li class="active">Fixed</li>
@endsection

@section('content')
	<div class="callout callout-info">
    <h4>Tip!</h4>

    <p>Add the fixed class to the body tag to get this layout. The fixed layout is your best option if your sidebar
      is bigger than your content because it prevents extra unwanted scrolling.</p>
  </div>
  <!-- Default box -->
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Title</h3>

      <div class="box-tools pull-right">
        <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse">
          <i class="fa fa-minus"></i></button>
        <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
          <i class="fa fa-times"></i></button>
      </div>
    </div>
    <div class="box-body">
      Start creating your amazing application!
    </div>
    <!-- /.box-body -->
    <div class="box-footer">
      Footer
    </div>
    <!-- /.box-footer-->
  </div>
  <!-- /.box -->
@endsection

@push('scripts')
	<!-- Slimscroll -->
	<script src="{{ url('plugins') }}/slimScroll/jquery.slimscroll.min.js"></script>
	<!-- FastClick -->
	<script src="{{ url('plugins') }}/fastclick/fastclick.js"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="{{ url('js/demo.js') }}"></script>
@endpush