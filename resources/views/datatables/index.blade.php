@extends('layouts.kktinner')

@section('content')
<style>
 p.label-entrypoint.required:after { content:" *"; color: red; }

 .content {
   background-color: #FFF;
   margin-top:32px;
   margin-bottom: 96px;
   border-color: #ddd;
   border-style: solid;
   border-width: thin;
   /*min-height:1432px;*/
 }
th ,td {
    border: 2px solid black;
    text-align:center;
}
table {
    border: 2px solid black;
}
/*customize looks of specific element*/
/*table.datatables {
    width:10px;
}*/
</style>
<div class="container content">
  <div class="row">
    <div class="col-md-offset-1 col-md-10">
      <section class="section">
          <div class="section-head">
            <h2 class="section-title" style="text-decoration: underline">Employees Status</h2>
            <p>Place to manage company's employees. . .</p>
          </div>
 
        <section class="section-secondary">
          <div class="section-body" style="margin-top:1.5em">
                <button id="btn-add" name="btn-add" class="btn btn-primary create"><i class="glyphicon glyphicon-user"></i> Register new employees</button>
                <button id="btn-add" name="btn-add" class="btn btn-success btn-xs reload" style="margin-top:-1em"><i class="glyphicon glyphicon-refresh"></i> Reload Table</button>

            <div style="padding-top:1em">
            <table class="table table-bordered table-inverse" id="users-table">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Role</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact Number</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
                </table>
                </div>
        <!-- Pagination check pagination tutor at Laracast 5.4 -->
            </div>
            </section>
            </section>
    </div>
    </div>
</div>
    @include('datatables.indexpop')
@stop

@push('scripts')
<script type="text/javascript" src="/js/datatables.js"></script>
@endpush