var app = angular.module('myApp', []);
app.controller('rubelCtrl', function($scope){
    $scope.product= gem;
    
});
var gem = {
    path: 'images/canon_eos_5d_1-200x200.jpg',
    name: 'Rubel',
    price:3.54,
    description:'Good work',
    canPurchase: true
};