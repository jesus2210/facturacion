@extends('base')
@section('controller')
	<div class="container" ng-app="mainApp" ng-controller="partnerController">
@endsection
@section('content')
	<div class="ui link cards">
		<div class="card" ng-repeat="partner in partners" ng-click="show_partner(partner.id)">
		    <div class="image">
		      <img src="https://s.ytimg.com/yts/img/avatar_720-vflYJnzBZ.png">
		    </div>
		    <div class="content">
		      <div class="header">@{{ partner.name }}</div>
		      <div class="meta">
		        <a>@{{ partner.mail }}</a>
		      </div>
		      <div class="description">
		        @{{ partner.address }}
		      </div>
		    </div>
		    <div class="extra content">
		      <span>
		        <i class="phone icon"></i>
		        @{{ partner.phone }}
		      </span>
		    </div>
		</div>
	</div>
@endsection

