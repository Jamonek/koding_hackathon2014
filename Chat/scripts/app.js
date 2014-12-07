angular.module('PubNubAngularApp', ["pubnub.angular.service"])
	.controller('JoinCtrl', function($scope, PubNub) { 
		PubNub.init({
		  publish_key:'your pub key',
		  subscribe_key:'your sub key',
		  uuid:'an_optional_user_uuid'
		})
	});
