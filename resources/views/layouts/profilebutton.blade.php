<div class="d-flex justify-content-center">

    <!-- Profile Button -->
    <a href="{{ route('user.userProfile') }}">
        <img src="{{ asset('img/group.png') }}"
            class="circle-img border border-1 border-main p-2px" alt="">
    </a>

    <!-- Notification Button -->
    <div class="alert-box all-center ms-2 position-relative">
        <div id="notification">
            <i class="fa-solid fa-bell"></i>
            <span class="active"></span>
        </div>
        <!-- Notification Box -->
        <div class="noti-box d-none" id="notificationBox">
            <h5 class="text-center fs-13 text-white py-4 border-bottom-gray mb-0">
                Notifications</h5>
            <div class="py-3 px-2">
                @if(isset($groupRequest))
                @foreach ($groupRequest as $request)
                <div class="text-white p-3 pb-0">
                    <div class="row m-0">
                        <div class="col-7 ps-0">
                            <h5 class="mb-0 fw-bold fs-11">Group Invitation</h5>
                        </div>
                        <div class="col-5 pe-0 text-end">
                            <h5 class="mb-0 fw-regular fs-9">{{date_format($request['created_at'],'h:s a d M , Y')}}</h5>
                        </div>
                    </div>
                    <p class="fw-regular mt-2 fs-11">You are invited by <span class="fw-bold">{{$request['createGroup']['fname'] .' '.$request['createGroup']['lname']}}<span></p>
                    <div class="row m-0">
                        <div class="col-6 ps-0 d-flex">
                            <a data-get-id="{{$request['id']}}" data-request="{{route('group.accept')}}"  token="{{csrf_token()}}" class="rounded-pill fs-9 btn btn-secondary text-white border-white w-100 requestAccept">Accept</a>
                            <a data-get-id="{{$request['id']}}" data-reject="{{route('group.reject')}}" token="{{csrf_token()}}" class="rounded-pill fs-9 btn btn-secondary text-white border-white w-100 requestReject">Reject</a>
                        </div>
                        <div class="col-6 pe-0">
                        </div>
                    </div>
                </div>
                @endforeach

                @endif
            </div>
        </div>
    </div>
</div>
