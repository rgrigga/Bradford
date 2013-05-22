@extends('site.layouts.default')

{{-- Web site Title --}}
@section('title')
{{{ Lang::get('user/user.profile') }}} ::
@parent
@stop

{{-- Content --}}
@section('content')
<div class="page-header">
	<h1>User Profile</h1>
</div>
<table class="table table-striped">
    <thead>
    <tr>
        <th>#</th>
        <th>Username</th>
        <th>Signed Up</th>
    </tr>
    </thead>
    <tbody>
    <tr>
        <td>{{{$user->id}}}</td>
        <td>{{{$user->username}}}</td>
        <td>{{{$user->joined()}}}</td>
    </tr>
    </tbody>
</table>

<h2>Print a copy of your policy information:</h2>
 <div class="accordion" id="accordion">
     <div class="accordion-group">
         <div class="accordion-heading">
             <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
                 Home Policy #12345 - Medical Mutual
             </a>
         </div>
         <div id="collapseOne" class="accordion-body collapse in">
         <div class="accordion-inner">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores, nulla veniam voluptas voluptatem quos ad illum nemo iste sed odit.Lorem ipsum dolor sit amet.
             </div>
         </div>
     </div>
     <div class="accordion-group">
         <div class="accordion-heading">
             <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
                 Relationship number two
             </a>
         </div>
         <div id="collapseTwo" class="accordion-body collapse">
             <div class="accordion-inner">
                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
             </div>
         </div>
     </div>
     <div class="accordion-group">
         <div class="accordion-heading">
             <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
                 Collapsible Group Item #3
             </a>
         </div>
         <div id="collapseThree" class="accordion-body collapse">
             <div class="accordion-inner">
                 Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
             </div>
         </div>
     </div>
 </div>

@stop
