@if(Session::has('error'))
    {{-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ Session::get('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> --}}
    <div class="row row-sm">
        <div class="col-lg-12 col-md-12 col-md-12">
            <div class="card border-0"> 
                <div class="alert alert-solid-danger border border-danger mb-0 p-2"> 
                    <div class="d-flex align-items-start"> 
                        <div class="me-2"> 
                            <svg class="flex-shrink-0 svg-white" xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 24 24" height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000"><g><rect fill="none" height="24" width="24"></rect></g><g><g><g><path d="M15.73,3H8.27L3,8.27v7.46L8.27,21h7.46L21,15.73V8.27L15.73,3z M19,14.9L14.9,19H9.1L5,14.9V9.1L9.1,5h5.8L19,9.1V14.9z"></path><rect height="6" width="2" x="11" y="7"></rect><rect height="2" width="2" x="11" y="15"></rect></g></g></g></svg> 
                        </div> 
                        <div class="text-fixed-white w-100"> 
                            <div class="fw-semibold d-flex justify-content-between">Danger Alert
                                <button type="button" class="btn-close p-0" data-bs-dismiss="alert" aria-label="Close">
                                    <i class="bi bi-x"></i>
                                </button>
                            </div> 
                            <div class="fs-12 op-8 mb-1">{{ Session::get('error') }}</div> 
                            <div class="fs-12"> 
                                <a href="javascript:void(0);" class="text-fixed-white fw-semibold me-2 op-7">close</a>
                                <a href="javascript:void(0);" class="text-fixed-white fw-semibold">continue</a> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div>
        </div>
    </div>
@endif

@if(Session::has('success'))
    {{-- <div class="alert alert-warning alert-dismissible fade show" role="alert">
        {{ Session::get('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div> --}}
    <div class="row row-sm">
        <div class="col-lg-12 col-md-12 col-md-12">
            <div class="card border-0"> 
                <div class="alert alert-solid-secondary border border-secondary mb-0 p-2"> 
                    <div class="d-flex align-items-start"> 
                        <div class="me-2"> 
                            <svg class="flex-shrink-0 svg-white" xmlns="http://www.w3.org/2000/svg" height="1.5rem" viewBox="0 0 24 24" width="1.5rem" fill="#000000"><path d="M0 0h24v24H0V0zm0 0h24v24H0V0z" fill="none"></path><path d="M16.59 7.58L10 14.17l-3.59-3.58L5 12l5 5 8-8zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8z"></path></svg> 
                        </div> 
                        <div class="text-fixed-white w-100"> 
                            <div class="fw-semibold d-flex justify-content-between">Success Alert
                                <button type="button" class="btn-close p-0" data-bs-dismiss="alert" aria-label="Close"><i class="bi bi-x"></i></button>
                            </div> 
                            <div class="fs-12 op-8 mb-1">{{ Session::get('success') }}</div> 
                            <div class="fs-12"> 
                                <a href="javascript:void(0);" class="text-fixed-white fw-semibold me-2">close</a> 
                            </div> 
                        </div> 
                    </div> 
                </div> 
            </div>
        </div>
    </div>
@endif