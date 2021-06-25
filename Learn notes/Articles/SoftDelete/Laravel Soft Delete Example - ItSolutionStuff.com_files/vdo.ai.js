
    /*09-Jun-2021 05:57:53*/
    var vdo_analyticsID = 'UA-113932176-33';
(function(v, d, o, ai) {
    ai = d.createElement('script');
    ai.async = true;
    ai.src = o;
    d.head.appendChild(ai);
})(
    window,
    document,
    'https://www.googletagmanager.com/gtag/js?id=' + vdo_analyticsID
);

function vdo_analytics() {
    window.dataLayer.push(arguments);

}
(function () {
  window.dataLayer = window.dataLayer || [];
  vdo_analytics("js", new Date());
})();
vdo_analytics('event', 'loaded', { send_to: vdo_analyticsID, event_category: 'vdoaijs', event_label: 'v-itsolutionstuff' });




try {



function insideSafeFrame() {
  try {
    if(top != self && window.innerWidth > 1 && window.innerHeight > 1) {
      return true;
    }
    if(top.location.href) {
      return false;
    }
  } catch (error) {
    return true;
  }
}



var w_vdo = (insideSafeFrame()) ? window : window.top,
d_vdo = w_vdo.document;
(function (window, document, deps, publisher) {
  var protocol = window.location.protocol;

  window.vdo_ai_ = window.vdo_ai_ || {};
  window.vdo_ai_.cmd = window.vdo_ai_.cmd || [];
  
    function loadPlayerDiv(id,parentId,iframeBurst=false) {
    if (!iframeBurst) {
      if(document.getElementById(id) == null) {
        var s = document.createElement('div');
        s.id = id;
      } else{
        var s = document.getElementById(id);
      }
       if (parentId != '') {
         var parentDiv = document.getElementById(parentId);
         parentDiv.style.display = "block";
         parentDiv.style.width = "100%";
         if (document.getElementById(parentId).parentNode.offsetWidth < 350){
           var margin = (352 - document.getElementById(parentId).parentNode.clientWidth )/2 ;
           parentDiv.style.marginLeft = '-'+margin + 'px';
         }
         parentDiv.appendChild(s);
       } else{
         document.body.appendChild(s);
       }

    } else{

      var parentIframes = top.document.querySelectorAll('iframe');
      for (var i=0; i < parentIframes.length; i++) {
        var el = parentIframes[i];
        if (el.contentWindow === self) {
            // here you can create an expandable ad
            var s = document.createElement('div');
            s.style.zIndex=111;
            s.style.margin = "0 auto";
            s.style.display = "block";
            s.style.position = "relative";
            s.width = 'fit-content';
            s.id = id;
            var googleDiv = el.parentNode;


            if (parentId != '') {
              var parentDiv = document.createElement('div');
              parentDiv.id = parentId;
              parentDiv.style.display = "block";
              parentDiv.style.width = "100%";
              parentDiv.appendChild(s);
              googleDiv.insertBefore(parentDiv, el);
            } else{
              googleDiv.insertBefore(s, el);
            }


            googleDiv.style.width = "auto";
            googleDiv.parentNode.style.width='auto';
            googleDiv.parentNode.style.height='auto';
        }
      }
    }
  }

  

  var playerLoaded = false;

  var checkTimer = setInterval(function() {
      if(window.initVdo && typeof window.google != 'undefined' && window.google.ima) {
       callAdframe();
      }
  }, 1000);


  function callAdframe() {
    if(!playerLoaded) {
        playerLoaded = true;
        clearInterval(checkTimer);
        window.vdo_ai_.cmd.push(function() {
          window.initVdo({"desktop":{"show":true,"muted":true,"width":640,"height":360,"bottomMargin":10,"topMargin":10,"unitType":"content","leftOrRight":{"position":"topRight","margin":10},"cancelTimeoutType":{"type":"timeout","eventtype":"readyforpreroll","cancelTimeout":60000},"passback":{"allow":true,"src":"","string":"    var pass_1_back = document.getElementById('_vdo_ads_player_ai_3621');var vdo_pass_back_script1 = document.createElement('script');vdo_pass_back_script1.type = 'text\/javascript';vdo_pass_back_script1.src = '\/\/services.bilsyndication.com\/adv1\/?q=00635990dc0d82d7d64513f3e74223ae';var vdo_pass_back_script2 = document.createElement('script');vdo_pass_back_script2.innerHTML = 'var vitag = vitag || {};';pass_1_back.appendChild(vdo_pass_back_script1);pass_1_back.appendChild(vdo_pass_back_script2);","timeout":30000,"type":"timeout","value":30000},"smallWidth":498,"smallHeight":280,"crossSize":17,"dispose_off":false,"bannerOff":false,"companionOff":false,"autoResize":true},"mobile":{"dispose_off":false,"show":true,"muted":true,"width":333,"height":250,"bottomMargin":10,"topMargin":10,"unitType":"content","leftOrRight":{"position":"topRight","margin":10},"cancelTimeoutType":{"type":"timeout","eventtype":"readyforpreroll","cancelTimeout":60000},"passback":{"allow":true,"type":"timeout","value":30000,"src":"","string":"    var pass_1_back = document.getElementById('_vdo_ads_player_ai_3621');var vdo_pass_back_script1 = document.createElement('script');vdo_pass_back_script1.type = 'text\/javascript';vdo_pass_back_script1.src = '\/\/services.bilsyndication.com\/adv1\/?q=00635990dc0d82d7d64513f3e74223ae';var vdo_pass_back_script2 = document.createElement('script');vdo_pass_back_script2.innerHTML = 'var vitag = vitag || {};';pass_1_back.appendChild(vdo_pass_back_script1);pass_1_back.appendChild(vdo_pass_back_script2);","timeout":30000},"smallWidth":333,"smallHeight":250,"crossSize":17,"bannerOff":false,"companionOff":false,"autoResize":false},"bottomMargin":10,"showOnlyFirst":false,"cancelTimeout":10000,"id":"vdo_ai_6786","muted":true,"playsinline":true,"autoplay":true,"preload":true,"video_clickthrough_url":"","pubId":"912","brandLogo":{"img":"","url":""},"coppa":false,"add_on_page_ready":"no","showLogo":true,"adbreak_offsets":[0,5,10],"show_on_ad":true,"autoReplay":true,"close_after_first_ad_timer":0,"canAutoplayCheck":true,"domain":"itsolutionstuff.com","path":"a.vdo.ai\/core\/v-itsolutionstuff\/adframe.js","unitId":"_vdo_ads_player_ai_3621","tag_type":"other","parent_div":"v-itsolutionstuff","content_sources":[{"video":"uploads\/videos\/161458407922603c990fd3a9c.m3u8","img":"uploads\/thumbnails\/161458407922603c990fd3a9c.png"},{"video":"uploads\/videos\/162089519740609ce5ddf0837.m3u8","img":"uploads\/thumbnails\/162089519740609ce5ddf0837.png"},{"video":"uploads\/videos\/161457849592603c833f8350a.m3u8","img":"uploads\/thumbnails\/161457849592603c833f8350a.png"}],"hls":false,"media_url":"https:\/\/h.vdo.ai\/","show_on":"ads-ad-started","unitStyle":"single","tagType":"video","bidders":{"0":{"banner":{"prebid":[{"bidder":"adtelligent","params":{"aid":598023}},{"bidder":"appnexus","params":{"placementId":20340867}},{"bidder":"appnexus_apac","params":{"placementId":21450949,"floor":0.5}},{"bidder":"eplanning","params":{"ci":"30135"}},{"bidder":"loopme","params":{"ak":"c2d5efaa04"}},{"bidder":"onetag","params":{"pubId":"62e564782c44a66"}},{"bidder":"openx","params":{"delDomain":"vdoai-d.openx.net","unit":"542517147"}},{"bidder":"pubmatic","params":{"publisherId":"159175","adSlot":"v-itsolutionstuff-b-pre-1"}},{"bidder":"rhythmone","params":{"placementId":"217952"}},{"bidder":"rtbhouse","params":{"region":"prebid-asia","publisherId":"RlWjKokeUOHRIH9PD08W"}},{"bidder":"synacormedia","params":{"seatId":"zero1","placementId":"91932","pos":1}}],"amazon":[{"bidder":"amazon","params":{"placementId":"itsolutionstuff.com"}}]},"bids":[{"bidder":"appnexus","params":{"placementId":20340864,"video":{"skippable":true,"playback_method":null}}},{"bidder":"appnexus_apac","params":{"placementId":21450948,"floor":0.5,"video":{"skippable":true,"playback_method":null}}},{"bidder":"loopme","params":{"ak":"ce09152c18"}},{"bidder":"openx","params":{"delDomain":"vdoai-d.openx.net","unit":"542517148"}},{"bidder":"pubmatic","params":{"publisherId":"159175","adSlot":"v-itsolutionstuff-v-pre-1","video":{"mimes":["video\/mp4","video\/webm","application\/javascript","video\/ogg"],"skippable":true}}},{"bidder":"rhythmone","params":{"placementId":"217952"}},{"bidder":"spotx","params":{"channel_id":"312697","ad_unit":"instream","floor":0.5}},{"bidder":"synacormedia","params":{"seatId":"zero1","placementId":"91931","pos":1,"video":{"minduration":15,"maxduration":60,"startdelay":1,"linearity":1}}},{"bidder":"Openx_EBDA","params":{"placementId":"vdo_ai"}},{"bidder":"Pubmatic_EBDA","params":{"placementId":"vdo_ai"}},{"bidder":"Sonobi_EBDA","params":{"placementId":"vdo_ai"}},{"bidder":"Sovrn_EBDA","params":{"placementId":"vdo_ai"}},{"bidder":"unruly_EBDA","params":{"placementId":"vdo_ai"}},{"bidder":"Yieldmo_EBDA","params":{"placementId":"vdo_ai"}}]},"5":{"banner":{"prebid":[{"bidder":"adtelligent","params":{"aid":598023}},{"bidder":"appnexus","params":{"placementId":20340868}},{"bidder":"openx","params":{"delDomain":"vdoai-d.openx.net","unit":"541153011","floor":"0"}},{"bidder":"synacormedia","params":{"seatId":"zero1","placementId":"91932","pos":1,"floor":0.5}}],"amazon":[{"bidder":"amazon","params":{"placementId":"itsolutionstuff.com"}}]},"bids":[{"bidder":"appnexus","params":{"placementId":20340865,"video":{"skippable":true,"playback_method":null}}},{"bidder":"openx","params":{"delDomain":"vdoai-d.openx.net","unit":"542517145"}},{"bidder":"spotx","params":{"channel_id":"314021","ad_unit":"instream","floor":0.5}},{"bidder":"synacormedia","params":{"seatId":"zero1","placementId":"91931","pos":1,"video":{"minduration":15,"maxduration":60,"startdelay":1,"linearity":1},"floor":0.5}},{"bidder":"Openx_EBDA","params":{"placementId":"vdo_ai"}},{"bidder":"Pubmatic_EBDA","params":{"placementId":"vdo_ai"}},{"bidder":"Sonobi_EBDA","params":{"placementId":"vdo_ai"}},{"bidder":"Sovrn_EBDA","params":{"placementId":"vdo_ai"}},{"bidder":"unruly_EBDA","params":{"placementId":"vdo_ai"}},{"bidder":"Yieldmo_EBDA","params":{"placementId":"vdo_ai"}}]},"10":{"banner":{"prebid":[{"bidder":"adtelligent","params":{"aid":598023}},{"bidder":"appnexus","params":{"placementId":20340869}},{"bidder":"openx","params":{"delDomain":"vdoai-d.openx.net","unit":"542517150"}},{"bidder":"synacormedia","params":{"seatId":"zero1","placementId":"91932","pos":1,"floor":0.5}}],"amazon":[{"bidder":"amazon","params":{"placementId":"itsolutionstuff.com"}}]},"bids":[{"bidder":"appnexus","params":{"placementId":20340866,"video":{"skippable":true,"playback_method":null}}},{"bidder":"openx","params":{"delDomain":"vdoai-d.openx.net","unit":"542517146"}},{"bidder":"spotx","params":{"channel_id":"314022","ad_unit":"instream","floor":0.5}},{"bidder":"synacormedia","params":{"seatId":"zero1","placementId":"91931","pos":1,"video":{"minduration":15,"maxduration":60,"startdelay":1,"linearity":1},"floor":0.5}},{"bidder":"Openx_EBDA","params":{"placementId":"vdo_ai"}},{"bidder":"Pubmatic_EBDA","params":{"placementId":"vdo_ai"}},{"bidder":"Sonobi_EBDA","params":{"placementId":"vdo_ai"}},{"bidder":"Sovrn_EBDA","params":{"placementId":"vdo_ai"}},{"bidder":"unruly_EBDA","params":{"placementId":"vdo_ai"}},{"bidder":"Yieldmo_EBDA","params":{"placementId":"vdo_ai"}}]}},"targeting":[],"waterfallTags":{"0":["googleads.g.doubleclick.net\/pagead\/ads?client=ca-video-pub-7094677798399606&slotname=v-itsolutionstuff-v-pre-1v&ad_type=video&description_url=http%3A%2F%2Fitsolutionstuff.com&max_ad_duration=60000&videoad_start_delay=0&vpmute=1&vpa=1&sdmax=60000","googleads.g.doubleclick.net\/pagead\/ads?client=ca-video-pub-2403018226404213&slotname=v-itsolutionstuff-v-pre-1vv&ad_type=video&description_url=http%3A%2F%2Fitsolutionstuff.com&max_ad_duration=60000&videoad_start_delay=0&vpmute=1&vpa=1&sdmax=60000","pubads.g.doubleclick.net\/gampad\/ads?iu=\/26001828\/yazle_pd_deal_UAE_sites&description_url=http%3A%2F%2Fitsolutionstuff.com%2F&tfcd=0&npa=0&sz=288x162%7C300x250%7C400x300%7C419x236%7C640x360%7C640x480&gdfp_req=1&output=vast&unviewed_position_start=1&env=vp&impl=s&correlator=14151352&vpos=preroll"],"5":["googleads.g.doubleclick.net\/pagead\/ads?client=ca-video-pub-7094677798399606&slotname=v-itsolutionstuff-v-mid1-1v&ad_type=video&description_url=http%3A%2F%2Fitsolutionstuff.com&max_ad_duration=60000&videoad_start_delay=0&vpmute=1&vpa=1&sdmax=60000"],"10":["googleads.g.doubleclick.net\/pagead\/ads?client=ca-video-pub-7094677798399606&slotname=v-itsolutionstuff-v-mid2-1v&ad_type=video&description_url=http%3A%2F%2Fitsolutionstuff.com&max_ad_duration=60000&videoad_start_delay=0&vpmute=1&vpa=1&sdmax=60000"]},"adx":{"0":[{"name":"google","placement_id":"v-itsolutionstuff-b-pre-1v"}],"5":[{"name":"google","placement_id":"v-itsolutionstuff-b-mid1-1v"}],"10":[{"name":"google","placement_id":"v-itsolutionstuff-b-mid2-1v"}]},"s2s":false,"overflow_size":false,"handle_url_change":true,"style":""});
        });

    }
  }

  
  function loadScriptSync(src, id) {
    return new Promise(function(resolve, reject) {
        
        if(src.indexOf('ima3.js') > 0 && document.querySelector('script[src*="imasdk.googleapis.com/js/sdkloader/ima3.js"]')) {
            resolve();
            return false;
        }
        var s = document.createElement("script");
        s.id = id;
        var existingScript = document.getElementById(id);
        
        s.async = true;
        s.src = protocol + src;
        document.body.appendChild(s);
        s.onload = resolve;
        s.onerror = reject;
    })
  }

  function inIframe(){try{return self!==top}catch(r){return!0}}var iframe_Burst=inIframe() ? insideSafeFrame() ? false : true : false;



  //#region full_dependencies testing
                  loadPlayerDiv('_vdo_ads_player_ai_3621','v-itsolutionstuff',iframe_Burst);
       if(typeof window.initVdo !== 'function') {  // Check for existing dependencies
            Promise.all([
              loadScriptSync(deps + "dependencies_hbv4/vdo.min.js", "_vdo_ads_css_5654_"),
              loadScriptSync("//imasdk.googleapis.com/js/sdkloader/ima3.js", "_vdo_ads_sdk_5654_")
            ]).then(function() {
               callAdframe();
          })
        }
  //#endregion

})(w_vdo, d_vdo, '//a.vdo.ai/core/', 'v-itsolutionstuff');


} catch (e) {


    vdo_analytics('event', 'Err:' + (btoa(e.message).substr(0,10)), { send_to: vdo_analyticsID, event_label: 'v-itsolutionstuff', event_category: 'VDOError' });


    var oReq = new XMLHttpRequest();
    oReq.open('get', '//a.vdo.ai/core/logger.php?msg=' + encodeURIComponent(e.stack)+ '&tag=v-itsolutionstuff&code='+btoa(e.message).substr(0,10) + '&url=' + encodeURIComponent(location.href)  + '&func=vdo.ai.js', true);
    oReq.send();

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'https://analytics.vdo.ai/logger', true);

    var requestObject = {
      domainName: location.hostname,
      page_url:location.href,
      tagName: 'v-itsolutionstuff',
      event: 'error',
      eventData: btoa(e.message).substr(0, 10),
      uid: ''
    };


    xhr.send(JSON.stringify(requestObject));



}