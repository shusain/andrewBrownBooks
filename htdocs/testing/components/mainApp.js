var mainApp = angular.module("myApp", ["socialMedia"]);

mainApp.config(function($routeProvider){
  $routeProvider.
    when("/", {templateUrl:'home.html'}).
    when("/press", {templateUrl:'press.html'}).
    when("/about-us", {templateUrl:'aboutUs.html'}).
    when("/shop", {templateUrl:'shop.html'}).
    when("/contact-us", {templateUrl:'contact.html'}).    
    otherwise({redirectTo:"/"});
});