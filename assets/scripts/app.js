var atlasApp = angular.module('atlasApp', ['ngMessages', 'ngAnimate']),
    
    };



ppMigrationApp.controller('pageController', ['$scope', '$sce', '$timeout',  'ppMigCookieService', 'ajaxRequestService', 'dataLayerService', function($scope, $sce, $timeout , ppMigCookieService, ajaxRequestService, dataLayerService) {

    $scope.pensionsHome = '/plan/pensions/';
    $scope.slides = [];
    $scope.mortgageProtectionSlides = [];
    $scope.sentences = [];
    $scope.employmentStatus = [];
    $scope.topics = [];
    $scope.decade = [];
    $scope.articleFormats = [];
    $scope.featuredArticles = [];
    $scope.keyword = '';
    $scope.sortOrder = {title: 'Date', order: '-date_published'};

    $scope.numDummyArticles = function(num) {
        return new Array(num);
    }

    var PENSIONS_HOME = 'pensions',
        ARTICLES = 'articles',
        ARTICLE = 'article';

    

    function initPageArticles(page) {
        $scope.articles = [];
        var url = '/wp-json/boi-api/v1/articles/all/pensions/3/';
        if(ppMigCookieService.hasCookie(segmentationCookieLabel)){
            var cookie = ppMigCookieService.getCookie(segmentationCookieLabel);
            numberResults = (page === PENSIONS_HOME) ? 6 : 3;
            url = '/wp-json/boi-api/v1/articles/segmented/' + cookie.articleCategory + '/' + cookie.decade + '/' + cookie.employmentStatus + '/'+ numberResults + '/';
        }
        ajaxRequestService.async(url).then(function(data) {
            $scope.articles = data;
        });
    }


    function initTaxonomyProperties(taxonomy, term){
        var url = '/wp-json/boi-api/v1/taxonomy/'+taxonomy+'/'+term+'/';
        ajaxRequestService.async(url).then(function(data) {
            $scope.taxonomyProperites = data;
        });
    }

 
}]);



// Ajax request service
atlasApp.factory('ajaxRequestService', function($http) {
    var ajaxRequestService = {
        async: function(url) {
            var promise = $http.get(url).then(function (response) {
                return response.data;
            });
            return promise;
        }
    };
    return ajaxRequestService;
});

