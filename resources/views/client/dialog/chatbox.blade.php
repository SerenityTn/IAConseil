<input type="hidden" id="username" value="{{ auth()->user()->nom }}"/>
<input type="hidden" id="user_id" value="{{ auth()->user()->id }}"/>
<div class="container">
  <div class="col-md-4">
    <div id='bot-div' style='background-color:#fff'>
      <div id='avatar-image-div' style='display:none;'>
        <img id='avatar' style='height:300px;'/>
      </div>
      <div id='avatar-video-div' style='display:none;background-repeat: no-repeat;'>
        <video id='avatar-video' autoplay preload='auto' style='background:transparent;height:300px;'>
          Video format not supported by your browser (try Chrome)
        </video>
      </div>
      <div id='avatar-canvas-div' style='display:none'>
        <canvas id='avatar-canvas' style='background:transparent;height:300px;'>
          Canvas not supported by your browser (try Chrome)
        </canvas>
      </div>
      <div>
        <div style='max-height:100px;overflow:auto;margin:8px;'>
          <span id='response'></span><br/>
        </div>
        <span style='display:block;overflow:hidden;margin:2px;padding-right:4px'><input id='chat' type='text' style='width:100%'/></span>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="{{ URL::asset('js/sdk.js') }}"></script>
  <script type='text/javascript'>
  SDK.applicationId = "1485730099812757779";
  var sdk = new SDKConnection();
  var web = new WebChatbotListener();
  web.connection = sdk;
  web.instance = '12787525';
  web.instanceName = 'SerenityTn';
  document.getElementById('chat').addEventListener('keypress', function(event) {
    if (event.keyCode == 13) {
      var userName = $('#username').val();
      web.pushToHistory(userName, $('#chat').val());
      web.sendMessage();
      return false;
    }
  });
  </script>
  <div class="col-md-8" id="history">
      @include('client.dialog.history')
  </div>
</div>
