var atlasApp = angular.module('atlasApp', [ 'ngRoute']);

// angular.element('.c-navbar').addClass('yo');



atlasApp.controller('filtersCtrl', ['$scope', function($scope){
	$scope.filterSchools = function ($filter){
		// alert('yo');
	}
}])

// atlasApp.directive('myNavscroll', function($window) {
//     return function(scope, element, attrs) {
//         angular.element($window).bind("scroll", function() {
//             if (!scope.scrollPosition) {
//                 scope.scrollPosition = 0
//             }

//             if (this.pageYOffset > scope.scrollPosition) {
//                 scope.boolChangeClass = true;
//             } else {
//                 scope.boolChangeClass = false;
//             }
//             scope.scrollPosition = this.pageYOffset;
//             scope.$apply();
//         });
//     };
// });

// ppMigrationApp.controller('pageController', ['$scope', '$sce', '$timeout',  'ppMigCookieService', 'ajaxRequestService', 'dataLayerService', function($scope, $sce, $timeout , ppMigCookieService, ajaxRequestService, dataLayerService) {

//     $scope.pensionsHome = '/plan/pensions/';
//     $scope.slides = [];
//     $scope.mortgageProtectionSlides = [];
//     $scope.sentences = [];
//     $scope.employmentStatus = [];
//     $scope.topics = [];
//     $scope.decade = [];
//     $scope.articleFormats = [];
//     $scope.featuredArticles = [];
//     $scope.keyword = '';
//     $scope.sortOrder = {title: 'Date', order: '-date_published'};

//     $scope.numDummyArticles = function(num) {
//         return new Array(num);
//     };

//     var PENSIONS_HOME = 'pensions',
//         ARTICLES = 'articles',
//         ARTICLE = 'article';



//     function initPageArticles(page) {
//         $scope.articles = [];
//         var url = '/wp-json/boi-api/v1/articles/all/pensions/3/';
//         if(ppMigCookieService.hasCookie(segmentationCookieLabel)){
//             var cookie = ppMigCookieService.getCookie(segmentationCookieLabel);
//             numberResults = (page === PENSIONS_HOME) ? 6 : 3;
//             url = '/wp-json/boi-api/v1/articles/segmented/' + cookie.articleCategory + '/' + cookie.decade + '/' + cookie.employmentStatus + '/'+ numberResults + '/';
//         }
//         ajaxRequestService.async(url).then(function(data) {
//             $scope.articles = data;
//         });
//     }


//     function initTaxonomyProperties(taxonomy, term){
//         var url = '/wp-json/boi-api/v1/taxonomy/'+taxonomy+'/'+term+'/';
//         ajaxRequestService.async(url).then(function(data) {
//             $scope.taxonomyProperites = data;
//         });
//     }


// }]);



// // Ajax request service
// atlasApp.factory('ajaxRequestService', function($http) {
//     var ajaxRequestService = {
//         async: function(url) {
//             var promise = $http.get(url).then(function (response) {
//                 return response.data;
//             });
//             return promise;
//         }
//     };
//     return ajaxRequestService;
// });
