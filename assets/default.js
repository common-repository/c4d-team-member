var teamMemberSlider={};!function(e){e(document).ready(function(){var a={items:4,singleItem:!1,autoPlay:!1,stopOnHover:!1,navigation:!0,scrollPerPage:!1,navigationText:['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],pagination:!0,paginationNumbers:!1,autoHeight:!0,lazyLoad:!0};e(".c4d-team-member").each(function(){var i=e(this).find(".c4d-team-member__slider > div").attr("id"),t=teamMemberSlider[i];e.each(a,function(e,i){"undefined"!=typeof t[e]&&("false"==t[e]?a[e]=!1:"true"==t[e]?a[e]=!0:a[e]=t[e])}),e("#"+i).owlCarousel(a)})})}(jQuery);