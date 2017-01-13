
    $(function(){
        // PUT YOUR JAVASCRIPT HERE BELOW

        // Datepicker
        $('.input-group.date, .date').datepicker({
            language: "en",
            orientation: "auto left",
            format: "dd.mm.yyyy",
            autoclose: true,
            todayHighlight: true
        });

        //LIVESEARCH EXAMPLE in 3 Parts
                // Documentation: https://github.com/twitter/typeahead.js/blob/master/doc/jquery_typeahead.md
                // Doc-Passage on datasets: https://github.com/twitter/typeahead.js/blob/master/doc/jquery_typeahead.md#datasets

            // Part 1: the Matcher Function
            // LEAVE ALONE
            var substringMatcher = function(strs) {
              return function findMatches(q, cb) {
                var matches, substringRegex;

                // an array that will be populated with substring matches
                matches = [];

                // regex used to determine if a string contains the substring `q`
                substrRegex = new RegExp(q, 'i');

                // iterate through the pool of strings and for any string that
                // contains the substring `q`, add it to the `matches` array
                $.each(strs, function(i, str) {
                  if(str.name != undefined ){
                      if (substrRegex.test(str.name)) {
                        matches.push(str);
                      }
                  } else {
                    if (substrRegex.test(str)) {
                        matches.push(str);
                      }
                  }
                });

                cb(matches);
              };
            };

            // Part 2: the Source Data
            var sourcedata = ['foo bar','foo fighters ticket','a fools errand','football'];


            // Part 3: the Livesearch itself

            //
            $('.typeahead').typeahead({
                      highlight: true,
                      minLength: 1
                    },
                    {
                      name: 'mytypeahead',
                      source: substringMatcher(sourcedata),
                      templates: {
                        notFound: '<p class="tt-noentries" ><strong>No entries found</strong></p>',
                        footer: '<p class="tt-footer" ><button class="btn btn-default">Show all results</button></p>',
                        suggestion: function(data){
                              return '<p class="topborder"><strong>' + data + '</strong>  <span class="pull-right">$' +  Math.floor((Math.random() * 100) + 1)  + '.99</span></p>';
                            }
                        }
                    });

        // END OF TYPEAHEAD EXAMPLE

        $(document).bind('keydown','alt+r', function(){
            var url = window.location.href;
            var get = "session_renew=true";
            var start = "?";
            if (url.indexOf("?") >= 0){
                start = "&";
            }
            window.location.href = url+start+get;
        });

        $("#socialsecurity").mask("99-99-9999",{placeholder:"__-__-____"});

        $(".mypopover").popover();

        $(".htmlpopover").popover({
            container: 'body',
            html: true,
            template: '<div class="popover fullwidth" role="tooltip"><div class="arrow"></div><h3 class="popover-title"></h3><div class="fullwidth popover-content"></div></div>',
            content: function () {
                var content = $("#"+$(this).data('content-div')).html();
                return content;
            }
        });

        var mainContentOffset = $("#mainContent").offset();
        if(mainContentOffset != undefined){
            $('body').scrollspy({
                target: '.ps-docs-sidebar',
                offset: mainContentOffset.top+20
            });
        }

        $(".selectOnFocus").focus(function() {
            $(this).select();
        });


        var getGif = function() {
          var gif = [];
          $('img').each(function() {
            var data = $(this).data('alt');
            gif.push(data);
          });
          return gif;
        }
        var gif = getGif();



        $('figure').on('click', function() {

          var $this   = $(this),
                  $index  = $this.index(),

                  $img    = $this.children('img'),
                  $imgSrc = $img.attr('src'),
                  $imgAlt = $img.attr('data-alt'),
                  $imgExt = $imgAlt.split('.');

          if($imgExt[1] === 'gif') {
              $img.attr('src', $img.data('alt')).attr('data-alt', $imgSrc);
          } else {
              $img.attr('src', $imgAlt).attr('data-alt', $img.data('alt'));
          }

        });

        $("#changeVarOverAjax").blur(function() {
            updateSessionVar("set","news.1.title",$(this).val());
                $(this).val("");
                $("#feedback").removeClass("hide");
        });

        $(".fakeReload").click(function() {
            console.log('pip');
            var spinnerMarkup = "<div class=\" align-center\">";
            spinnerMarkup += "    ";
            spinnerMarkup += "    <i class=\"fa fa-spinner fa-spin fa-3x\"></i>";
            spinnerMarkup += "    <br><br><br>";
            spinnerMarkup += "</div>";
            var target = $(this).data("target");
            var tmpContent = $("#"+target).html();
            $("#"+target).html(spinnerMarkup);
            setTimeout(function(){
                $("#"+target).html(tmpContent);
            },1000);
        });

        $('.mytooltip').tooltip({trigger: "click"});
        $(".mytooltip").click(function() {
            if($(this).data("hide") != undefined){
                var delay = $(this).data("hide");
                var that = this;
                setTimeout( function(){
                    $(that).tooltip('hide')}, delay);
            }
        });

        $('.btn-spinner').on('click', function() {
          // keep width of button
          var width = $(this).outerWidth();
          $(this).css("width", width+"px");
          // spinner markup
          var spinner = "<i class=\"fa fa-spinner fa-spin\"></i>";
          // original button label
          var tmpContent = $(this).html();
          // show spinner
          $(this).html(spinner);
          // make scope for timeout function
          var that = $(this);
            setTimeout(function() {
               // rollback
               $(that).html(tmpContent);
           }, 1000);
        });


        $(".trigger").click(function() {
            var group = $(this).data("group");
            var item = $(this).data("item");
            $("."+group).addClass("hide");
            $("."+group+"-" + item).removeClass("hide");
        });

        function showTooltip(target, text){
             $(target).attr('data-toggle','tooltip');
             $(target).attr('data-placement','top');
             $(target).attr('data-trigger','click');
             $(target).attr('title', text);


            //and finally show the popover
            $(target).tooltip('show');
            var that = target;
            setTimeout( function(){
                     $(that).tooltip('hide')}, 1500);
        }

        $(".copyToClipboard").click(function() {
            var target = $(this).data("target");
            var text = $("#"+target).html();
            $('<div style="opacity:0"><textarea id="textarea'+target+'">'+text+'</textarea></div>').appendTo("body");
            $("#textarea"+target).select();
            document.execCommand('copy');
            $("#textarea"+target).remove();
            showTooltip(this, "Copied to Clipboard");
        });

        $(".showHide").click(function() {
            if($("#"+$(this).data("show")).hasClass("hide")){
                $("#"+$(this).data("show")).css("display", "none").removeClass("hide");
            }
            $("#"+$(this).data("show")).toggle("slow");
            $("#"+$(this).data("hide")).toggle("slow");
        });

        function countDown(target){
            var number = Number($("#"+target).html());
            number = Math.ceil(number*0.89);
            $("#"+target).html(number);
        }
        $(".countDown").click(function() {
            var target = $(this).data("target");
            countDown(target);
        });



        // Carousel if there is any
        $('.carousel').carousel(
            {interval: 0}
        );
        // Tooltip if there is any
        // $('.ps-tooltip').tooltip();

        // $('[data-toggle="tooltip"]').tooltip();

        // $('[data-toggle="tooltip"]').click(function() {
        //     if($(this).data("delay") != undefined){
        //         var delay = $(this).data("delay");
        //         setTimeout( function(){
        //             $('.tooltip').tooltip('hide')}, delay);
        //     }
        // });
    })