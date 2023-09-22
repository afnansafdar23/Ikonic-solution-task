<div class="my-2 shadow  text-white bg-dark p-1" id="">
        @foreach ($usersData as $userData)
  <div class="d-flex justify-content-between">
    <table class="ms-1">
      <td class="align-middle">{{$userData->name}}</td>
      <td class="align-middle"> - </td>
      <td class="align-middle">{{$userData->name}}</td>
      <td class="align-middle"> 
    </table>
    <div>
      <button id="create_request_btn_" class="btn btn-primary me-1">Connect</button>
    </div>
  </div>
  @endforeach
</div>
