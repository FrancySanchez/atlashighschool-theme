var atlasApp = angular.module('atlasApp', ['ngRoute']);
var api = {};

// This to avoid conflicts with the twigs syntax {{}} as it happens to be the same in angular, hence the need to change it to {[]} instead.
atlasApp.config(function($interpolateProvider) {
    $interpolateProvider.startSymbol('{[');
    $interpolateProvider.endSymbol(']}');
});


atlasApp.config(function($routeProvider, $locationProvider) {
    // Enable html5 mode
    $locationProvider.html5Mode(true);
});

atlasApp.controller('filtersCtrl', ['$scope', '$http', '$routeParams', '$sce', function($scope, $http, $routeParams, $sce) {

    console.log('Hellow world');

    // JSON content location
    api.query = 'http://localhost:8888/Highschool/wp-json/wp/v2/schools/';

    $http.get(api.query).success(function(reponse) {
        $scope.posts = reponse;
        console.log($scope.posts);
    });

    $scope.query = {};

    $scope.updateResults = function($keyword, query) {

        // if ($keyword.type == 'Private') {
        //     console.log('yahoo')
        // }
        var filteredSchools = $scope.query;

        if (filteredSchools == '') {
            filteredSchools = $keyword;
        } else {
            
            if (filteredSchools.indexOf($keyword) !== -1) {

            } else {
                filteredSchools = filteredSchools.push($keyword);
            }

        }
        console.log(filteredSchools);
        return filteredSchools;
    };



}]);





// atlasApp.controller('filtersCtrl', ['$scope', function($scope){


// }])



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
