<div class="tab-content" id="pills-tabContent">
    <div class="my-2 shadow text-white bg-dark p-1" id="">
        @if ($mode == 'sent')
            @foreach ($usersData as $userData)
                @if ($userData->received == 1)
                    <div class="d-flex  g-3 justify-content-between tab-pane fade">
                        <table class="ms-1">
                            <td class="align-middle">{{ $userData->name }}</td>
                            <td class="align-middle"> - </td>
                            <td class="align-middle">{{ $userData->email }}</td>
                            <td class="align-middle">
                        </table>
                        <div>
                            <button id="cancel_request_btn_" class="btn btn-danger me-1" onclick="">Withdraw
                                Request</button>
                        </div>
                    </div>
                @endif
            @endforeach
        @elseif ($mode == 'received')
            @foreach ($usersData as $userData)
                @if ($userData->suggestion == 1)
                    <div class="d-flex justify-content-between g-3 tab-pane fade">
                        <table class="ms-1">
                            <td class="align-middle">{{ $userData->name }}</td>
                            <td class="align-middle"> - </td>
                            <td class="align-middle">{{ $userData->email }}</td>
                            <td class="align-middle">
                        </table>
                        <div>
                            <button id="accept_request_btn_" class="btn btn-primary me-1" onclick="">Accept</button>
                        </div>
                    </div>
                @endif
            @endforeach
        @endif
    </div>
</div>
