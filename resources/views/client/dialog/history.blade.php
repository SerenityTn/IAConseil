<div id="dialog-box">
  <?php $b = false; ?>
  @foreach($cmessages as $cmessage)
    @if($b)

      <div class="message message-client">
        <img src="{{ URL::asset('imgs/user.png') }}"  width="50px" height="50px" alt="Olga" />
        <b>{{ auth()->user()->nom }}:</b> {{ $cmessage->content }}<br/>
      </div>
      <?php $b = false; ?>
    @else
      <div class="message message-bot">
      <img src="{{ URL::asset('imgs/olga.png') }}"  width="50px" height="50px" alt="Olga" />
      <b><u>Serenity:</u></b>{{ $cmessage->content }}<br/>
    </div>
      <?php $b = true; ?>
    @endif
  @endforeach
</div>
