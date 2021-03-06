@canany(['profile.view.limited', 'profile.view.all'])
<div class="card">
  <div class="card-header">Tool Bookings</div>
  <booking-calendar-list
    classs="card-body"
    bookings-url="{{ route('api.bookings.index', ['tool' => '_ID_']) }}"
    :initial-bookings="{{ json_encode($bookings) }}"
    :tool-ids="{{ json_encode($toolIds) }}"
    :remove-card-class="true"
    ></booking-calendar-list>
 {{--  <div class="card-footer">
    <a href="#" class="btn btn-primary" target="_blank"><i class="far fa-clock" aria-hidden="true"></i> Schedule an Induction</a>
  </div> --}}
</div>
{{-- <div class="card">
  <div class="card-header">Tool Access</div>
  <table class="table">
    <tbody>
      @foreach($tools as $tool)
      <tr>
        <th scope="row">{{ $tool->getName() }}</th>
        <td>U I M</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div> --}}
@endcanany
